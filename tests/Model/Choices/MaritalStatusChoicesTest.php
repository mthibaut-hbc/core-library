<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Choices;

use WBW\Library\Core\Model\Choices\MaritalStatusChoices;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Marital status choices test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 */
class MaritalStatusChoicesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getChoices() method.
     *
     * @return void
     */
    public function testGetChoices() {

        $res = [
            -1 => "choices.marital-status.empty",
            66 => "choices.marital-status.single",
            39 => "choices.marital-status.pacs",
            68 => "choices.marital-status.married",
            80 => "choices.marital-status.divorced",
            97 => "choices.marital-status.widower",
        ];
        $this->assertEquals($res, MaritalStatusChoices::getChoices());
    }

}
