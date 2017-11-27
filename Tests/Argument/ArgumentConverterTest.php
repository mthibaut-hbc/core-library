<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Argument;

use DateTime;
use Exception;
use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Argument\ArgumentConverter;
use WBW\Library\Core\Argument\ArgumentInterface;
use WBW\Library\Core\Exception\Argument\IllegalArgumentException;
use WBW\Library\Core\Exception\Pointer\NullPointerException;

/**
 * Argument converter test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Argument
 * @final
 */
final class ArgumentConverterTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the convert() method.
	 *
	 * @return void
	 */
	public function testConvert() {

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_ARRAY);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex);
			$this->assertEquals("The type \"63\" is not implemented", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_DATE);
		} catch (Exception $ex) {
			$this->assertInstanceOf(NullPointerException::class, $ex);
			$this->assertEquals("The date format is null", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_NUMBER);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex);
			$this->assertEquals("The type \"73\" is not implemented", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_OBJECT);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex);
			$this->assertEquals("The type \"55\" is not implemented", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_RESOURCE);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex);
			$this->assertEquals("The type \"104\" is not implemented", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_STRING);
		} catch (Exception $ex) {
			$this->assertInstanceOf(IllegalArgumentException::class, $ex);
			$this->assertEquals("The type \"87\" is not implemented", $ex->getMessage());
		}

		try {
			ArgumentConverter::convert(null, ArgumentInterface::TYPE_TIMESTAMP);
		} catch (Exception $ex) {
			$this->assertInstanceOf(NullPointerException::class, $ex);
			$this->assertEquals("The datetime format is null", $ex->getMessage());
		}

		$this->assertEquals(true, ArgumentConverter::convert("1", ArgumentInterface::TYPE_BOOLEAN));
		$this->assertInstanceOf(DateTime::class, ArgumentConverter::convert("2017-11-27", ArgumentInterface::TYPE_DATE, "Y-m-d"));
		$this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::TYPE_DOUBLE));
		$this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::TYPE_FLOAT));
		$this->assertEquals(1, ArgumentConverter::convert("1", ArgumentInterface::TYPE_INTEGER));
		$this->assertInstanceOf(DateTime::class, ArgumentConverter::convert("2017-11-27 11:20:00", ArgumentInterface::TYPE_DATE, "Y-m-d H:m:s"));
	}

}