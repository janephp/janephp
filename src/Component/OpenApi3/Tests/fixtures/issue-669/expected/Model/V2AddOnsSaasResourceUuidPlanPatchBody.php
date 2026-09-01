<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2AddOnsSaasResourceUuidPlanPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The slug identifier for the new plan to apply to the add-on resource.
     *
     * @var string
     */
    public string $planSlug;
    public function definedProperties(): array
    {
        return ['planSlug' => 'plan_slug'];
    }
}