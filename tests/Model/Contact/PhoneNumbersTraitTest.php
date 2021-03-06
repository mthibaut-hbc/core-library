<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Contact;

use WBW\Library\Core\Model\Contact\PhoneNumbersTrait;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Phone numbers trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Contact
 */
class PhoneNumbersTraitTest extends AbstractFrameworkTestCase {

    /**
     * Phone numbers.
     *
     * @var PhoneNumbersTrait
     */
    private $phoneNumbers;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {

        $this->phoneNumbers = $this->getObjectForTrait(PhoneNumbersTrait::class);
    }

    /**
     * Tests the __constructor() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertNull($this->phoneNumbers->getMobileNumber());
        $this->assertNull($this->phoneNumbers->getPhoneNumber());
    }

    /**
     * Tests the setMobileNumber() method.
     *
     * @return void
     */
    public function testSetMobileNumber() {

        $this->phoneNumbers->setMobileNumber("mobileNumber");
        $this->assertEquals("mobileNumber", $this->phoneNumbers->getMobileNumber());
    }

    /**
     * Tests the setPhoneNumber() method.
     *
     * @return void
     */
    public function testSetCity() {

        $this->phoneNumbers->setPhoneNumber("phoneNumber");
        $this->assertEquals("phoneNumber", $this->phoneNumbers->getPhoneNumber());
    }

}
