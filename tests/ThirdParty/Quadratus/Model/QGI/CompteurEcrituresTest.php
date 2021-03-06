<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\CompteurEcritures;

/**
 * Compteur ecritures model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class CompteurEcrituresTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CompteurEcritures();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateComptage());
        $this->assertNull($obj->getMillesime());
        $this->assertNull($obj->getNbEcritures());
        $this->assertNull($obj->getNbEcrituresADeduire());
        $this->assertNull($obj->getNoChronoPreparation());
        $this->assertNull($obj->getPeriodePreparation());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqIdPDF());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CompteurEcritures();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDateComptage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateComptage() {

        $obj = new CompteurEcritures();

        $obj->setDateComptage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateComptage());
    }

    /**
     * Tests the setMillesime() method.
     *
     * @return void
     */
    public function testSetMillesime() {

        $obj = new CompteurEcritures();

        $obj->setMillesime("millesime");
        $this->assertEquals("millesime", $obj->getMillesime());
    }

    /**
     * Tests the setNbEcritures() method.
     *
     * @return void
     */
    public function testSetNbEcritures() {

        $obj = new CompteurEcritures();

        $obj->setNbEcritures(10);
        $this->assertEquals(10, $obj->getNbEcritures());
    }

    /**
     * Tests the setNbEcrituresADeduire() method.
     *
     * @return void
     */
    public function testSetNbEcrituresADeduire() {

        $obj = new CompteurEcritures();

        $obj->setNbEcrituresADeduire(10.092018);
        $this->assertEquals(10.092018, $obj->getNbEcrituresADeduire());
    }

    /**
     * Tests the setNoChronoPreparation() method.
     *
     * @return void
     */
    public function testSetNoChronoPreparation() {

        $obj = new CompteurEcritures();

        $obj->setNoChronoPreparation(10);
        $this->assertEquals(10, $obj->getNoChronoPreparation());
    }

    /**
     * Tests the setPeriodePreparation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePreparation() {

        $obj = new CompteurEcritures();

        $obj->setPeriodePreparation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodePreparation());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new CompteurEcritures();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setUniqIdPDF() method.
     *
     * @return void
     */
    public function testSetUniqIdPDF() {

        $obj = new CompteurEcritures();

        $obj->setUniqIdPDF("uniqIdPDF");
        $this->assertEquals("uniqIdPDF", $obj->getUniqIdPDF());
    }
}
