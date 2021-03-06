<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\FileSystem;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\FileSystem\FileNotFoundException;
use WBW\Library\Core\Exception\FileSystem\IOException;
use ZipArchive;

/**
 * File helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\IO
 */
class FileHelper implements FileInterface {

    /**
     * Append to.
     *
     * @param string $src The source filename.
     * @param string $dest The destination filename.
     * @param bool $newline New line ?
     * @return void
     * @throws IOException Throws an I/O exception if an error occurs.
     */
    public static function appendTo($src, $dest, $newline = false) {

        // Open the destination.
        $reader = @fopen($src, "r");
        if (false === $reader) {
            throw new FileNotFoundException($src);
        }

        // Open the destination.
        $writer = @fopen($dest, "a");
        if (false === $writer) {
            throw new IOException(sprintf("Failed to open \"%s\"", $dest));
        }

        // Append the source into destination.
        if (false === @file_put_contents($dest, $reader, FILE_APPEND)) {
            throw new IOException(sprintf("Failed to append \"%s\" into \"%s\"", $src, $dest));
        }

        // Append a new line.
        if (true === $newline && false === @file_put_contents($dest, "\n", FILE_APPEND)) {
            throw new IOException(sprintf("Failed to append \"%s\" into \"%s\"", $src, $dest));
        }

        // Close the files.
        if (false === @fclose($reader)) {
            throw new IOException(sprintf("Failed to close \"%s\"", $src));
        }
        if (false === @fclose($writer)) {
            throw new IOException(sprintf("Failed to close \"%s\"", $dest));
        }
    }

    /**
     * Delete a file.
     *
     * @param string $filename The filename.
     * @return bool Returns true in case of success, false otherwise.
     * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
     */
    public static function delete($filename) {
        if (false === file_exists($filename)) {
            throw new FileNotFoundException($filename);
        }
        return unlink($filename);
    }

    /**
     * Format a size.
     *
     * @param  $size The size.
     * @param string $unit The unit.
     * @return string Returns the formated size.
     */
    public static function formatSize($size, $unit = null, $decimals = 2) {


        // Initialize the units.
        $units = static::getUnits();

        // Find the unit.
        $index = array_search($unit, $units);
        if (null !== $unit && false === $index) {
            throw new IllegalArgumentException("The unit \"" . $unit . "\" does not exists");
        }

        // Initialize the output.
        $output = $size;

        $iteration = 0;
        while (self::FILE_SIZE_DIVIDER <= $output || $iteration < $index) {
            $output /= self::FILE_SIZE_DIVIDER;
            ++$iteration;
        }

        // Return the output.
        return implode(" ", [sprintf("%." . $decimals . "f", $output), $units[$iteration]]);
    }

    /**
     * Get a file contents.
     *
     * @param string $filename The filename.
     * @return string Returns the file contents.
     * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
     */
    public static function getContents($filename) {
        if (false === file_exists($filename)) {
            throw new FileNotFoundException($filename);
        }
        return file_get_contents($filename);
    }

    /**
     * Get the filenames.
     *
     * @param string $pathname The pathname.
     * @param string $extension The file extension.
     * @return array Returns the filenames.
     * @throws FileNotFoundException Throws a file not found exception if the directory does not exists.
     */
    public static function getFilenames($pathname, $extension = null) {

        // Check if the directory exists.
        if (false === file_exists($pathname)) {
            throw new FileNotFoundException($pathname);
        }

        // Initialize the filenames.
        $filenames = [];

        // Open the directory.
        if (false !== ($directory = opendir($pathname))) {

            // Initialize the offset.
            $offset = strlen($extension);

            // Read the directory.
            while (($file = readdir($directory)) !== false) {

                // Determines if the file should be added.
                if (false === in_array($file, [".", ".."]) && ((null === $extension) || 0 === substr_compare($file, $extension, -$offset))) {
                    $filenames[] = $file;
                }
            }

            // Close the directory.
            closedir($directory);
        }

        // Return the filenames.
        return $filenames;
    }

    /**
     * Get a file size.
     *
     * @param string $filename The filename.
     * @return int Returns the file size.
     * @throws FileNotFoundException Throws a File not found exception if the file does not exists.
     */
    public static function getSize($filename) {
        if (false === file_exists($filename)) {
            throw new FileNotFoundException($filename);
        }
        clearstatcache();
        return filesize($filename);
    }

    /**
     * Get the units.
     *
     * @return array Returns the units.
     */
    public static function getUnits() {
        return [
            self::FILE_SIZE_UNIT_B,
            self::FILE_SIZE_UNIT_KB,
            self::FILE_SIZE_UNIT_MB,
            self::FILE_SIZE_UNIT_GB,
            self::FILE_SIZE_UNIT_TB,
            self::FILE_SIZE_UNIT_PB,
            self::FILE_SIZE_UNIT_EB,
            self::FILE_SIZE_UNIT_ZB,
            self::FILE_SIZE_UNIT_YB,
        ];
    }

    /**
     * Rename a file.
     *
     * @param string $oldFilename The old filename.
     * @param string $newFilename The new filename.
     * @return bool Returns true in case of success, false otherwise or null if the new filename already exists.
     * @throws FileNotFoundException Throws a file not found exception if the file does not exists.
     */
    public static function rename($oldFilename, $newFilename) {
        if (false === file_exists($oldFilename)) {
            throw new FileNotFoundException($oldFilename);
        }
        if (true === file_exists($newFilename)) {
            return null;
        }
        return rename($oldFilename, $newFilename);
    }

    /**
     * Zip a file.
     *
     * @param string $source The source filename.
     * @param string $destination The destination filename.
     * @return bool Returns true in case of success, false otherwise.
     * @throws FileNotFoundException Throws a file not found exception if the source filename is not found.
     */
    public static function zip($source, $destination) {

        // Check if the filename exists.
        if (false === file_exists($source)) {
            throw new FileNotFoundException($source);
        }

        // Initialize the ZIP archive.
        $zip = new ZipArchive();
        $zip->open($destination, ZipArchive::CREATE);

        // Clean up.
        $src = str_replace("\\\\", "/", realpath($source));

        // Is file ? => Add it and return.
        if (true === is_file($src)) {
            $zip->addFromString(basename($src), static::getContents($src));
            return $zip->close();
        }

        // Handle the files list.
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($src), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $current) {

            // Clean up.
            $cur = str_replace("\\\\", "/", realpath($current));

            // Initialize the ZIP path.
            $zipPath = preg_replace("/^" . str_replace("/", "\/", $src . "/") . "/", "", $cur);

            // Check the file type.
            if (true === is_file($cur)) {
                $zip->addFromString($zipPath, static::getContents($cur));
            }
            if (true === is_dir($cur)) {
                $zip->addEmptyDir($zipPath);
            }
        }
    }

}
