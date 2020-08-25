<?php

declare(strict_types=1);

namespace Jane\OpenApiRuntime\Client;

use Symfony\Component\OptionsResolver\Options;

/**
 * @deprecated Deprecated since v6.2.0, will removed in v7.0.0 and is already replaced by generated Runtime
 */
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
