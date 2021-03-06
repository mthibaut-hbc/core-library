<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Organizer;

use WBW\Library\Core\Argument\DateTimeHelper;
use WBW\Library\Core\Sorting\QuickSort;

/**
 * Time slot helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Organizer
 */
class TimeSlotHelper {

    /**
     * Determines if a time slot A contains a time slot b.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function contains(TimeSlot $a, TimeSlot $b) {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        return $c1 && $c2;
    }

    /**
     * Determines if two time slots are equals.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function equals(TimeSlot $a, TimeSlot $b) {

        // Compare the start dates.
        if (false === DateTimeHelper::equals($a->getStartDate(), $b->getStartDate())) {
            return false;
        }

        // Compare the end dates.
        if (false === DateTimeHelper::equals($a->getEndDate(), $b->getEndDate())) {
            return false;
        }

        // Compare the time slots count.
        if (count($a->getTimeSlots()) !== count($b->getTimeSlots())) {
            return false;
        }

        // Handle each time slot.
        for ($i = count($a->getTimeSlots()) - 1; 0 <= $i; --$i) {
            if (false === static::equals($a->getTimeSlots()[$i], $b->getTimeSlots()[$i])) {
                return false;
            }
        }

        //
        return true;
    }

    /**
     * Full join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function fullJoin(TimeSlot $a, TimeSlot $b) {

        // Has full join ?
        if (false === static::hasFullJoin($a, $b)) {
            return null;
        }

        // Initialize the date/times.
        $startDate = DateTimeHelper::getSmaller($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getGreater($a->getEndDate(), $b->getEndDate());

        // Return the time slot.
        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Full join two time slots without time slots intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function fullJoinWithout(TimeSlot $a, TimeSlot $b) {

        // Initialize the time slots.
        $leftJoins  = static::leftJoinWithout($a, $b);
        $rightJoins = static::rightJoinWithout($a, $b);

        // Check the time slots.
        if (null === $leftJoins && null === $rightJoins) {
            return null;
        }
        if (null === $leftJoins) {
            return $rightJoins;
        }
        if (null === $rightJoins) {
            return $leftJoins;
        }

        // Return the time slots.
        return static::sort(array_merge($leftJoins, $rightJoins));
    }

    /**
     * Get the duration.
     *
     * @param TimeSlot[] $timeSlots the time slots.
     * @return int Returns the duration.
     */
    public static function getDuration(array $timeSlots) {
        $output = 0;
        foreach ($timeSlots as $current) {
            $output += $current->getDuration();
        }
        return $output;
    }

    /**
     * Determines if a time slot A has full join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasFullJoin(TimeSlot $a, TimeSlot $b) {
        return true === static::hasInnerJoin($a, $b);
    }

    /**
     * Determines if a time slot A has an inner join with time slot B.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return bool Returns true in case of success, false otherwise.
     */
    public static function hasInnerJoin(TimeSlot $a, TimeSlot $b) {
        $c1 = DateTimeHelper::isBetween($b->getStartDate(), $a->getStartDate(), $a->getEndDate());
        $c2 = DateTimeHelper::isBetween($b->getEndDate(), $a->getStartDate(), $a->getEndDate());
        $c3 = DateTimeHelper::isBetween($a->getStartDate(), $b->getStartDate(), $b->getEndDate());
        $c4 = DateTimeHelper::isBetween($a->getEndDate(), $b->getStartDate(), $b->getEndDate());
        return $c1 || $c2 || $c3 || $c4;
    }

    /**
     * Inner join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot|null Returns a time slot in case of success, null otherwise.
     */
    public static function innerJoin(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === static::hasInnerJoin($a, $b)) {
            return null;
        }

        // Initialize the date/times.
        $startDate = DateTimeHelper::getGreater($a->getStartDate(), $b->getStartDate());
        $endDate   = DateTimeHelper::getSmaller($a->getEndDate(), $b->getEndDate());

        // Return the time slot.
        return new TimeSlot(clone $startDate, clone $endDate);
    }

    /**
     * Left join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot Returns the time slot in case of success, null otherwise.
     */
    public static function leftJoin(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === static::hasInnerJoin($a, $b)) {
            return null;
        }

        // Return the time slot.
        return new TimeSlot(clone $a->getStartDate(), clone $a->getEndDate());
    }

    /**
     * Left join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function leftJoinWithout(TimeSlot $a, TimeSlot $b) {

        // Has inner join ?
        if (false === static::hasInnerJoin($a, $b) || true === static::contains($b, $a)) {
            return null;
        }

        // Contains ?
        if (true === static::contains($a, $b)) {
            return static::sort([
                    new TimeSlot(clone $a->getStartDate(), clone $b->getStartDate()),
                    new TimeSlot(clone $b->getEndDate(), clone $a->getEndDate()),
            ]);
        }

        // Initialize the date/times.
        $startDate = true === DateTimeHelper::isLessThan($a->getStartDate(), $b->getStartDate()) ? $a->getStartDate() : $b->getEndDate();
        $endDate   = true === DateTimeHelper::isGreaterThan($a->getEndDate(), $b->getEndDate()) ? $a->getEndDate() : $b->getStartDate();

        // Return the time slots.
        return [
            new TimeSlot(clone $startDate, clone $endDate),
        ];
    }

    /**
     * Merge.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot[] Returns the merged time slots.
     */
    public static function merge(array $timeSlots) {

        // Count the time slots.
        $number = count($timeSlots);

        // Check the time slots count.
        if (0 === $number) {
            return [];
        }

        // Sort the time slots.
        $buffer = static::sort($timeSlots);

        // Initialize the output.
        $output = [$buffer[0]];

        // Handle each time slot.
        for ($i = 1; $i < $number; ++$i) {

            //
            $j = count($output) - 1;

            // Full join the time slots.
            $res = static::fullJoin($output[$j], $buffer[$i]);
            if (null === $res) {
                $output[] = $buffer[$i];
            } else {
                $output[$j] = $res;
            }
        }

        // Return the output.
        return $output;
    }

    /**
     * Right join two time slots.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot Returns the time slot in case of success, null otherwise.
     */
    public static function rightJoin(TimeSlot $a, TimeSlot $b) {
        return static::leftJoin($b, $a);
    }

    /**
     * Right join two time slots without time slot B intersection.
     *
     * @param TimeSlot $a The time slot A.
     * @param TimeSlot $b The time slot B.
     * @return TimeSlot[] Returns the time slots in case of success, null otherwise.
     */
    public static function rightJoinWithout(TimeSlot $a, TimeSlot $b) {
        return static::leftJoinWithout($b, $a);
    }

    /**
     * Sort time slots.
     *
     * @param TimeSlot[] $timeSlots The time slots.
     * @return TimeSlot[] Returns the sorted time slots.
     */
    public static function sort(array $timeSlots) {

        // Initialize a Qucik sort.
        $sorter = new QuickSort($timeSlots, new TimeSlotFunctor());
        $sorter->sort();

        // Return the time slots.
        return $sorter->getValues();
    }

}
