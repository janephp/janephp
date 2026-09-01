<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsRollbackAppRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the deployment to rollback to.
     *
     * @var string
     */
    public string $deploymentId;
    /**
     * Whether to skip pinning the rollback deployment. If false, the rollback deployment will be pinned and any new deployments including Auto Deploy on Push hooks will be disabled until the rollback is either manually committed or reverted via the CommitAppRollback or RevertAppRollback endpoints respectively. If true, the rollback will be immediately committed and the app will remain unpinned.
     *
     * @var bool
     */
    public bool $skipPin;
    public function definedProperties(): array
    {
        return ['deploymentId' => 'deployment_id', 'skipPin' => 'skip_pin'];
    }
}