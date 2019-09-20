<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

@trigger_error(sprintf('The "%s" trait is deprecated since Jane 5.1, use "%s" instead.', Psr7HttplugEndpointTrait::class, Psr7EndpointTrait::class), E_USER_DEPRECATED);

/**
 * @deprecated since Jane 5.1, use Psr7EndpointTrait instead.
 */
trait Psr7HttplugEndpointTrait
{
    use Psr7EndpointTrait;
}
