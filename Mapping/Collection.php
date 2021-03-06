<?php

/*
 * (c) Markus Lanthaler <mail@markus-lanthaler.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ML\HydraBundle\Mapping;


/**
 * Collection annotation
 *
 * Elements annotated with Collection are transformed into a Hydra Collection
 * when serialized. The route parameter allows to set the IRI at which the
 * collection can be retrieved.
 *
 * @Annotation
 * @Target({"PROPERTY", "METHOD"})
 */
class Collection
{
    /**
     * @var string
     */
    public $route;
}
