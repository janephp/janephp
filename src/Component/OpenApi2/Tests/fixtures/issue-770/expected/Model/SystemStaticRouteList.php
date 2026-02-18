<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemStaticRouteList
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
     * Static route for Control Plane
     *
     * @var list<SystemCpStaticRoute>
     */
    protected $staticRoutes;
    /**
     * Static route for Control Plane
     *
     * @return list<SystemCpStaticRoute>
     */
    public function getStaticRoutes(): array
    {
        return $this->staticRoutes;
    }
    /**
     * Static route for Control Plane
     *
     * @param list<SystemCpStaticRoute> $staticRoutes
     *
     * @return self
     */
    public function setStaticRoutes(array $staticRoutes): self
    {
        $this->initialized['staticRoutes'] = true;
        $this->staticRoutes = $staticRoutes;
        return $this;
    }
}