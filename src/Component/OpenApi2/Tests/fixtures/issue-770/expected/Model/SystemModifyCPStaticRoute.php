<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyCPStaticRoute
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
     * Static route for control plane.
     *
     * @var list<SystemCpStaticRoute>
     */
    protected $staticRoutes;
    /**
     * Static route for control plane.
     *
     * @return list<SystemCpStaticRoute>
     */
    public function getStaticRoutes(): array
    {
        return $this->staticRoutes;
    }
    /**
     * Static route for control plane.
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