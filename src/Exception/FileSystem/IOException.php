<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\FileSystem;

use Exception;
use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * IO exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\IO
 */
class IOException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param Exception $previous The previous exception.
     */
    public function __construct($message, Exception $previous = null) {
        parent::__construct($message, 500, $previous);
    }

}
