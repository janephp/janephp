<?php

namespace Jane\OpenApi\Generator;

use Jane\OpenApiCommon\Generator\Client\HttplugClientGenerator as CommonHttplugClientGenerator;

@trigger_error(sprintf('The "%s" class is deprecated since Jane 5.1, use "%s" instead.', HttplugClientGenerator::class, Psr18ClientGenerator::class), E_USER_DEPRECATED);

/**
 * @deprecated since Jane 5.1, use Psr18ClientGenerator instead.
 */
class HttplugClientGenerator extends ClientGenerator
{
    use CommonHttplugClientGenerator;
}
