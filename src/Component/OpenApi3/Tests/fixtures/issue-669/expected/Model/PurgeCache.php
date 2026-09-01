<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PurgeCache implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of strings containing the path to the content to be purged from the CDN cache.
     *
     * @var list<string>
     */
    public array $files;
    public function definedProperties(): array
    {
        return ['files' => 'files'];
    }
}