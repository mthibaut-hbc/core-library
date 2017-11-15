<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Navigation\Node;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * Breadcrumb node test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Navigation\Node
 * @final
 */
final class BreadcrumbNodeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new BreadcrumbNode("id");

		$this->assertEquals(false, $obj->getActive());
		$this->assertEquals(false, $obj->getEnable());
		$this->assertEquals(null, $obj->getIcon());
		$this->assertEquals(null, $obj->getRoute());
		$this->assertEquals(null, $obj->getUrl());
		$this->assertEquals(false, $obj->getVisible());

		$obj->setActive(true);
		$obj->setEnable(true);
		$obj->setIcon("icon");
		$obj->setRoute("route");
		$obj->setUrl("url");

		$this->assertEquals(true, $obj->getActive());
		$this->assertEquals(true, $obj->getEnable());
		$this->assertEquals("icon", $obj->getIcon());
		$this->assertEquals("route", $obj->getRoute());
		$this->assertEquals("url", $obj->getUrl());
	}

}
