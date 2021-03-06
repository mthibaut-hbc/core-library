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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AffectationsCharge;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Affectations charge model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AffectationsChargeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AffectationsCharge();

        $this->assertNull($obj->getAjoutCharge());
        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getChargeMensualisee());
        $this->assertNull($obj->getChargeQFact());
        $this->assertNull($obj->getChargeValidee());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeCharge());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getOrigineChargeMens());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setAjoutCharge() method.
     *
     * @return void
     */
    public function testSetAjoutCharge() {

        $obj = new AffectationsCharge();

        $obj->setAjoutCharge(true);
        $this->assertEquals(true, $obj->getAjoutCharge());
    }

    /**
     * Tests the setAou() method.
     *
     * @return void
     */
    public function testSetAou() {

        $obj = new AffectationsCharge();

        $obj->setAou(true);
        $this->assertEquals(true, $obj->getAou());
    }

    /**
     * Tests the setAvr() method.
     *
     * @return void
     */
    public function testSetAvr() {

        $obj = new AffectationsCharge();

        $obj->setAvr(true);
        $this->assertEquals(true, $obj->getAvr());
    }

    /**
     * Tests the setChargeMensualisee() method.
     *
     * @return void
     */
    public function testSetChargeMensualisee() {

        $obj = new AffectationsCharge();

        $obj->setChargeMensualisee(true);
        $this->assertEquals(true, $obj->getChargeMensualisee());
    }

    /**
     * Tests the setChargeQFact() method.
     *
     * @return void
     */
    public function testSetChargeQFact() {

        $obj = new AffectationsCharge();

        $obj->setChargeQFact(true);
        $this->assertEquals(true, $obj->getChargeQFact());
    }

    /**
     * Tests the setChargeValidee() method.
     *
     * @return void
     */
    public function testSetChargeValidee() {

        $obj = new AffectationsCharge();

        $obj->setChargeValidee(true);
        $this->assertEquals(true, $obj->getChargeValidee());
    }

    /**
     * Tests the setChefEquipe() method.
     *
     * @return void
     */
    public function testSetChefEquipe() {

        $obj = new AffectationsCharge();

        $obj->setChefEquipe("chefEquipe");
        $this->assertEquals("chefEquipe", $obj->getChefEquipe());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AffectationsCharge();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new AffectationsCharge();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeCharge() method.
     *
     * @return void
     */
    public function testSetCodeCharge() {

        $obj = new AffectationsCharge();

        $obj->setCodeCharge("codeCharge");
        $this->assertEquals("codeCharge", $obj->getCodeCharge());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AffectationsCharge();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeInspecteur() {

        $obj = new AffectationsCharge();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new AffectationsCharge();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new AffectationsCharge();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setDec() method.
     *
     * @return void
     */
    public function testSetDec() {

        $obj = new AffectationsCharge();

        $obj->setDec(true);
        $this->assertEquals(true, $obj->getDec());
    }

    /**
     * Tests the setFev() method.
     *
     * @return void
     */
    public function testSetFev() {

        $obj = new AffectationsCharge();

        $obj->setFev(true);
        $this->assertEquals(true, $obj->getFev());
    }

    /**
     * Tests the setJan() method.
     *
     * @return void
     */
    public function testSetJan() {

        $obj = new AffectationsCharge();

        $obj->setJan(true);
        $this->assertEquals(true, $obj->getJan());
    }

    /**
     * Tests the setJuil() method.
     *
     * @return void
     */
    public function testSetJuil() {

        $obj = new AffectationsCharge();

        $obj->setJuil(true);
        $this->assertEquals(true, $obj->getJuil());
    }

    /**
     * Tests the setJuin() method.
     *
     * @return void
     */
    public function testSetJuin() {

        $obj = new AffectationsCharge();

        $obj->setJuin(true);
        $this->assertEquals(true, $obj->getJuin());
    }

    /**
     * Tests the setMai() method.
     *
     * @return void
     */
    public function testSetMai() {

        $obj = new AffectationsCharge();

        $obj->setMai(true);
        $this->assertEquals(true, $obj->getMai());
    }

    /**
     * Tests the setMar() method.
     *
     * @return void
     */
    public function testSetMar() {

        $obj = new AffectationsCharge();

        $obj->setMar(true);
        $this->assertEquals(true, $obj->getMar());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new AffectationsCharge();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNov() method.
     *
     * @return void
     */
    public function testSetNov() {

        $obj = new AffectationsCharge();

        $obj->setNov(true);
        $this->assertEquals(true, $obj->getNov());
    }

    /**
     * Tests the setOct() method.
     *
     * @return void
     */
    public function testSetOct() {

        $obj = new AffectationsCharge();

        $obj->setOct(true);
        $this->assertEquals(true, $obj->getOct());
    }

    /**
     * Tests the setOrigineChargeMens() method.
     *
     * @return void
     */
    public function testSetOrigineChargeMens() {

        $obj = new AffectationsCharge();

        $obj->setOrigineChargeMens(true);
        $this->assertEquals(true, $obj->getOrigineChargeMens());
    }

    /**
     * Tests the setPeriodeDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb() {

        $obj = new AffectationsCharge();

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

        $obj = new AffectationsCharge();

        $obj->setPeriodeFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeFin());
    }

    /**
     * Tests the setSep() method.
     *
     * @return void
     */
    public function testSetSep() {

        $obj = new AffectationsCharge();

        $obj->setSep(true);
        $this->assertEquals(true, $obj->getSep());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new AffectationsCharge();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }
}
