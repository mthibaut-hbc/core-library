<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Database;

use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Database\MicrosoftAccessDatabase;
use WBW\Library\Core\Exception\IO\FileNotFoundException;

/**
 * Microsoft Access database test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Database
 * @final
 */
final class MicrosoftAccessDatabaseTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct method.
     *
     * @returns void
     */
    public function testConstructor() {

        $obj = new MicrosoftAccessDatabase();

        $this->assertNull($obj->getDatabase());
        $this->assertEquals("", $obj->getPassword());
        $this->assertEquals("", $obj->getUsername());
    }

    /**
     * Tests the getConnection() method.
     *
     * @return void
     */
    public function testGetConnection() {

        $obj = new MicrosoftAccessDatabase();

        try {
            $obj->setDatabase("exception");
            $obj->getConnection();
        } catch (Exception $ex) {
            $this->assertInstanceOf(FileNotFoundException::class, $ex);
            $this->assertEquals("The file \"exception\" is not found", $ex->getMessage());
        }
    }

    /**
     * Tests the prepareBinding() method.
     *
     * @return void
     */
    public function testPrepareBinding() {

        $obj = new MicrosoftAccessDatabase();

        $arg = ["field1", "field2", "field3"];
        $res = ["field1" => ":field1", "field2" => ":field2", "field3" => ":field3"];
        $this->assertEquals($res, $obj->prepareBinding($arg));
    }

    /**
     * Tests the prepareInsert() method.
     *
     * @return void
     */
    public function testPrepareInsert() {

        $obj = new MicrosoftAccessDatabase();

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "INSERT INTO table (`field1`, `field2`, `field3`) VALUES (1, 'value2', 'value3')";
        $this->assertEquals($res, $obj->prepareInsert("table", $arg));
    }

    /**
     * Tests the prepareUpdate() method.
     *
     * @return void
     */
    public function testPrepareUpdate() {

        $obj = new MicrosoftAccessDatabase();

        $arg = ["field1" => 1, "field2" => "'value2'", "field3" => "'value3'"];
        $res = "UPDATE table SET `field1` = 1, `field2` = 'value2', `field3` = 'value3'";
        $this->assertEquals($res, $obj->prepareUpdate("table", $arg));
    }

    /**
     * Tests the setDatabase() method.
     *
     * @return void
     */
    public function testSetDatabase() {

        $obj = new MicrosoftAccessDatabase();

        $obj->setDatabase("database");
        $this->assertEquals("database", $obj->getDatabase());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new MicrosoftAccessDatabase();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setUsername() method.
     *
     * @return void
     */
    public function testSetUsername() {

        $obj = new MicrosoftAccessDatabase();

        $obj->setUsername("username");
        $this->assertEquals("username", $obj->getUsername());
    }

}