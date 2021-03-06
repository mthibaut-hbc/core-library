<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Validation\RuleSet;

use WBW\Library\Core\Tests\Fixtures\Validation\Rule\TestValidationRule;
use WBW\Library\Core\Tests\Validation\AbstractValidationTest;
use WBW\Library\Core\Validation\API\ValidationStatusInterface;
use WBW\Library\Core\Validation\RuleSet\DefaultValidationRuleSet;

/**
 * Default validation rule set test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Validation\RuleSet
 */
class DefaultValidationRuleSetTest extends AbstractValidationTest {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultValidationRuleSet();

        $this->assertEquals([], $obj->getRules());
    }

    /**
     * Tests the addRule() method.
     *
     * @return void
     */
    public function testAddRule() {

        $obj = new DefaultValidationRuleSet();

        $arg = new TestValidationRule();

        $this->assertCount(0, $obj->getRules());

        $this->assertSame($obj, $obj->addRule($arg));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);
    }

    /**
     * Tests the removeRule() method.
     *
     * @return void
     */
    public function testRemoveRule() {

        $obj = new DefaultValidationRuleSet();

        $arg = new TestValidationRule();

        $this->assertSame($obj, $obj->addRule($arg));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule(new TestValidationRule()));
        $this->assertCount(1, $obj->getRules());
        $this->assertSame($arg, $obj->getRules()[0]);

        $this->assertSame($obj, $obj->removeRule($arg));
        $this->assertCount(0, $obj->getRules());
    }

    /**
     * Tests the validate() method.
     *
     * @return void
     */
    public function testValidate() {

        $obj = new DefaultValidationRuleSet();
        $obj->addRule(new TestValidationRule());

        $res = $obj->validate(new TestValidationRule());
        $this->assertCount(1, $res);
        $this->assertInstanceOf(ValidationStatusInterface::class, $res[0]);
        $this->assertEquals(500, $res[0]->getCode());
        $this->assertEquals("The argument is not an int", $res[0]->getMessage());
        $this->assertEquals("Test validation rule", $res[0]->getRuleName());
    }

}
