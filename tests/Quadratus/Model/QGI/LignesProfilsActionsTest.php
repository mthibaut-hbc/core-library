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

use WBW\Library\Core\Quadratus\Model\QGI\LignesProfilsActions;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes profils actions model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class LignesProfilsActionsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesProfilsActions();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeProfil());
        $this->assertNull($obj->getNumLigne());
    }

    /**
     * Tests the setCodeAction() method.
     *
     * @return void
     */
    public function testSetCodeAction() {

        $obj = new LignesProfilsActions();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Tests the setCodeProfil() method.
     *
     * @return void
     */
    public function testSetCodeProfil() {

        $obj = new LignesProfilsActions();

        $obj->setCodeProfil("codeProfil");
        $this->assertEquals("codeProfil", $obj->getCodeProfil());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new LignesProfilsActions();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

}
