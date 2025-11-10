<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemControlPlaneInterfaceList
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
     * Interface list
     *
     * @var list<SystemControlPlaneInterface>
     */
    protected $controlPlaneInterfaces;
    /**
     * Interface list
     *
     * @return list<SystemControlPlaneInterface>
     */
    public function getControlPlaneInterfaces(): array
    {
        return $this->controlPlaneInterfaces;
    }
    /**
     * Interface list
     *
     * @param list<SystemControlPlaneInterface> $controlPlaneInterfaces
     *
     * @return self
     */
    public function setControlPlaneInterfaces(array $controlPlaneInterfaces): self
    {
        $this->initialized['controlPlaneInterfaces'] = true;
        $this->controlPlaneInterfaces = $controlPlaneInterfaces;
        return $this;
    }
}