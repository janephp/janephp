<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpecRuleMatch implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The path to match on.
     *
     * @var AppIngressSpecRuleStringMatchPrefix
     */
    public AppIngressSpecRuleStringMatchPrefix $path;
    /**
     * The authority to match on.
     *
     * @var AppIngressSpecRuleStringMatchExact
     */
    public AppIngressSpecRuleStringMatchExact $authority;
    public function definedProperties(): array
    {
        return ['path' => 'path', 'authority' => 'authority'];
    }
}