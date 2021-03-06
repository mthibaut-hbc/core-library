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

use WBW\Library\Core\Exception\FileSystem\FileNotFoundException;

/**
 * Directory helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\IO
 */
class DirectoryHelper {

    /**
     * Create a directory.
     *
     * @param string $dirname The directory name.
     * @param int $mode The directory mode.
     * @param bool $recursive Recursive ?
     * @return bool Returns true in case of success, false otherwise or null if the directory exists.
     */
    public static function create($dirname, $mode = 0755, $recursive = false) {
        if (true === file_exists($dirname)) {
            return null;
        }
        return mkdir($dirname, $mode, $recursive);
    }

    /**
     * Delete a directory.
     *
     * @param string $dirname The directory name.
     * @return bool Returns true in case of success, false otherwise or null if the directory can't be deleted.
     */
    public static function delete($dirname) {
        if (true !== static::isEmpty($dirname)) {
            return null;
        }
        return rmdir($dirname);
    }

    /**
     * Determines if a directory is empty.
     *
     * @param string $dirname The directory name.
     * @return bool Returns true in case of success, false otherwise or null if the directory is not readable.
     */
    public static function isEmpty($dirname) {
        if (false === is_readable($dirname)) {
            return null;
        }
        return (count(scandir($dirname)) == 2);
    }

    /**
     * Rename a directory.
     *
     * @param string $oldDirname The old directory name.
     * @param string $newDirname The new directory name.
     * @return bool Returns true in case of success, false otherwise or null if the new directory name already exists.
     * @throws FileNotFoundException Throws a file not found exception if the directory does not exists.
     */
    public static function rename($oldDirname, $newDirname) {
        return FileHelper::rename($oldDirname, $newDirname);
    }

}
