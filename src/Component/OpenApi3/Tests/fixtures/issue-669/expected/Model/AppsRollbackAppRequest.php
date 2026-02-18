<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsRollbackAppRequest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the deployment to rollback to.
     *
     * @var string
     */
    protected $deploymentId;
    /**
     * Whether to skip pinning the rollback deployment. If false, the rollback deployment will be pinned and any new deployments including Auto Deploy on Push hooks will be disabled until the rollback is either manually committed or reverted via the CommitAppRollback or RevertAppRollback endpoints respectively. If true, the rollback will be immediately committed and the app will remain unpinned.
     *
     * @var bool
     */
    protected $skipPin;
    /**
     * The ID of the deployment to rollback to.
     *
     * @return string
     */
    public function getDeploymentId(): string
    {
        return $this->deploymentId;
    }
    /**
     * The ID of the deployment to rollback to.
     *
     * @param string $deploymentId
     *
     * @return self
     */
    public function setDeploymentId(string $deploymentId): self
    {
        $this->initialized['deploymentId'] = true;
        $this->deploymentId = $deploymentId;
        return $this;
    }
    /**
     * Whether to skip pinning the rollback deployment. If false, the rollback deployment will be pinned and any new deployments including Auto Deploy on Push hooks will be disabled until the rollback is either manually committed or reverted via the CommitAppRollback or RevertAppRollback endpoints respectively. If true, the rollback will be immediately committed and the app will remain unpinned.
     *
     * @return bool
     */
    public function getSkipPin(): bool
    {
        return $this->skipPin;
    }
    /**
     * Whether to skip pinning the rollback deployment. If false, the rollback deployment will be pinned and any new deployments including Auto Deploy on Push hooks will be disabled until the rollback is either manually committed or reverted via the CommitAppRollback or RevertAppRollback endpoints respectively. If true, the rollback will be immediately committed and the app will remain unpinned.
     *
     * @param bool $skipPin
     *
     * @return self
     */
    public function setSkipPin(bool $skipPin): self
    {
        $this->initialized['skipPin'] = true;
        $this->skipPin = $skipPin;
        return $this;
    }
}