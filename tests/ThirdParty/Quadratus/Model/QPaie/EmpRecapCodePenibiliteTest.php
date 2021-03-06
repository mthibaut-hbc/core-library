<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapCodePenibilite;

/**
 * Emp recap code penibilite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapCodePenibiliteTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapCodePenibilite();

        $this->assertNull($obj->getCodePenibilite());
        $this->assertNull($obj->getIDRecap());
        $this->assertNull($obj->getNumeroOrdre());
    }

    /**
     * Tests the setCodePenibilite() method.
     *
     * @return void
     */
    public function testSetCodePenibilite() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setCodePenibilite("codePenibilite");
        $this->assertEquals("codePenibilite", $obj->getCodePenibilite());
    }

    /**
     * Tests the setIDRecap() method.
     *
     * @return void
     */
    public function testSetIDRecap() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setIDRecap(10);
        $this->assertEquals(10, $obj->getIDRecap());
    }

    /**
     * Tests the setNumeroOrdre() method.
     *
     * @return void
     */
    public function testSetNumeroOrdre() {

        $obj = new EmpRecapCodePenibilite();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }
}
