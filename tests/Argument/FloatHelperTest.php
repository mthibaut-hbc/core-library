<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use Exception;
use WBW\Library\Core\Argument\FloatHelper;
use WBW\Library\Core\Exception\Argument\FloatArgumentException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Float helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 */
class FloatHelperTest extends AbstractFrameworkTestCase {

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseString() {

        $this->assertNull(FloatHelper::parseString(null));
        $this->assertEquals(1.0, FloatHelper::parseString("1"));
        $this->assertEquals(1.0, FloatHelper::parseString("1."));
        $this->assertEquals(1.0, FloatHelper::parseString("1.0"));
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException_mixed() {

        try {

            FloatHelper::parseString("1A");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"1A\" is not a float", $ex->getMessage());
        }
    }

    /**
     * Tests the parseString() method.
     *
     * @return void
     */
    public function testParseStringWithFloatArgumentException_string() {

        try {

            FloatHelper::parseString("exception");
        } catch (Exception $ex) {

            $this->assertInstanceOf(FloatArgumentException::class, $ex);
            $this->assertEquals("The argument \"exception\" is not a float", $ex->getMessage());
        }
    }

}
