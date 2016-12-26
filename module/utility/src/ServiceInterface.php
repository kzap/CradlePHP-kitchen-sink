<?php //-->
/**
 * This file is part of a Custom Project.
 * (c) 2017-2019 Acme Inc.
 *
 * Copyright and license information can be found at LICENSE.txt
 * distributed with this package.
 */

namespace Cradle\Module\Utility;

/**
 * Service interface
 *
 * @vendor   Acme
 * @package  Utility
 * @author   Christian Blanquera <cblanquera@openovate.com>
 * @standard PSR-2
 */
interface ServiceInterface
{
    /**
     * Returns a service
     *
     * @param *string $name
     *
     * @return SqlService|RedisService|ElasticService|NoopService
     */
    public static function get($name);
}