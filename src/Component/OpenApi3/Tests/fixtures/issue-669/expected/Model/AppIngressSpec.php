<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppIngressSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Rules for configuring HTTP ingress for component routes, CORS, rewrites, and redirects.
     *
     * @var list<AppIngressSpecRule>
     */
    public array $rules;
    public function definedProperties(): array
    {
        return ['rules' => 'rules'];
    }
}