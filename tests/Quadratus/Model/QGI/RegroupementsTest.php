<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\Regroupements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Regroupements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class RegroupementsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Regroupements();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumOrdre());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Regroupements();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Regroupements();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumOrdre() method.
     *
     * @return void
     */
    public function testSetNumOrdre() {

        $obj = new Regroupements();

        $obj->setNumOrdre(10);
        $this->assertEquals(10, $obj->getNumOrdre());
    }

}
