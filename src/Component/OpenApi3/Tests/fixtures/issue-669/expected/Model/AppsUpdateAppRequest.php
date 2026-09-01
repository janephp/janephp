<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsUpdateAppRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * Whether or not to update the source versions (for example fetching a new commit or image digest) of all components. By default (when this is false) only newly added sources will be updated to avoid changes like updating the scale of a component from also updating the respective code.
     *
     * @var bool
     */
    public bool $updateAllSourceVersions = false;
    public function definedProperties(): array
    {
        return ['spec' => 'spec', 'updateAllSourceVersions' => 'update_all_source_versions'];
    }
}