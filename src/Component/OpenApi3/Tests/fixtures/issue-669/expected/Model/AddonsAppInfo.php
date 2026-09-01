<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AddonsAppInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the application associated with the resource.
     *
     * @var string
     */
    public string $appSlug;
    /**
     * The Terms of Service URL for the resource.
     *
     * @var string
     */
    public string $tos;
    /**
     * The End User License Agreement URL for the resource.
     *
     * @var string
     */
    public string $eula;
    /**
     * A list of plans available for the resource.
     *
     * @var list<AddonsPlan>
     */
    public array $plans;
    public function definedProperties(): array
    {
        return ['appSlug' => 'app_slug', 'tos' => 'tos', 'eula' => 'eula', 'plans' => 'plans'];
    }
}