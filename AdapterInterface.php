<?php

/*
 * This file is part of the OpenStates Framework (osf) package.
 * (c) Guillaume Ponçon <guillaume.poncon@openstates.com>
 * For the full copyright and license information, please read the LICENSE file distributed with the project.
 */

namespace Osf\Log;

use Osf\Log\LogProxy as Log;

/**
 * Log Adapter
 *
 * @author Guillaume Ponçon <guillaume.poncon@openstates.com>
 * @copyright OpenStates
 * @version 1.0
 * @since OSF-2.0 - 2017
 * @package osf
 * @subpackage log
 */
interface AdapterInterface 
{
    public function log(string $message, string $level = Log::LEVEL_INFO, string $category = null, $dump = null);
}
