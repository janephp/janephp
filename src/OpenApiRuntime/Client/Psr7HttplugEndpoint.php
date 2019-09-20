<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

@trigger_error(sprintf('The "%s" class is deprecated since Jane 5.1, use "%s" instead.', Psr7HttplugEndpoint::class, Psr7Endpoint::class), E_USER_DEPRECATED);

/**
 * @deprecated since Jane 5.1, use Psr7Endpoint instead.
 */
interface Psr7HttplugEndpoint extends Psr7Endpoint
{
}
