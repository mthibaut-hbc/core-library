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

use WBW\Library\Core\Quadratus\Model\QGI\TravauxTypeLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Travaux type lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class TravauxTypeLignesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new TravauxTypeLignes();

		$this->assertNull($obj->getCodeRepartition());
		$this->assertNull($obj->getCodeTravail());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNbUO());
		$this->assertNull($obj->getNiveauLigne());
		$this->assertNull($obj->getNumeroLigne());
		$this->assertNull($obj->getPolice());
	}

	/**
	 * Tests the setCodeRepartition() method.
	 *
	 * @return void
	 */
	public function testSetCodeRepartition() {

		$obj = new TravauxTypeLignes();

		$obj->setCodeRepartition("codeRepartition");
		$this->assertEquals("codeRepartition", $obj->getCodeRepartition());
	}

	/**
	 * Tests the setCodeTravail() method.
	 *
	 * @return void
	 */
	public function testSetCodeTravail() {

		$obj = new TravauxTypeLignes();

		$obj->setCodeTravail("codeTravail");
		$this->assertEquals("codeTravail", $obj->getCodeTravail());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new TravauxTypeLignes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNbUO() method.
	 *
	 * @return void
	 */
	public function testSetNbUO() {

		$obj = new TravauxTypeLignes();

		$obj->setNbUO(10.092018);
		$this->assertEquals(10.092018, $obj->getNbUO());
	}

	/**
	 * Tests the setNiveauLigne() method.
	 *
	 * @return void
	 */
	public function testSetNiveauLigne() {

		$obj = new TravauxTypeLignes();

		$obj->setNiveauLigne("niveauLigne");
		$this->assertEquals("niveauLigne", $obj->getNiveauLigne());
	}

	/**
	 * Tests the setNumeroLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumeroLigne() {

		$obj = new TravauxTypeLignes();

		$obj->setNumeroLigne(10);
		$this->assertEquals(10, $obj->getNumeroLigne());
	}

	/**
	 * Tests the setPolice() method.
	 *
	 * @return void
	 */
	public function testSetPolice() {

		$obj = new TravauxTypeLignes();

		$obj->setPolice("police");
		$this->assertEquals("police", $obj->getPolice());
	}

}
