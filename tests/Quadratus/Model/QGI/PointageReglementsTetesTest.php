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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\PointageReglementsTetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Pointage reglements tetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class PointageReglementsTetesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointageReglementsTetes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollCreation());
        $this->assertNull($obj->getCodeCollGenere());
        $this->assertNull($obj->getCodeCollModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateGenere());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisi());
        $this->assertNull($obj->getNumCptPayeur());
        $this->assertNull($obj->getNumDoss());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new PointageReglementsTetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollCreation() method.
     *
     * @return void
     */
    public function testSetCodeCollCreation() {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollCreation("codeCollCreation");
        $this->assertEquals("codeCollCreation", $obj->getCodeCollCreation());
    }

    /**
     * Tests the setCodeCollGenere() method.
     *
     * @return void
     */
    public function testSetCodeCollGenere() {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollGenere("codeCollGenere");
        $this->assertEquals("codeCollGenere", $obj->getCodeCollGenere());
    }

    /**
     * Tests the setCodeCollModif() method.
     *
     * @return void
     */
    public function testSetCodeCollModif() {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollModif("codeCollModif");
        $this->assertEquals("codeCollModif", $obj->getCodeCollModif());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     */
    public function testSetDateCreation() {

        $obj = new PointageReglementsTetes();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateGenere() method.
     *
     * @return void
     */
    public function testSetDateGenere() {

        $obj = new PointageReglementsTetes();

        $obj->setDateGenere(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateGenere());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     */
    public function testSetDateModif() {

        $obj = new PointageReglementsTetes();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new PointageReglementsTetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantSaisi() method.
     *
     * @return void
     */
    public function testSetMontantSaisi() {

        $obj = new PointageReglementsTetes();

        $obj->setMontantSaisi(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisi());
    }

    /**
     * Tests the setNumCptPayeur() method.
     *
     * @return void
     */
    public function testSetNumCptPayeur() {

        $obj = new PointageReglementsTetes();

        $obj->setNumCptPayeur("numCptPayeur");
        $this->assertEquals("numCptPayeur", $obj->getNumCptPayeur());
    }

    /**
     * Tests the setNumDoss() method.
     *
     * @return void
     */
    public function testSetNumDoss() {

        $obj = new PointageReglementsTetes();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

}
