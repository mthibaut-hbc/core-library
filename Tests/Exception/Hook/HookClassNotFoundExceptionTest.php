<?php

/*
 * This file is part of the WBWCoreLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Exception\Hook;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Exception\Hook\HookClassNotFoundException;

/**
 * Hook class not found exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Hook
 * @final
 */
final class HookClassNotFoundExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     */
    public function testConstruct() {

        $ex = new HookClassNotFoundException("HookClassNotFoundException");

        $res = "The hook class \"HookClassNotFoundException\" is not found";
        $this->assertEquals($res, $ex->getMessage(), "The method getMessage() does not return the expected string");
    }

}