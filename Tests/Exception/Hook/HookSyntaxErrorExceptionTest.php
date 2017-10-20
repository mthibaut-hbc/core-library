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
use WBW\Library\Core\Exception\Hook\HookSyntaxErrorException;

/**
 * Hook syntax error exception test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Exception\Hook
 * @final
 */
final class HookSyntaxErrorExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Test the __construct() method.
     */
    public function testConstruct() {

        $ex = new HookSyntaxErrorException("HookSyntaxErrorException");

        $res = "The hook file \"HookSyntaxErrorException\" contains syntax errors";
        $this->assertEquals($res, $ex->getMessage(), "The method getMessage() does not return the expected string");
    }

}