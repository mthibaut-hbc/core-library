<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\SkiData\Traits;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\SkiData\Traits\TestCustomerTrait;

/**
 * Customer trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\SkiData\Traits
 */
class CustomerTraitTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new TestCustomerTrait();

        $this->assertNull($obj->getCustomerNumber());
        $this->assertNull($obj->getDatetimeLastModification());
        $this->assertNull($obj->getDeletedRecord());
        $this->assertNull($obj->getDivision());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFirstname());
        $this->assertNull($obj->getGroupCounting());
        $this->assertNull($obj->getRemarks());
        $this->assertNull($obj->getRemarks2());
        $this->assertNull($obj->getRemarks3());
        $this->assertNull($obj->getSurname());
        $this->assertNull($obj->getTitle());
    }

    /**
     * Tests the setCustomerNumber() method.
     *
     * @return void
     */
    public function testSetCustomerNumber() {

        $obj = new TestCustomerTrait();

        $obj->setCustomerNumber(1);
        $this->assertEquals(1, $obj->getCustomerNumber());
    }

    /**
     * Tests the setDatetimeLastModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatetimeLastModification() {

        $obj = new TestCustomerTrait();

        $obj->setDatetimeLastModification(new DateTime("2018-08-30"));
        $this->assertEquals("2018-08-30", $obj->getDatetimeLastModification()->format("Y-m-d"));
    }

    /**
     * Tests the setDeletedRecord() method.
     *
     * @return void
     */
    public function testSetDeletedRecord() {

        $obj = new TestCustomerTrait();

        $obj->setDeletedRecord(true);
        $this->assertTrue($obj->getDeletedRecord());
    }

    /**
     * Tests the setDivision() method.
     *
     * @return void
     */
    public function testSetDivision() {

        $obj = new TestCustomerTrait();

        $obj->setDivision("division");
        $this->assertEquals("division", $obj->getDivision());
    }

    /**
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new TestCustomerTrait();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests the setFirstname() method.
     *
     * @return void
     */
    public function testSetFirstname() {

        $obj = new TestCustomerTrait();

        $obj->setFirstname("firstname");
        $this->assertEquals("firstname", $obj->getFirstname());
    }

    /**
     * Tests the setGroupCounting() method.
     *
     * @return void
     */
    public function testSetGroupCounting() {

        $obj = new TestCustomerTrait();

        $obj->setGroupCounting(true);
        $this->assertTrue($obj->getGroupCounting());
    }

    /**
     * Tests the setRemarks() method.
     *
     * @return void
     */
    public function testSetRemarks() {

        $obj = new TestCustomerTrait();

        $obj->setRemarks("remarks");
        $this->assertEquals("remarks", $obj->getRemarks());
    }

    /**
     * Tests the setRemarks2() method.
     *
     * @return void
     */
    public function testSetRemarks2() {

        $obj = new TestCustomerTrait();

        $obj->setRemarks2("remarks2");
        $this->assertEquals("remarks2", $obj->getRemarks2());
    }

    /**
     * Tests the setRemarks3() method.
     *
     * @return void
     */
    public function testSetRemarks3() {

        $obj = new TestCustomerTrait();

        $obj->setRemarks3("remarks3");
        $this->assertEquals("remarks3", $obj->getRemarks3());
    }

    /**
     * Tests the setSurname() method.
     *
     * @return void
     */
    public function testSetSurname() {

        $obj = new TestCustomerTrait();

        $obj->setSurname("surname");
        $this->assertEquals("surname", $obj->getSurname());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new TestCustomerTrait();

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }
}
