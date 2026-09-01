<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KubernetesOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var KubernetesOptionsOptions
     */
    public KubernetesOptionsOptions $options;
    public function definedProperties(): array
    {
        return ['options' => 'options'];
    }
}