<?php

namespace Jane\Component\OpenApi31\Normalizer;

use Jane\Component\OpenApi31\JsonSchema\Model\SecurityScheme;

class EnrichedSecurityScheme extends SecurityScheme
{
    public ?string $name = null;
    public ?string $in = null;
    public ?string $scheme = null;
    public ?string $bearerFormat = null;
    public mixed $flows = null;
    public ?string $openIdConnectUrl = null;
}
