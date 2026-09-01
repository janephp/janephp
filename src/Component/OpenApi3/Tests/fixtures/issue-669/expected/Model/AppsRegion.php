<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsRegion implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $continent;
    /**
     * @var list<string>
     */
    public array $dataCenters;
    /**
     * Whether or not the region is presented as the default.
     *
     * @var bool
     */
    public bool $default;
    /**
     * @var bool
     */
    public bool $disabled;
    /**
     * @var string
     */
    public string $flag;
    /**
     * @var string
     */
    public string $label;
    /**
     * @var string
     */
    public string $reason;
    /**
     * @var string
     */
    public string $slug;
    public function definedProperties(): array
    {
        return ['continent' => 'continent', 'dataCenters' => 'data_centers', 'default' => 'default', 'disabled' => 'disabled', 'flag' => 'flag', 'label' => 'label', 'reason' => 'reason', 'slug' => 'slug'];
    }
}