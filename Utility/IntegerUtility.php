<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use WBW\Library\Core\Exception\Argument\IntegerArgumentException;

/**
 * Integer utility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class IntegerUtility {

	/**
	 * Parse a string.
	 *
	 * @param string $value The string value.
	 * @return integer Returns the integer represented by the string value..
	 * @throws IntegerArgumentException Throws an integer argument exception if the string value does not represent an integer.
	 */
	public static function parseString($value) {
		if (null === $value) {
			return null;
		}
		if (0 === preg_match("/^[0-9]{1,}$/", $value)) {
			throw new IntegerArgumentException($value);
		}
		return intval($value);
	}

}
