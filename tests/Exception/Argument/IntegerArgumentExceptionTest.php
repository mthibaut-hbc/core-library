<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Argument;

use WBW\Library\Core\Exception\Argument\IntegerArgumentException;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Integer argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Argument
 */
class IntegerArgumentExceptionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new IntegerArgumentException("exception");

        $res = "The argument \"exception\" is not an integer";
        $this->assertEquals($res, $ex->getMessage());
    }

}
