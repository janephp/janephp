<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsUpdateAppRequest extends \ArrayObject
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
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * Whether or not to update the source versions (for example fetching a new commit or image digest) of all components. By default (when this is false) only newly added sources will be updated to avoid changes like updating the scale of a component from also updating the respective code.
     *
     * @var bool
     */
    protected $updateAllSourceVersions = false;
    /**
     * The desired configuration of an application.
     *
     * @return AppSpec
     */
    public function getSpec(): AppSpec
    {
        return $this->spec;
    }
    /**
     * The desired configuration of an application.
     *
     * @param AppSpec $spec
     *
     * @return self
     */
    public function setSpec(AppSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * Whether or not to update the source versions (for example fetching a new commit or image digest) of all components. By default (when this is false) only newly added sources will be updated to avoid changes like updating the scale of a component from also updating the respective code.
     *
     * @return bool
     */
    public function getUpdateAllSourceVersions(): bool
    {
        return $this->updateAllSourceVersions;
    }
    /**
     * Whether or not to update the source versions (for example fetching a new commit or image digest) of all components. By default (when this is false) only newly added sources will be updated to avoid changes like updating the scale of a component from also updating the respective code.
     *
     * @param bool $updateAllSourceVersions
     *
     * @return self
     */
    public function setUpdateAllSourceVersions(bool $updateAllSourceVersions): self
    {
        $this->initialized['updateAllSourceVersions'] = true;
        $this->updateAllSourceVersions = $updateAllSourceVersions;
        return $this;
    }
}