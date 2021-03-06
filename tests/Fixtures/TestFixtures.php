<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures;

use DateTime;
use WBW\Library\Core\Tests\Fixtures\Model\Node\TestNode;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the TestNode fixtures.
     *
     * @return TestNode[] Returns the TestNode fixtures.
     */
    public static function getTestNodes() {

        // Initialize the nodes.
        $nodes = [
            new TestNode("id01"),
            new TestNode("id02"),
            new TestNode("id03"),
            new TestNode("id04"),
            new TestNode("id05"),
            new TestNode("id06"),
            new TestNode("id07"),
            new TestNode("id08"),
            new TestNode("id09"),
            new TestNode("id10"),
        ];

        // Imbricate the nodes.
        $nodes[0]->addNode($nodes[9]);
        $nodes[0]->addNode($nodes[8]);
        $nodes[0]->addNode($nodes[7]);

        $nodes[1]->addNode($nodes[6]);
        $nodes[1]->addNode($nodes[5]);
        $nodes[1]->addNode($nodes[4]);

        $nodes[4]->addNode($nodes[3]);
        $nodes[4]->addNode($nodes[2]);

        // Return the nodes.
        return $nodes;
    }

    /**
     * Get the time slot date/times.
     *
     * @return DateTime[] Returns the time slot date/times.
     */
    public static function getTimeSlotDateTimes() {

        // Initialize the dates.
        $dates = [];

        $dates[] = new DateTime("2018-08-22 08:00:00");
        $dates[] = new DateTime("2018-08-22 11:00:00");
        $dates[] = new DateTime("2018-08-22 15:00:00");
        $dates[] = new DateTime("2018-08-22 18:00:00");

        // Return the dates.
        return $dates;
    }

}
