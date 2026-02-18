<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsCreateDeploymentRequest extends \ArrayObject
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
     * @var bool
     */
    protected $forceBuild;
    /**
     * @return bool
     */
    public function getForceBuild(): bool
    {
        return $this->forceBuild;
    }
    /**
     * @param bool $forceBuild
     *
     * @return self
     */
    public function setForceBuild(bool $forceBuild): self
    {
        $this->initialized['forceBuild'] = true;
        $this->forceBuild = $forceBuild;
        return $this;
    }
}