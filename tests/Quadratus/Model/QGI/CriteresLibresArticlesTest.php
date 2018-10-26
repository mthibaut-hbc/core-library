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
use WBW\Library\Core\Quadratus\Model\QGI\CriteresLibresArticles;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Criteres libres articles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class CriteresLibresArticlesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new CriteresLibresArticles();

		$this->assertNull($obj->getCase1());
		$this->assertNull($obj->getCase10());
		$this->assertNull($obj->getCase11());
		$this->assertNull($obj->getCase12());
		$this->assertNull($obj->getCase13());
		$this->assertNull($obj->getCase14());
		$this->assertNull($obj->getCase15());
		$this->assertNull($obj->getCase16());
		$this->assertNull($obj->getCase17());
		$this->assertNull($obj->getCase18());
		$this->assertNull($obj->getCase19());
		$this->assertNull($obj->getCase2());
		$this->assertNull($obj->getCase20());
		$this->assertNull($obj->getCase21());
		$this->assertNull($obj->getCase22());
		$this->assertNull($obj->getCase23());
		$this->assertNull($obj->getCase24());
		$this->assertNull($obj->getCase25());
		$this->assertNull($obj->getCase26());
		$this->assertNull($obj->getCase27());
		$this->assertNull($obj->getCase28());
		$this->assertNull($obj->getCase29());
		$this->assertNull($obj->getCase3());
		$this->assertNull($obj->getCase30());
		$this->assertNull($obj->getCase31());
		$this->assertNull($obj->getCase32());
		$this->assertNull($obj->getCase33());
		$this->assertNull($obj->getCase34());
		$this->assertNull($obj->getCase35());
		$this->assertNull($obj->getCase36());
		$this->assertNull($obj->getCase37());
		$this->assertNull($obj->getCase38());
		$this->assertNull($obj->getCase39());
		$this->assertNull($obj->getCase4());
		$this->assertNull($obj->getCase40());
		$this->assertNull($obj->getCase41());
		$this->assertNull($obj->getCase42());
		$this->assertNull($obj->getCase43());
		$this->assertNull($obj->getCase44());
		$this->assertNull($obj->getCase45());
		$this->assertNull($obj->getCase46());
		$this->assertNull($obj->getCase47());
		$this->assertNull($obj->getCase48());
		$this->assertNull($obj->getCase49());
		$this->assertNull($obj->getCase5());
		$this->assertNull($obj->getCase50());
		$this->assertNull($obj->getCase6());
		$this->assertNull($obj->getCase7());
		$this->assertNull($obj->getCase8());
		$this->assertNull($obj->getCase9());
		$this->assertNull($obj->getCodeArticle());
		$this->assertNull($obj->getDate1());
		$this->assertNull($obj->getDate10());
		$this->assertNull($obj->getDate11());
		$this->assertNull($obj->getDate12());
		$this->assertNull($obj->getDate13());
		$this->assertNull($obj->getDate14());
		$this->assertNull($obj->getDate15());
		$this->assertNull($obj->getDate16());
		$this->assertNull($obj->getDate17());
		$this->assertNull($obj->getDate18());
		$this->assertNull($obj->getDate19());
		$this->assertNull($obj->getDate2());
		$this->assertNull($obj->getDate20());
		$this->assertNull($obj->getDate21());
		$this->assertNull($obj->getDate22());
		$this->assertNull($obj->getDate23());
		$this->assertNull($obj->getDate24());
		$this->assertNull($obj->getDate25());
		$this->assertNull($obj->getDate26());
		$this->assertNull($obj->getDate27());
		$this->assertNull($obj->getDate28());
		$this->assertNull($obj->getDate29());
		$this->assertNull($obj->getDate3());
		$this->assertNull($obj->getDate30());
		$this->assertNull($obj->getDate31());
		$this->assertNull($obj->getDate32());
		$this->assertNull($obj->getDate33());
		$this->assertNull($obj->getDate34());
		$this->assertNull($obj->getDate35());
		$this->assertNull($obj->getDate36());
		$this->assertNull($obj->getDate37());
		$this->assertNull($obj->getDate38());
		$this->assertNull($obj->getDate39());
		$this->assertNull($obj->getDate4());
		$this->assertNull($obj->getDate40());
		$this->assertNull($obj->getDate41());
		$this->assertNull($obj->getDate42());
		$this->assertNull($obj->getDate43());
		$this->assertNull($obj->getDate44());
		$this->assertNull($obj->getDate45());
		$this->assertNull($obj->getDate46());
		$this->assertNull($obj->getDate47());
		$this->assertNull($obj->getDate48());
		$this->assertNull($obj->getDate49());
		$this->assertNull($obj->getDate5());
		$this->assertNull($obj->getDate50());
		$this->assertNull($obj->getDate6());
		$this->assertNull($obj->getDate7());
		$this->assertNull($obj->getDate8());
		$this->assertNull($obj->getDate9());
		$this->assertNull($obj->getTexte1());
		$this->assertNull($obj->getTexte10());
		$this->assertNull($obj->getTexte11());
		$this->assertNull($obj->getTexte12());
		$this->assertNull($obj->getTexte13());
		$this->assertNull($obj->getTexte14());
		$this->assertNull($obj->getTexte15());
		$this->assertNull($obj->getTexte16());
		$this->assertNull($obj->getTexte17());
		$this->assertNull($obj->getTexte18());
		$this->assertNull($obj->getTexte19());
		$this->assertNull($obj->getTexte2());
		$this->assertNull($obj->getTexte20());
		$this->assertNull($obj->getTexte21());
		$this->assertNull($obj->getTexte22());
		$this->assertNull($obj->getTexte23());
		$this->assertNull($obj->getTexte24());
		$this->assertNull($obj->getTexte25());
		$this->assertNull($obj->getTexte26());
		$this->assertNull($obj->getTexte27());
		$this->assertNull($obj->getTexte28());
		$this->assertNull($obj->getTexte29());
		$this->assertNull($obj->getTexte3());
		$this->assertNull($obj->getTexte30());
		$this->assertNull($obj->getTexte31());
		$this->assertNull($obj->getTexte32());
		$this->assertNull($obj->getTexte33());
		$this->assertNull($obj->getTexte34());
		$this->assertNull($obj->getTexte35());
		$this->assertNull($obj->getTexte36());
		$this->assertNull($obj->getTexte37());
		$this->assertNull($obj->getTexte38());
		$this->assertNull($obj->getTexte39());
		$this->assertNull($obj->getTexte4());
		$this->assertNull($obj->getTexte40());
		$this->assertNull($obj->getTexte41());
		$this->assertNull($obj->getTexte42());
		$this->assertNull($obj->getTexte43());
		$this->assertNull($obj->getTexte44());
		$this->assertNull($obj->getTexte45());
		$this->assertNull($obj->getTexte46());
		$this->assertNull($obj->getTexte47());
		$this->assertNull($obj->getTexte48());
		$this->assertNull($obj->getTexte49());
		$this->assertNull($obj->getTexte5());
		$this->assertNull($obj->getTexte50());
		$this->assertNull($obj->getTexte6());
		$this->assertNull($obj->getTexte7());
		$this->assertNull($obj->getTexte8());
		$this->assertNull($obj->getTexte9());
		$this->assertNull($obj->getValeur1());
		$this->assertNull($obj->getValeur10());
		$this->assertNull($obj->getValeur11());
		$this->assertNull($obj->getValeur12());
		$this->assertNull($obj->getValeur13());
		$this->assertNull($obj->getValeur14());
		$this->assertNull($obj->getValeur15());
		$this->assertNull($obj->getValeur16());
		$this->assertNull($obj->getValeur17());
		$this->assertNull($obj->getValeur18());
		$this->assertNull($obj->getValeur19());
		$this->assertNull($obj->getValeur2());
		$this->assertNull($obj->getValeur20());
		$this->assertNull($obj->getValeur21());
		$this->assertNull($obj->getValeur22());
		$this->assertNull($obj->getValeur23());
		$this->assertNull($obj->getValeur24());
		$this->assertNull($obj->getValeur25());
		$this->assertNull($obj->getValeur26());
		$this->assertNull($obj->getValeur27());
		$this->assertNull($obj->getValeur28());
		$this->assertNull($obj->getValeur29());
		$this->assertNull($obj->getValeur3());
		$this->assertNull($obj->getValeur30());
		$this->assertNull($obj->getValeur31());
		$this->assertNull($obj->getValeur32());
		$this->assertNull($obj->getValeur33());
		$this->assertNull($obj->getValeur34());
		$this->assertNull($obj->getValeur35());
		$this->assertNull($obj->getValeur36());
		$this->assertNull($obj->getValeur37());
		$this->assertNull($obj->getValeur38());
		$this->assertNull($obj->getValeur39());
		$this->assertNull($obj->getValeur4());
		$this->assertNull($obj->getValeur40());
		$this->assertNull($obj->getValeur41());
		$this->assertNull($obj->getValeur42());
		$this->assertNull($obj->getValeur43());
		$this->assertNull($obj->getValeur44());
		$this->assertNull($obj->getValeur45());
		$this->assertNull($obj->getValeur46());
		$this->assertNull($obj->getValeur47());
		$this->assertNull($obj->getValeur48());
		$this->assertNull($obj->getValeur49());
		$this->assertNull($obj->getValeur5());
		$this->assertNull($obj->getValeur50());
		$this->assertNull($obj->getValeur6());
		$this->assertNull($obj->getValeur7());
		$this->assertNull($obj->getValeur8());
		$this->assertNull($obj->getValeur9());
	}

	/**
	 * Tests the setCase1() method.
	 *
	 * @return void
	 */
	public function testSetCase1() {

		$obj = new CriteresLibresArticles();

		$obj->setCase1(true);
		$this->assertEquals(true, $obj->getCase1());
	}

	/**
	 * Tests the setCase10() method.
	 *
	 * @return void
	 */
	public function testSetCase10() {

		$obj = new CriteresLibresArticles();

		$obj->setCase10(true);
		$this->assertEquals(true, $obj->getCase10());
	}

	/**
	 * Tests the setCase11() method.
	 *
	 * @return void
	 */
	public function testSetCase11() {

		$obj = new CriteresLibresArticles();

		$obj->setCase11(true);
		$this->assertEquals(true, $obj->getCase11());
	}

	/**
	 * Tests the setCase12() method.
	 *
	 * @return void
	 */
	public function testSetCase12() {

		$obj = new CriteresLibresArticles();

		$obj->setCase12(true);
		$this->assertEquals(true, $obj->getCase12());
	}

	/**
	 * Tests the setCase13() method.
	 *
	 * @return void
	 */
	public function testSetCase13() {

		$obj = new CriteresLibresArticles();

		$obj->setCase13(true);
		$this->assertEquals(true, $obj->getCase13());
	}

	/**
	 * Tests the setCase14() method.
	 *
	 * @return void
	 */
	public function testSetCase14() {

		$obj = new CriteresLibresArticles();

		$obj->setCase14(true);
		$this->assertEquals(true, $obj->getCase14());
	}

	/**
	 * Tests the setCase15() method.
	 *
	 * @return void
	 */
	public function testSetCase15() {

		$obj = new CriteresLibresArticles();

		$obj->setCase15(true);
		$this->assertEquals(true, $obj->getCase15());
	}

	/**
	 * Tests the setCase16() method.
	 *
	 * @return void
	 */
	public function testSetCase16() {

		$obj = new CriteresLibresArticles();

		$obj->setCase16(true);
		$this->assertEquals(true, $obj->getCase16());
	}

	/**
	 * Tests the setCase17() method.
	 *
	 * @return void
	 */
	public function testSetCase17() {

		$obj = new CriteresLibresArticles();

		$obj->setCase17(true);
		$this->assertEquals(true, $obj->getCase17());
	}

	/**
	 * Tests the setCase18() method.
	 *
	 * @return void
	 */
	public function testSetCase18() {

		$obj = new CriteresLibresArticles();

		$obj->setCase18(true);
		$this->assertEquals(true, $obj->getCase18());
	}

	/**
	 * Tests the setCase19() method.
	 *
	 * @return void
	 */
	public function testSetCase19() {

		$obj = new CriteresLibresArticles();

		$obj->setCase19(true);
		$this->assertEquals(true, $obj->getCase19());
	}

	/**
	 * Tests the setCase2() method.
	 *
	 * @return void
	 */
	public function testSetCase2() {

		$obj = new CriteresLibresArticles();

		$obj->setCase2(true);
		$this->assertEquals(true, $obj->getCase2());
	}

	/**
	 * Tests the setCase20() method.
	 *
	 * @return void
	 */
	public function testSetCase20() {

		$obj = new CriteresLibresArticles();

		$obj->setCase20(true);
		$this->assertEquals(true, $obj->getCase20());
	}

	/**
	 * Tests the setCase21() method.
	 *
	 * @return void
	 */
	public function testSetCase21() {

		$obj = new CriteresLibresArticles();

		$obj->setCase21(true);
		$this->assertEquals(true, $obj->getCase21());
	}

	/**
	 * Tests the setCase22() method.
	 *
	 * @return void
	 */
	public function testSetCase22() {

		$obj = new CriteresLibresArticles();

		$obj->setCase22(true);
		$this->assertEquals(true, $obj->getCase22());
	}

	/**
	 * Tests the setCase23() method.
	 *
	 * @return void
	 */
	public function testSetCase23() {

		$obj = new CriteresLibresArticles();

		$obj->setCase23(true);
		$this->assertEquals(true, $obj->getCase23());
	}

	/**
	 * Tests the setCase24() method.
	 *
	 * @return void
	 */
	public function testSetCase24() {

		$obj = new CriteresLibresArticles();

		$obj->setCase24(true);
		$this->assertEquals(true, $obj->getCase24());
	}

	/**
	 * Tests the setCase25() method.
	 *
	 * @return void
	 */
	public function testSetCase25() {

		$obj = new CriteresLibresArticles();

		$obj->setCase25(true);
		$this->assertEquals(true, $obj->getCase25());
	}

	/**
	 * Tests the setCase26() method.
	 *
	 * @return void
	 */
	public function testSetCase26() {

		$obj = new CriteresLibresArticles();

		$obj->setCase26(true);
		$this->assertEquals(true, $obj->getCase26());
	}

	/**
	 * Tests the setCase27() method.
	 *
	 * @return void
	 */
	public function testSetCase27() {

		$obj = new CriteresLibresArticles();

		$obj->setCase27(true);
		$this->assertEquals(true, $obj->getCase27());
	}

	/**
	 * Tests the setCase28() method.
	 *
	 * @return void
	 */
	public function testSetCase28() {

		$obj = new CriteresLibresArticles();

		$obj->setCase28(true);
		$this->assertEquals(true, $obj->getCase28());
	}

	/**
	 * Tests the setCase29() method.
	 *
	 * @return void
	 */
	public function testSetCase29() {

		$obj = new CriteresLibresArticles();

		$obj->setCase29(true);
		$this->assertEquals(true, $obj->getCase29());
	}

	/**
	 * Tests the setCase3() method.
	 *
	 * @return void
	 */
	public function testSetCase3() {

		$obj = new CriteresLibresArticles();

		$obj->setCase3(true);
		$this->assertEquals(true, $obj->getCase3());
	}

	/**
	 * Tests the setCase30() method.
	 *
	 * @return void
	 */
	public function testSetCase30() {

		$obj = new CriteresLibresArticles();

		$obj->setCase30(true);
		$this->assertEquals(true, $obj->getCase30());
	}

	/**
	 * Tests the setCase31() method.
	 *
	 * @return void
	 */
	public function testSetCase31() {

		$obj = new CriteresLibresArticles();

		$obj->setCase31(true);
		$this->assertEquals(true, $obj->getCase31());
	}

	/**
	 * Tests the setCase32() method.
	 *
	 * @return void
	 */
	public function testSetCase32() {

		$obj = new CriteresLibresArticles();

		$obj->setCase32(true);
		$this->assertEquals(true, $obj->getCase32());
	}

	/**
	 * Tests the setCase33() method.
	 *
	 * @return void
	 */
	public function testSetCase33() {

		$obj = new CriteresLibresArticles();

		$obj->setCase33(true);
		$this->assertEquals(true, $obj->getCase33());
	}

	/**
	 * Tests the setCase34() method.
	 *
	 * @return void
	 */
	public function testSetCase34() {

		$obj = new CriteresLibresArticles();

		$obj->setCase34(true);
		$this->assertEquals(true, $obj->getCase34());
	}

	/**
	 * Tests the setCase35() method.
	 *
	 * @return void
	 */
	public function testSetCase35() {

		$obj = new CriteresLibresArticles();

		$obj->setCase35(true);
		$this->assertEquals(true, $obj->getCase35());
	}

	/**
	 * Tests the setCase36() method.
	 *
	 * @return void
	 */
	public function testSetCase36() {

		$obj = new CriteresLibresArticles();

		$obj->setCase36(true);
		$this->assertEquals(true, $obj->getCase36());
	}

	/**
	 * Tests the setCase37() method.
	 *
	 * @return void
	 */
	public function testSetCase37() {

		$obj = new CriteresLibresArticles();

		$obj->setCase37(true);
		$this->assertEquals(true, $obj->getCase37());
	}

	/**
	 * Tests the setCase38() method.
	 *
	 * @return void
	 */
	public function testSetCase38() {

		$obj = new CriteresLibresArticles();

		$obj->setCase38(true);
		$this->assertEquals(true, $obj->getCase38());
	}

	/**
	 * Tests the setCase39() method.
	 *
	 * @return void
	 */
	public function testSetCase39() {

		$obj = new CriteresLibresArticles();

		$obj->setCase39(true);
		$this->assertEquals(true, $obj->getCase39());
	}

	/**
	 * Tests the setCase4() method.
	 *
	 * @return void
	 */
	public function testSetCase4() {

		$obj = new CriteresLibresArticles();

		$obj->setCase4(true);
		$this->assertEquals(true, $obj->getCase4());
	}

	/**
	 * Tests the setCase40() method.
	 *
	 * @return void
	 */
	public function testSetCase40() {

		$obj = new CriteresLibresArticles();

		$obj->setCase40(true);
		$this->assertEquals(true, $obj->getCase40());
	}

	/**
	 * Tests the setCase41() method.
	 *
	 * @return void
	 */
	public function testSetCase41() {

		$obj = new CriteresLibresArticles();

		$obj->setCase41(true);
		$this->assertEquals(true, $obj->getCase41());
	}

	/**
	 * Tests the setCase42() method.
	 *
	 * @return void
	 */
	public function testSetCase42() {

		$obj = new CriteresLibresArticles();

		$obj->setCase42(true);
		$this->assertEquals(true, $obj->getCase42());
	}

	/**
	 * Tests the setCase43() method.
	 *
	 * @return void
	 */
	public function testSetCase43() {

		$obj = new CriteresLibresArticles();

		$obj->setCase43(true);
		$this->assertEquals(true, $obj->getCase43());
	}

	/**
	 * Tests the setCase44() method.
	 *
	 * @return void
	 */
	public function testSetCase44() {

		$obj = new CriteresLibresArticles();

		$obj->setCase44(true);
		$this->assertEquals(true, $obj->getCase44());
	}

	/**
	 * Tests the setCase45() method.
	 *
	 * @return void
	 */
	public function testSetCase45() {

		$obj = new CriteresLibresArticles();

		$obj->setCase45(true);
		$this->assertEquals(true, $obj->getCase45());
	}

	/**
	 * Tests the setCase46() method.
	 *
	 * @return void
	 */
	public function testSetCase46() {

		$obj = new CriteresLibresArticles();

		$obj->setCase46(true);
		$this->assertEquals(true, $obj->getCase46());
	}

	/**
	 * Tests the setCase47() method.
	 *
	 * @return void
	 */
	public function testSetCase47() {

		$obj = new CriteresLibresArticles();

		$obj->setCase47(true);
		$this->assertEquals(true, $obj->getCase47());
	}

	/**
	 * Tests the setCase48() method.
	 *
	 * @return void
	 */
	public function testSetCase48() {

		$obj = new CriteresLibresArticles();

		$obj->setCase48(true);
		$this->assertEquals(true, $obj->getCase48());
	}

	/**
	 * Tests the setCase49() method.
	 *
	 * @return void
	 */
	public function testSetCase49() {

		$obj = new CriteresLibresArticles();

		$obj->setCase49(true);
		$this->assertEquals(true, $obj->getCase49());
	}

	/**
	 * Tests the setCase5() method.
	 *
	 * @return void
	 */
	public function testSetCase5() {

		$obj = new CriteresLibresArticles();

		$obj->setCase5(true);
		$this->assertEquals(true, $obj->getCase5());
	}

	/**
	 * Tests the setCase50() method.
	 *
	 * @return void
	 */
	public function testSetCase50() {

		$obj = new CriteresLibresArticles();

		$obj->setCase50(true);
		$this->assertEquals(true, $obj->getCase50());
	}

	/**
	 * Tests the setCase6() method.
	 *
	 * @return void
	 */
	public function testSetCase6() {

		$obj = new CriteresLibresArticles();

		$obj->setCase6(true);
		$this->assertEquals(true, $obj->getCase6());
	}

	/**
	 * Tests the setCase7() method.
	 *
	 * @return void
	 */
	public function testSetCase7() {

		$obj = new CriteresLibresArticles();

		$obj->setCase7(true);
		$this->assertEquals(true, $obj->getCase7());
	}

	/**
	 * Tests the setCase8() method.
	 *
	 * @return void
	 */
	public function testSetCase8() {

		$obj = new CriteresLibresArticles();

		$obj->setCase8(true);
		$this->assertEquals(true, $obj->getCase8());
	}

	/**
	 * Tests the setCase9() method.
	 *
	 * @return void
	 */
	public function testSetCase9() {

		$obj = new CriteresLibresArticles();

		$obj->setCase9(true);
		$this->assertEquals(true, $obj->getCase9());
	}

	/**
	 * Tests the setCodeArticle() method.
	 *
	 * @return void
	 */
	public function testSetCodeArticle() {

		$obj = new CriteresLibresArticles();

		$obj->setCodeArticle("codeArticle");
		$this->assertEquals("codeArticle", $obj->getCodeArticle());
	}

	/**
	 * Tests the setDate1() method.
	 *
	 * @return void
	 */
	public function testSetDate1() {

		$obj = new CriteresLibresArticles();

		$obj->setDate1(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate1());
	}

	/**
	 * Tests the setDate10() method.
	 *
	 * @return void
	 */
	public function testSetDate10() {

		$obj = new CriteresLibresArticles();

		$obj->setDate10(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate10());
	}

	/**
	 * Tests the setDate11() method.
	 *
	 * @return void
	 */
	public function testSetDate11() {

		$obj = new CriteresLibresArticles();

		$obj->setDate11(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate11());
	}

	/**
	 * Tests the setDate12() method.
	 *
	 * @return void
	 */
	public function testSetDate12() {

		$obj = new CriteresLibresArticles();

		$obj->setDate12(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate12());
	}

	/**
	 * Tests the setDate13() method.
	 *
	 * @return void
	 */
	public function testSetDate13() {

		$obj = new CriteresLibresArticles();

		$obj->setDate13(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate13());
	}

	/**
	 * Tests the setDate14() method.
	 *
	 * @return void
	 */
	public function testSetDate14() {

		$obj = new CriteresLibresArticles();

		$obj->setDate14(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate14());
	}

	/**
	 * Tests the setDate15() method.
	 *
	 * @return void
	 */
	public function testSetDate15() {

		$obj = new CriteresLibresArticles();

		$obj->setDate15(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate15());
	}

	/**
	 * Tests the setDate16() method.
	 *
	 * @return void
	 */
	public function testSetDate16() {

		$obj = new CriteresLibresArticles();

		$obj->setDate16(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate16());
	}

	/**
	 * Tests the setDate17() method.
	 *
	 * @return void
	 */
	public function testSetDate17() {

		$obj = new CriteresLibresArticles();

		$obj->setDate17(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate17());
	}

	/**
	 * Tests the setDate18() method.
	 *
	 * @return void
	 */
	public function testSetDate18() {

		$obj = new CriteresLibresArticles();

		$obj->setDate18(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate18());
	}

	/**
	 * Tests the setDate19() method.
	 *
	 * @return void
	 */
	public function testSetDate19() {

		$obj = new CriteresLibresArticles();

		$obj->setDate19(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate19());
	}

	/**
	 * Tests the setDate2() method.
	 *
	 * @return void
	 */
	public function testSetDate2() {

		$obj = new CriteresLibresArticles();

		$obj->setDate2(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate2());
	}

	/**
	 * Tests the setDate20() method.
	 *
	 * @return void
	 */
	public function testSetDate20() {

		$obj = new CriteresLibresArticles();

		$obj->setDate20(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate20());
	}

	/**
	 * Tests the setDate21() method.
	 *
	 * @return void
	 */
	public function testSetDate21() {

		$obj = new CriteresLibresArticles();

		$obj->setDate21(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate21());
	}

	/**
	 * Tests the setDate22() method.
	 *
	 * @return void
	 */
	public function testSetDate22() {

		$obj = new CriteresLibresArticles();

		$obj->setDate22(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate22());
	}

	/**
	 * Tests the setDate23() method.
	 *
	 * @return void
	 */
	public function testSetDate23() {

		$obj = new CriteresLibresArticles();

		$obj->setDate23(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate23());
	}

	/**
	 * Tests the setDate24() method.
	 *
	 * @return void
	 */
	public function testSetDate24() {

		$obj = new CriteresLibresArticles();

		$obj->setDate24(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate24());
	}

	/**
	 * Tests the setDate25() method.
	 *
	 * @return void
	 */
	public function testSetDate25() {

		$obj = new CriteresLibresArticles();

		$obj->setDate25(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate25());
	}

	/**
	 * Tests the setDate26() method.
	 *
	 * @return void
	 */
	public function testSetDate26() {

		$obj = new CriteresLibresArticles();

		$obj->setDate26(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate26());
	}

	/**
	 * Tests the setDate27() method.
	 *
	 * @return void
	 */
	public function testSetDate27() {

		$obj = new CriteresLibresArticles();

		$obj->setDate27(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate27());
	}

	/**
	 * Tests the setDate28() method.
	 *
	 * @return void
	 */
	public function testSetDate28() {

		$obj = new CriteresLibresArticles();

		$obj->setDate28(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate28());
	}

	/**
	 * Tests the setDate29() method.
	 *
	 * @return void
	 */
	public function testSetDate29() {

		$obj = new CriteresLibresArticles();

		$obj->setDate29(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate29());
	}

	/**
	 * Tests the setDate3() method.
	 *
	 * @return void
	 */
	public function testSetDate3() {

		$obj = new CriteresLibresArticles();

		$obj->setDate3(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate3());
	}

	/**
	 * Tests the setDate30() method.
	 *
	 * @return void
	 */
	public function testSetDate30() {

		$obj = new CriteresLibresArticles();

		$obj->setDate30(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate30());
	}

	/**
	 * Tests the setDate31() method.
	 *
	 * @return void
	 */
	public function testSetDate31() {

		$obj = new CriteresLibresArticles();

		$obj->setDate31(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate31());
	}

	/**
	 * Tests the setDate32() method.
	 *
	 * @return void
	 */
	public function testSetDate32() {

		$obj = new CriteresLibresArticles();

		$obj->setDate32(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate32());
	}

	/**
	 * Tests the setDate33() method.
	 *
	 * @return void
	 */
	public function testSetDate33() {

		$obj = new CriteresLibresArticles();

		$obj->setDate33(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate33());
	}

	/**
	 * Tests the setDate34() method.
	 *
	 * @return void
	 */
	public function testSetDate34() {

		$obj = new CriteresLibresArticles();

		$obj->setDate34(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate34());
	}

	/**
	 * Tests the setDate35() method.
	 *
	 * @return void
	 */
	public function testSetDate35() {

		$obj = new CriteresLibresArticles();

		$obj->setDate35(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate35());
	}

	/**
	 * Tests the setDate36() method.
	 *
	 * @return void
	 */
	public function testSetDate36() {

		$obj = new CriteresLibresArticles();

		$obj->setDate36(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate36());
	}

	/**
	 * Tests the setDate37() method.
	 *
	 * @return void
	 */
	public function testSetDate37() {

		$obj = new CriteresLibresArticles();

		$obj->setDate37(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate37());
	}

	/**
	 * Tests the setDate38() method.
	 *
	 * @return void
	 */
	public function testSetDate38() {

		$obj = new CriteresLibresArticles();

		$obj->setDate38(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate38());
	}

	/**
	 * Tests the setDate39() method.
	 *
	 * @return void
	 */
	public function testSetDate39() {

		$obj = new CriteresLibresArticles();

		$obj->setDate39(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate39());
	}

	/**
	 * Tests the setDate4() method.
	 *
	 * @return void
	 */
	public function testSetDate4() {

		$obj = new CriteresLibresArticles();

		$obj->setDate4(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate4());
	}

	/**
	 * Tests the setDate40() method.
	 *
	 * @return void
	 */
	public function testSetDate40() {

		$obj = new CriteresLibresArticles();

		$obj->setDate40(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate40());
	}

	/**
	 * Tests the setDate41() method.
	 *
	 * @return void
	 */
	public function testSetDate41() {

		$obj = new CriteresLibresArticles();

		$obj->setDate41(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate41());
	}

	/**
	 * Tests the setDate42() method.
	 *
	 * @return void
	 */
	public function testSetDate42() {

		$obj = new CriteresLibresArticles();

		$obj->setDate42(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate42());
	}

	/**
	 * Tests the setDate43() method.
	 *
	 * @return void
	 */
	public function testSetDate43() {

		$obj = new CriteresLibresArticles();

		$obj->setDate43(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate43());
	}

	/**
	 * Tests the setDate44() method.
	 *
	 * @return void
	 */
	public function testSetDate44() {

		$obj = new CriteresLibresArticles();

		$obj->setDate44(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate44());
	}

	/**
	 * Tests the setDate45() method.
	 *
	 * @return void
	 */
	public function testSetDate45() {

		$obj = new CriteresLibresArticles();

		$obj->setDate45(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate45());
	}

	/**
	 * Tests the setDate46() method.
	 *
	 * @return void
	 */
	public function testSetDate46() {

		$obj = new CriteresLibresArticles();

		$obj->setDate46(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate46());
	}

	/**
	 * Tests the setDate47() method.
	 *
	 * @return void
	 */
	public function testSetDate47() {

		$obj = new CriteresLibresArticles();

		$obj->setDate47(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate47());
	}

	/**
	 * Tests the setDate48() method.
	 *
	 * @return void
	 */
	public function testSetDate48() {

		$obj = new CriteresLibresArticles();

		$obj->setDate48(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate48());
	}

	/**
	 * Tests the setDate49() method.
	 *
	 * @return void
	 */
	public function testSetDate49() {

		$obj = new CriteresLibresArticles();

		$obj->setDate49(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate49());
	}

	/**
	 * Tests the setDate5() method.
	 *
	 * @return void
	 */
	public function testSetDate5() {

		$obj = new CriteresLibresArticles();

		$obj->setDate5(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate5());
	}

	/**
	 * Tests the setDate50() method.
	 *
	 * @return void
	 */
	public function testSetDate50() {

		$obj = new CriteresLibresArticles();

		$obj->setDate50(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate50());
	}

	/**
	 * Tests the setDate6() method.
	 *
	 * @return void
	 */
	public function testSetDate6() {

		$obj = new CriteresLibresArticles();

		$obj->setDate6(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate6());
	}

	/**
	 * Tests the setDate7() method.
	 *
	 * @return void
	 */
	public function testSetDate7() {

		$obj = new CriteresLibresArticles();

		$obj->setDate7(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate7());
	}

	/**
	 * Tests the setDate8() method.
	 *
	 * @return void
	 */
	public function testSetDate8() {

		$obj = new CriteresLibresArticles();

		$obj->setDate8(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate8());
	}

	/**
	 * Tests the setDate9() method.
	 *
	 * @return void
	 */
	public function testSetDate9() {

		$obj = new CriteresLibresArticles();

		$obj->setDate9(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDate9());
	}

	/**
	 * Tests the setTexte1() method.
	 *
	 * @return void
	 */
	public function testSetTexte1() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte1("texte1");
		$this->assertEquals("texte1", $obj->getTexte1());
	}

	/**
	 * Tests the setTexte10() method.
	 *
	 * @return void
	 */
	public function testSetTexte10() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte10("texte10");
		$this->assertEquals("texte10", $obj->getTexte10());
	}

	/**
	 * Tests the setTexte11() method.
	 *
	 * @return void
	 */
	public function testSetTexte11() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte11("texte11");
		$this->assertEquals("texte11", $obj->getTexte11());
	}

	/**
	 * Tests the setTexte12() method.
	 *
	 * @return void
	 */
	public function testSetTexte12() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte12("texte12");
		$this->assertEquals("texte12", $obj->getTexte12());
	}

	/**
	 * Tests the setTexte13() method.
	 *
	 * @return void
	 */
	public function testSetTexte13() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte13("texte13");
		$this->assertEquals("texte13", $obj->getTexte13());
	}

	/**
	 * Tests the setTexte14() method.
	 *
	 * @return void
	 */
	public function testSetTexte14() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte14("texte14");
		$this->assertEquals("texte14", $obj->getTexte14());
	}

	/**
	 * Tests the setTexte15() method.
	 *
	 * @return void
	 */
	public function testSetTexte15() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte15("texte15");
		$this->assertEquals("texte15", $obj->getTexte15());
	}

	/**
	 * Tests the setTexte16() method.
	 *
	 * @return void
	 */
	public function testSetTexte16() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte16("texte16");
		$this->assertEquals("texte16", $obj->getTexte16());
	}

	/**
	 * Tests the setTexte17() method.
	 *
	 * @return void
	 */
	public function testSetTexte17() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte17("texte17");
		$this->assertEquals("texte17", $obj->getTexte17());
	}

	/**
	 * Tests the setTexte18() method.
	 *
	 * @return void
	 */
	public function testSetTexte18() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte18("texte18");
		$this->assertEquals("texte18", $obj->getTexte18());
	}

	/**
	 * Tests the setTexte19() method.
	 *
	 * @return void
	 */
	public function testSetTexte19() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte19("texte19");
		$this->assertEquals("texte19", $obj->getTexte19());
	}

	/**
	 * Tests the setTexte2() method.
	 *
	 * @return void
	 */
	public function testSetTexte2() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte2("texte2");
		$this->assertEquals("texte2", $obj->getTexte2());
	}

	/**
	 * Tests the setTexte20() method.
	 *
	 * @return void
	 */
	public function testSetTexte20() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte20("texte20");
		$this->assertEquals("texte20", $obj->getTexte20());
	}

	/**
	 * Tests the setTexte21() method.
	 *
	 * @return void
	 */
	public function testSetTexte21() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte21("texte21");
		$this->assertEquals("texte21", $obj->getTexte21());
	}

	/**
	 * Tests the setTexte22() method.
	 *
	 * @return void
	 */
	public function testSetTexte22() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte22("texte22");
		$this->assertEquals("texte22", $obj->getTexte22());
	}

	/**
	 * Tests the setTexte23() method.
	 *
	 * @return void
	 */
	public function testSetTexte23() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte23("texte23");
		$this->assertEquals("texte23", $obj->getTexte23());
	}

	/**
	 * Tests the setTexte24() method.
	 *
	 * @return void
	 */
	public function testSetTexte24() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte24("texte24");
		$this->assertEquals("texte24", $obj->getTexte24());
	}

	/**
	 * Tests the setTexte25() method.
	 *
	 * @return void
	 */
	public function testSetTexte25() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte25("texte25");
		$this->assertEquals("texte25", $obj->getTexte25());
	}

	/**
	 * Tests the setTexte26() method.
	 *
	 * @return void
	 */
	public function testSetTexte26() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte26("texte26");
		$this->assertEquals("texte26", $obj->getTexte26());
	}

	/**
	 * Tests the setTexte27() method.
	 *
	 * @return void
	 */
	public function testSetTexte27() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte27("texte27");
		$this->assertEquals("texte27", $obj->getTexte27());
	}

	/**
	 * Tests the setTexte28() method.
	 *
	 * @return void
	 */
	public function testSetTexte28() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte28("texte28");
		$this->assertEquals("texte28", $obj->getTexte28());
	}

	/**
	 * Tests the setTexte29() method.
	 *
	 * @return void
	 */
	public function testSetTexte29() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte29("texte29");
		$this->assertEquals("texte29", $obj->getTexte29());
	}

	/**
	 * Tests the setTexte3() method.
	 *
	 * @return void
	 */
	public function testSetTexte3() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte3("texte3");
		$this->assertEquals("texte3", $obj->getTexte3());
	}

	/**
	 * Tests the setTexte30() method.
	 *
	 * @return void
	 */
	public function testSetTexte30() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte30("texte30");
		$this->assertEquals("texte30", $obj->getTexte30());
	}

	/**
	 * Tests the setTexte31() method.
	 *
	 * @return void
	 */
	public function testSetTexte31() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte31("texte31");
		$this->assertEquals("texte31", $obj->getTexte31());
	}

	/**
	 * Tests the setTexte32() method.
	 *
	 * @return void
	 */
	public function testSetTexte32() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte32("texte32");
		$this->assertEquals("texte32", $obj->getTexte32());
	}

	/**
	 * Tests the setTexte33() method.
	 *
	 * @return void
	 */
	public function testSetTexte33() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte33("texte33");
		$this->assertEquals("texte33", $obj->getTexte33());
	}

	/**
	 * Tests the setTexte34() method.
	 *
	 * @return void
	 */
	public function testSetTexte34() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte34("texte34");
		$this->assertEquals("texte34", $obj->getTexte34());
	}

	/**
	 * Tests the setTexte35() method.
	 *
	 * @return void
	 */
	public function testSetTexte35() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte35("texte35");
		$this->assertEquals("texte35", $obj->getTexte35());
	}

	/**
	 * Tests the setTexte36() method.
	 *
	 * @return void
	 */
	public function testSetTexte36() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte36("texte36");
		$this->assertEquals("texte36", $obj->getTexte36());
	}

	/**
	 * Tests the setTexte37() method.
	 *
	 * @return void
	 */
	public function testSetTexte37() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte37("texte37");
		$this->assertEquals("texte37", $obj->getTexte37());
	}

	/**
	 * Tests the setTexte38() method.
	 *
	 * @return void
	 */
	public function testSetTexte38() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte38("texte38");
		$this->assertEquals("texte38", $obj->getTexte38());
	}

	/**
	 * Tests the setTexte39() method.
	 *
	 * @return void
	 */
	public function testSetTexte39() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte39("texte39");
		$this->assertEquals("texte39", $obj->getTexte39());
	}

	/**
	 * Tests the setTexte4() method.
	 *
	 * @return void
	 */
	public function testSetTexte4() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte4("texte4");
		$this->assertEquals("texte4", $obj->getTexte4());
	}

	/**
	 * Tests the setTexte40() method.
	 *
	 * @return void
	 */
	public function testSetTexte40() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte40("texte40");
		$this->assertEquals("texte40", $obj->getTexte40());
	}

	/**
	 * Tests the setTexte41() method.
	 *
	 * @return void
	 */
	public function testSetTexte41() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte41("texte41");
		$this->assertEquals("texte41", $obj->getTexte41());
	}

	/**
	 * Tests the setTexte42() method.
	 *
	 * @return void
	 */
	public function testSetTexte42() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte42("texte42");
		$this->assertEquals("texte42", $obj->getTexte42());
	}

	/**
	 * Tests the setTexte43() method.
	 *
	 * @return void
	 */
	public function testSetTexte43() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte43("texte43");
		$this->assertEquals("texte43", $obj->getTexte43());
	}

	/**
	 * Tests the setTexte44() method.
	 *
	 * @return void
	 */
	public function testSetTexte44() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte44("texte44");
		$this->assertEquals("texte44", $obj->getTexte44());
	}

	/**
	 * Tests the setTexte45() method.
	 *
	 * @return void
	 */
	public function testSetTexte45() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte45("texte45");
		$this->assertEquals("texte45", $obj->getTexte45());
	}

	/**
	 * Tests the setTexte46() method.
	 *
	 * @return void
	 */
	public function testSetTexte46() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte46("texte46");
		$this->assertEquals("texte46", $obj->getTexte46());
	}

	/**
	 * Tests the setTexte47() method.
	 *
	 * @return void
	 */
	public function testSetTexte47() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte47("texte47");
		$this->assertEquals("texte47", $obj->getTexte47());
	}

	/**
	 * Tests the setTexte48() method.
	 *
	 * @return void
	 */
	public function testSetTexte48() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte48("texte48");
		$this->assertEquals("texte48", $obj->getTexte48());
	}

	/**
	 * Tests the setTexte49() method.
	 *
	 * @return void
	 */
	public function testSetTexte49() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte49("texte49");
		$this->assertEquals("texte49", $obj->getTexte49());
	}

	/**
	 * Tests the setTexte5() method.
	 *
	 * @return void
	 */
	public function testSetTexte5() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte5("texte5");
		$this->assertEquals("texte5", $obj->getTexte5());
	}

	/**
	 * Tests the setTexte50() method.
	 *
	 * @return void
	 */
	public function testSetTexte50() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte50("texte50");
		$this->assertEquals("texte50", $obj->getTexte50());
	}

	/**
	 * Tests the setTexte6() method.
	 *
	 * @return void
	 */
	public function testSetTexte6() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte6("texte6");
		$this->assertEquals("texte6", $obj->getTexte6());
	}

	/**
	 * Tests the setTexte7() method.
	 *
	 * @return void
	 */
	public function testSetTexte7() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte7("texte7");
		$this->assertEquals("texte7", $obj->getTexte7());
	}

	/**
	 * Tests the setTexte8() method.
	 *
	 * @return void
	 */
	public function testSetTexte8() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte8("texte8");
		$this->assertEquals("texte8", $obj->getTexte8());
	}

	/**
	 * Tests the setTexte9() method.
	 *
	 * @return void
	 */
	public function testSetTexte9() {

		$obj = new CriteresLibresArticles();

		$obj->setTexte9("texte9");
		$this->assertEquals("texte9", $obj->getTexte9());
	}

	/**
	 * Tests the setValeur1() method.
	 *
	 * @return void
	 */
	public function testSetValeur1() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur1(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur1());
	}

	/**
	 * Tests the setValeur10() method.
	 *
	 * @return void
	 */
	public function testSetValeur10() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur10(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur10());
	}

	/**
	 * Tests the setValeur11() method.
	 *
	 * @return void
	 */
	public function testSetValeur11() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur11(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur11());
	}

	/**
	 * Tests the setValeur12() method.
	 *
	 * @return void
	 */
	public function testSetValeur12() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur12(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur12());
	}

	/**
	 * Tests the setValeur13() method.
	 *
	 * @return void
	 */
	public function testSetValeur13() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur13(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur13());
	}

	/**
	 * Tests the setValeur14() method.
	 *
	 * @return void
	 */
	public function testSetValeur14() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur14(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur14());
	}

	/**
	 * Tests the setValeur15() method.
	 *
	 * @return void
	 */
	public function testSetValeur15() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur15(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur15());
	}

	/**
	 * Tests the setValeur16() method.
	 *
	 * @return void
	 */
	public function testSetValeur16() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur16(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur16());
	}

	/**
	 * Tests the setValeur17() method.
	 *
	 * @return void
	 */
	public function testSetValeur17() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur17(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur17());
	}

	/**
	 * Tests the setValeur18() method.
	 *
	 * @return void
	 */
	public function testSetValeur18() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur18(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur18());
	}

	/**
	 * Tests the setValeur19() method.
	 *
	 * @return void
	 */
	public function testSetValeur19() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur19(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur19());
	}

	/**
	 * Tests the setValeur2() method.
	 *
	 * @return void
	 */
	public function testSetValeur2() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur2(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur2());
	}

	/**
	 * Tests the setValeur20() method.
	 *
	 * @return void
	 */
	public function testSetValeur20() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur20(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur20());
	}

	/**
	 * Tests the setValeur21() method.
	 *
	 * @return void
	 */
	public function testSetValeur21() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur21(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur21());
	}

	/**
	 * Tests the setValeur22() method.
	 *
	 * @return void
	 */
	public function testSetValeur22() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur22(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur22());
	}

	/**
	 * Tests the setValeur23() method.
	 *
	 * @return void
	 */
	public function testSetValeur23() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur23(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur23());
	}

	/**
	 * Tests the setValeur24() method.
	 *
	 * @return void
	 */
	public function testSetValeur24() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur24(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur24());
	}

	/**
	 * Tests the setValeur25() method.
	 *
	 * @return void
	 */
	public function testSetValeur25() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur25(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur25());
	}

	/**
	 * Tests the setValeur26() method.
	 *
	 * @return void
	 */
	public function testSetValeur26() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur26(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur26());
	}

	/**
	 * Tests the setValeur27() method.
	 *
	 * @return void
	 */
	public function testSetValeur27() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur27(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur27());
	}

	/**
	 * Tests the setValeur28() method.
	 *
	 * @return void
	 */
	public function testSetValeur28() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur28(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur28());
	}

	/**
	 * Tests the setValeur29() method.
	 *
	 * @return void
	 */
	public function testSetValeur29() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur29(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur29());
	}

	/**
	 * Tests the setValeur3() method.
	 *
	 * @return void
	 */
	public function testSetValeur3() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur3(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur3());
	}

	/**
	 * Tests the setValeur30() method.
	 *
	 * @return void
	 */
	public function testSetValeur30() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur30(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur30());
	}

	/**
	 * Tests the setValeur31() method.
	 *
	 * @return void
	 */
	public function testSetValeur31() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur31(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur31());
	}

	/**
	 * Tests the setValeur32() method.
	 *
	 * @return void
	 */
	public function testSetValeur32() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur32(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur32());
	}

	/**
	 * Tests the setValeur33() method.
	 *
	 * @return void
	 */
	public function testSetValeur33() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur33(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur33());
	}

	/**
	 * Tests the setValeur34() method.
	 *
	 * @return void
	 */
	public function testSetValeur34() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur34(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur34());
	}

	/**
	 * Tests the setValeur35() method.
	 *
	 * @return void
	 */
	public function testSetValeur35() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur35(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur35());
	}

	/**
	 * Tests the setValeur36() method.
	 *
	 * @return void
	 */
	public function testSetValeur36() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur36(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur36());
	}

	/**
	 * Tests the setValeur37() method.
	 *
	 * @return void
	 */
	public function testSetValeur37() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur37(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur37());
	}

	/**
	 * Tests the setValeur38() method.
	 *
	 * @return void
	 */
	public function testSetValeur38() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur38(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur38());
	}

	/**
	 * Tests the setValeur39() method.
	 *
	 * @return void
	 */
	public function testSetValeur39() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur39(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur39());
	}

	/**
	 * Tests the setValeur4() method.
	 *
	 * @return void
	 */
	public function testSetValeur4() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur4(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur4());
	}

	/**
	 * Tests the setValeur40() method.
	 *
	 * @return void
	 */
	public function testSetValeur40() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur40(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur40());
	}

	/**
	 * Tests the setValeur41() method.
	 *
	 * @return void
	 */
	public function testSetValeur41() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur41(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur41());
	}

	/**
	 * Tests the setValeur42() method.
	 *
	 * @return void
	 */
	public function testSetValeur42() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur42(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur42());
	}

	/**
	 * Tests the setValeur43() method.
	 *
	 * @return void
	 */
	public function testSetValeur43() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur43(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur43());
	}

	/**
	 * Tests the setValeur44() method.
	 *
	 * @return void
	 */
	public function testSetValeur44() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur44(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur44());
	}

	/**
	 * Tests the setValeur45() method.
	 *
	 * @return void
	 */
	public function testSetValeur45() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur45(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur45());
	}

	/**
	 * Tests the setValeur46() method.
	 *
	 * @return void
	 */
	public function testSetValeur46() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur46(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur46());
	}

	/**
	 * Tests the setValeur47() method.
	 *
	 * @return void
	 */
	public function testSetValeur47() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur47(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur47());
	}

	/**
	 * Tests the setValeur48() method.
	 *
	 * @return void
	 */
	public function testSetValeur48() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur48(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur48());
	}

	/**
	 * Tests the setValeur49() method.
	 *
	 * @return void
	 */
	public function testSetValeur49() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur49(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur49());
	}

	/**
	 * Tests the setValeur5() method.
	 *
	 * @return void
	 */
	public function testSetValeur5() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur5(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur5());
	}

	/**
	 * Tests the setValeur50() method.
	 *
	 * @return void
	 */
	public function testSetValeur50() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur50(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur50());
	}

	/**
	 * Tests the setValeur6() method.
	 *
	 * @return void
	 */
	public function testSetValeur6() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur6(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur6());
	}

	/**
	 * Tests the setValeur7() method.
	 *
	 * @return void
	 */
	public function testSetValeur7() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur7(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur7());
	}

	/**
	 * Tests the setValeur8() method.
	 *
	 * @return void
	 */
	public function testSetValeur8() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur8(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur8());
	}

	/**
	 * Tests the setValeur9() method.
	 *
	 * @return void
	 */
	public function testSetValeur9() {

		$obj = new CriteresLibresArticles();

		$obj->setValeur9(10.092018);
		$this->assertEquals(10.092018, $obj->getValeur9());
	}

}
