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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Absences;

/**
 * Absences model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AbsencesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Absences();

        $this->assertNull($obj->getAbsJour());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getCongesPayes());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDateAddedColl());
        $this->assertNull($obj->getInBul());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNb30());
        $this->assertNull($obj->getNbHAbCpCalcule());
        $this->assertNull($obj->getNbHAbCpSaisi());
        $this->assertNull($obj->getNbJH());
        $this->assertNull($obj->getNbJHCalcule());
        $this->assertNull($obj->getNumEvenement());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeBul());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getProlongation());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getTypeAbs());
    }

    /**
     * Tests the setAbsJour() method.
     *
     * @return void
     */
    public function testSetAbsJour() {

        $obj = new Absences();

        $obj->setAbsJour(true);
        $this->assertEquals(true, $obj->getAbsJour());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Absences();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new Absences();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setCongesPayes() method.
     *
     * @return void
     */
    public function testSetCongesPayes() {

        $obj = new Absences();

        $obj->setCongesPayes(true);
        $this->assertEquals(true, $obj->getCongesPayes());
    }

    /**
     * Tests the setDateAdded() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdded() {

        $obj = new Absences();

        $obj->setDateAdded(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAdded());
    }

    /**
     * Tests the setDateAddedColl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAddedColl() {

        $obj = new Absences();

        $obj->setDateAddedColl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAddedColl());
    }

    /**
     * Tests the setInBul() method.
     *
     * @return void
     */
    public function testSetInBul() {

        $obj = new Absences();

        $obj->setInBul(true);
        $this->assertEquals(true, $obj->getInBul());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new Absences();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNb30() method.
     *
     * @return void
     */
    public function testSetNb30() {

        $obj = new Absences();

        $obj->setNb30(10.092018);
        $this->assertEquals(10.092018, $obj->getNb30());
    }

    /**
     * Tests the setNbHAbCpCalcule() method.
     *
     * @return void
     */
    public function testSetNbHAbCpCalcule() {

        $obj = new Absences();

        $obj->setNbHAbCpCalcule(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCpCalcule());
    }

    /**
     * Tests the setNbHAbCpSaisi() method.
     *
     * @return void
     */
    public function testSetNbHAbCpSaisi() {

        $obj = new Absences();

        $obj->setNbHAbCpSaisi(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCpSaisi());
    }

    /**
     * Tests the setNbJH() method.
     *
     * @return void
     */
    public function testSetNbJH() {

        $obj = new Absences();

        $obj->setNbJH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJH());
    }

    /**
     * Tests the setNbJHCalcule() method.
     *
     * @return void
     */
    public function testSetNbJHCalcule() {

        $obj = new Absences();

        $obj->setNbJHCalcule(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJHCalcule());
    }

    /**
     * Tests the setNumEvenement() method.
     *
     * @return void
     */
    public function testSetNumEvenement() {

        $obj = new Absences();

        $obj->setNumEvenement(10);
        $this->assertEquals(10, $obj->getNumEvenement());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new Absences();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new Absences();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriodeBul() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeBul() {

        $obj = new Absences();

        $obj->setPeriodeBul(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeBul());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        $obj = new Absences();

        $obj->setPeriodeDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDeb());
    }

    /**
     * Tests the setPeriodeFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin() {

        $obj = new Absences();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
    }

    /**
     * Tests the setProlongation() method.
     *
     * @return void
     */
    public function testSetProlongation() {

        $obj = new Absences();

        $obj->setProlongation(true);
        $this->assertEquals(true, $obj->getProlongation());
    }

    /**
     * Tests the setReprise() method.
     *
     * @return void
     */
    public function testSetReprise() {

        $obj = new Absences();

        $obj->setReprise(true);
        $this->assertEquals(true, $obj->getReprise());
    }

    /**
     * Tests the setTypeAbs() method.
     *
     * @return void
     */
    public function testSetTypeAbs() {

        $obj = new Absences();

        $obj->setTypeAbs("typeAbs");
        $this->assertEquals("typeAbs", $obj->getTypeAbs());
    }
}
