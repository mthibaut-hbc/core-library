<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Choices;

/**
 * Civility choices interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Choices
 */
interface CivilityChoicesInterface {

	/**
	 * Civility "Empty".
	 *
	 * @var integer
	 */
	const CIVILITY_EMPTY = -1;

	/**
	 * Civility "Miss".
	 *
	 * @var integer
	 */
	const CIVILITY_MISS = 60;

	/**
	 * Civility "Mister".
	 *
	 * @var integer
	 */
	const CIVILITY_MISTER = 84;

	/**
	 * Civility "Mrs".
	 *
	 * @var integer
	 */
	const CIVILITY_MRS = 50;

}
