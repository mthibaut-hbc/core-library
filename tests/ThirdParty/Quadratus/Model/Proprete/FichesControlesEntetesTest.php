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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesControlesEntetes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiches controles entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesControlesEntetesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesControlesEntetes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getDateControle());
        $this->assertNull($obj->getDateCtrlPrevue());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getFicheContradictoire());
        $this->assertNull($obj->getFicheSignee());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLocal());
        $this->assertNull($obj->getLocalPere());
        $this->assertNull($obj->getNoteGlobale());
        $this->assertNull($obj->getNoteObjectif());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getNumeroNoeudLocal());
        $this->assertNull($obj->getSatisfactionGenerale());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getUniqIDBlocage());
        $this->assertNull($obj->getUniqIdNoeud());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FichesControlesEntetes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FichesControlesEntetes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FichesControlesEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new FichesControlesEntetes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCommentaire() method.
     *
     * @return void
     */
    public function testSetCommentaire() {

        $obj = new FichesControlesEntetes();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests the setControleur() method.
     *
     * @return void
     */
    public function testSetControleur() {

        $obj = new FichesControlesEntetes();

        $obj->setControleur("controleur");
        $this->assertEquals("controleur", $obj->getControleur());
    }

    /**
     * Tests the setDateControle() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateControle() {

        $obj = new FichesControlesEntetes();

        $obj->setDateControle(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateControle());
    }

    /**
     * Tests the setDateCtrlPrevue() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrlPrevue() {

        $obj = new FichesControlesEntetes();

        $obj->setDateCtrlPrevue(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlPrevue());
    }

    /**
     * Tests the setDateTransfert() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfert() {

        $obj = new FichesControlesEntetes();

        $obj->setDateTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfert());
    }

    /**
     * Tests the setFicheContradictoire() method.
     *
     * @return void
     */
    public function testSetFicheContradictoire() {

        $obj = new FichesControlesEntetes();

        $obj->setFicheContradictoire(true);
        $this->assertEquals(true, $obj->getFicheContradictoire());
    }

    /**
     * Tests the setFicheSignee() method.
     *
     * @return void
     */
    public function testSetFicheSignee() {

        $obj = new FichesControlesEntetes();

        $obj->setFicheSignee(true);
        $this->assertEquals(true, $obj->getFicheSignee());
    }

    /**
     * Tests the setHeureDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDebut() {

        $obj = new FichesControlesEntetes();

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

        $obj = new FichesControlesEntetes();

        $obj->setHeureFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureFin());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new FichesControlesEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new FichesControlesEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLocal() method.
     *
     * @return void
     */
    public function testSetLocal() {

        $obj = new FichesControlesEntetes();

        $obj->setLocal("local");
        $this->assertEquals("local", $obj->getLocal());
    }

    /**
     * Tests the setLocalPere() method.
     *
     * @return void
     */
    public function testSetLocalPere() {

        $obj = new FichesControlesEntetes();

        $obj->setLocalPere("localPere");
        $this->assertEquals("localPere", $obj->getLocalPere());
    }

    /**
     * Tests the setNoteGlobale() method.
     *
     * @return void
     */
    public function testSetNoteGlobale() {

        $obj = new FichesControlesEntetes();

        $obj->setNoteGlobale(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteGlobale());
    }

    /**
     * Tests the setNoteObjectif() method.
     *
     * @return void
     */
    public function testSetNoteObjectif() {

        $obj = new FichesControlesEntetes();

        $obj->setNoteObjectif(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteObjectif());
    }

    /**
     * Tests the setNumeroFiche() method.
     *
     * @return void
     */
    public function testSetNumeroFiche() {

        $obj = new FichesControlesEntetes();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests the setNumeroNoeudLocal() method.
     *
     * @return void
     */
    public function testSetNumeroNoeudLocal() {

        $obj = new FichesControlesEntetes();

        $obj->setNumeroNoeudLocal(10);
        $this->assertEquals(10, $obj->getNumeroNoeudLocal());
    }

    /**
     * Tests the setSatisfactionGenerale() method.
     *
     * @return void
     */
    public function testSetSatisfactionGenerale() {

        $obj = new FichesControlesEntetes();

        $obj->setSatisfactionGenerale("satisfactionGenerale");
        $this->assertEquals("satisfactionGenerale", $obj->getSatisfactionGenerale());
    }

    /**
     * Tests the setTypeControle() method.
     *
     * @return void
     */
    public function testSetTypeControle() {

        $obj = new FichesControlesEntetes();

        $obj->setTypeControle("typeControle");
        $this->assertEquals("typeControle", $obj->getTypeControle());
    }

    /**
     * Tests the setUniqIDBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIDBlocage() {

        $obj = new FichesControlesEntetes();

        $obj->setUniqIDBlocage("uniqIDBlocage");
        $this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
    }

    /**
     * Tests the setUniqIdNoeud() method.
     *
     * @return void
     */
    public function testSetUniqIdNoeud() {

        $obj = new FichesControlesEntetes();

        $obj->setUniqIdNoeud("uniqIdNoeud");
        $this->assertEquals("uniqIdNoeud", $obj->getUniqIdNoeud());
    }
}
