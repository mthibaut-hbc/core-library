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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaLignes;

/**
 * Agenda lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaLignesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AgendaLignes();

        $this->assertNull($obj->getBudgetNumUniq());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCollCreation());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getConfirme());
        $this->assertNull($obj->getCritereLibre());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getIsTacheTP());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getJour());
        $this->assertNull($obj->getMemoPlus());
        $this->assertNull($obj->getMessage());
        $this->assertNull($obj->getNumOrdreMission());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniq2());
        $this->assertNull($obj->getPieceJointe());
        $this->assertNull($obj->getPrive());
        $this->assertNull($obj->getRecurrence());
        $this->assertNull($obj->getTypeActivite());
    }

    /**
     * Tests the setBudgetNumUniq() method.
     *
     * @return void
     */
    public function testSetBudgetNumUniq() {

        $obj = new AgendaLignes();

        $obj->setBudgetNumUniq("budgetNumUniq");
        $this->assertEquals("budgetNumUniq", $obj->getBudgetNumUniq());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AgendaLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AgendaLignes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new AgendaLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new AgendaLignes();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCollCreation() method.
     *
     * @return void
     */
    public function testSetCollCreation() {

        $obj = new AgendaLignes();

        $obj->setCollCreation("collCreation");
        $this->assertEquals("collCreation", $obj->getCollCreation());
    }

    /**
     * Tests the setCollModif() method.
     *
     * @return void
     */
    public function testSetCollModif() {

        $obj = new AgendaLignes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Tests the setConfirme() method.
     *
     * @return void
     */
    public function testSetConfirme() {

        $obj = new AgendaLignes();

        $obj->setConfirme(true);
        $this->assertEquals(true, $obj->getConfirme());
    }

    /**
     * Tests the setCritereLibre() method.
     *
     * @return void
     */
    public function testSetCritereLibre() {

        $obj = new AgendaLignes();

        $obj->setCritereLibre("critereLibre");
        $this->assertEquals("critereLibre", $obj->getCritereLibre());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        $obj = new AgendaLignes();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif() {

        $obj = new AgendaLignes();

        $obj->setDateModif(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModif());
    }

    /**
     * Tests the setHeureDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut() {

        $obj = new AgendaLignes();

        $obj->setHeureDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDebut());
    }

    /**
     * Tests the setHeureFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureFin() {

        $obj = new AgendaLignes();

        $obj->setHeureFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureFin());
    }

    /**
     * Tests the setInterlocuteur() method.
     *
     * @return void
     */
    public function testSetInterlocuteur() {

        $obj = new AgendaLignes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests the setIsTacheTP() method.
     *
     * @return void
     */
    public function testSetIsTacheTP() {

        $obj = new AgendaLignes();

        $obj->setIsTacheTP(10);
        $this->assertEquals(10, $obj->getIsTacheTP());
    }

    /**
     * Tests the setIsTransf() method.
     *
     * @return void
     */
    public function testSetIsTransf() {

        $obj = new AgendaLignes();

        $obj->setIsTransf(true);
        $this->assertEquals(true, $obj->getIsTransf());
    }

    /**
     * Tests the setJour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetJour() {

        $obj = new AgendaLignes();

        $obj->setJour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getJour());
    }

    /**
     * Tests the setMemoPlus() method.
     *
     * @return void
     */
    public function testSetMemoPlus() {

        $obj = new AgendaLignes();

        $obj->setMemoPlus("memoPlus");
        $this->assertEquals("memoPlus", $obj->getMemoPlus());
    }

    /**
     * Tests the setMessage() method.
     *
     * @return void
     */
    public function testSetMessage() {

        $obj = new AgendaLignes();

        $obj->setMessage("message");
        $this->assertEquals("message", $obj->getMessage());
    }

    /**
     * Tests the setNumOrdreMission() method.
     *
     * @return void
     */
    public function testSetNumOrdreMission() {

        $obj = new AgendaLignes();

        $obj->setNumOrdreMission("numOrdreMission");
        $this->assertEquals("numOrdreMission", $obj->getNumOrdreMission());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new AgendaLignes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Tests the setNumUniq2() method.
     *
     * @return void
     */
    public function testSetNumUniq2() {

        $obj = new AgendaLignes();

        $obj->setNumUniq2("numUniq2");
        $this->assertEquals("numUniq2", $obj->getNumUniq2());
    }

    /**
     * Tests the setPieceJointe() method.
     *
     * @return void
     */
    public function testSetPieceJointe() {

        $obj = new AgendaLignes();

        $obj->setPieceJointe("pieceJointe");
        $this->assertEquals("pieceJointe", $obj->getPieceJointe());
    }

    /**
     * Tests the setPrive() method.
     *
     * @return void
     */
    public function testSetPrive() {

        $obj = new AgendaLignes();

        $obj->setPrive(true);
        $this->assertEquals(true, $obj->getPrive());
    }

    /**
     * Tests the setRecurrence() method.
     *
     * @return void
     */
    public function testSetRecurrence() {

        $obj = new AgendaLignes();

        $obj->setRecurrence("recurrence");
        $this->assertEquals("recurrence", $obj->getRecurrence());
    }

    /**
     * Tests the setTypeActivite() method.
     *
     * @return void
     */
    public function testSetTypeActivite() {

        $obj = new AgendaLignes();

        $obj->setTypeActivite("typeActivite");
        $this->assertEquals("typeActivite", $obj->getTypeActivite());
    }
}
