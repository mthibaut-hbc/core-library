<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Choices;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Choices\MaritalStatusChoices;

/**
 * Marital status choices test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Choices
 * @final
 */
final class MaritalStatusChoicesTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getChoices() method.
	 *
	 * @return void
	 */
	public function testGetChoices() {

		$res = [-1 => "choices.marital-status.empty", 66 => "choices.marital-status.single", 39 => "choices.marital-status.pacs", 68 => "choices.marital-status.married", 80 => "choices.marital-status.divorced", 97 => "choices.marital-status.widower"];
		$this->assertEquals($res, MaritalStatusChoices::getChoices());
	}

}