<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyCPUserDefinedInterface
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
     * User defined interface for Control Plane
     *
     * @var list<SystemCpUserDefinedInterface>
     */
    protected $userDefinedInterface;
    /**
     * User defined interface for Control Plane
     *
     * @return list<SystemCpUserDefinedInterface>
     */
    public function getUserDefinedInterface(): array
    {
        return $this->userDefinedInterface;
    }
    /**
     * User defined interface for Control Plane
     *
     * @param list<SystemCpUserDefinedInterface> $userDefinedInterface
     *
     * @return self
     */
    public function setUserDefinedInterface(array $userDefinedInterface): self
    {
        $this->initialized['userDefinedInterface'] = true;
        $this->userDefinedInterface = $userDefinedInterface;
        return $this;
    }
}