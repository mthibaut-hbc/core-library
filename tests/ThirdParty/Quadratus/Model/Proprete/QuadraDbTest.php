<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\QuadraDb;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Quadra db model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class QuadraDbTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new QuadraDb();

        $this->assertNull($obj->getDateEnvoiMessage());
        $this->assertNull($obj->getTailleBase());
        $this->assertNull($obj->getVersion());
    }

    /**
     * Tests the setDateEnvoiMessage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEnvoiMessage() {

        $obj = new QuadraDb();

        $obj->setDateEnvoiMessage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEnvoiMessage());
    }

    /**
     * Tests the setTailleBase() method.
     *
     * @return void
     */
    public function testSetTailleBase() {

        $obj = new QuadraDb();

        $obj->setTailleBase(10.092018);
        $this->assertEquals(10.092018, $obj->getTailleBase());
    }

    /**
     * Tests the setVersion() method.
     *
     * @return void
     */
    public function testSetVersion() {

        $obj = new QuadraDb();

        $obj->setVersion(10);
        $this->assertEquals(10, $obj->getVersion());
    }
}
