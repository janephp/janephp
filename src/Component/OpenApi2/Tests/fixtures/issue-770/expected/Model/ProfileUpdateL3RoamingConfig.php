<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileUpdateL3RoamingConfig
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
     * L3 roaming configuration for DPs
     *
     * @var list<ProfileDataPlaneL3RoamingData>
     */
    protected $dataPlanes;
    /**
     * L3 roaming configuration for DPs
     *
     * @return list<ProfileDataPlaneL3RoamingData>
     */
    public function getDataPlanes(): array
    {
        return $this->dataPlanes;
    }
    /**
     * L3 roaming configuration for DPs
     *
     * @param list<ProfileDataPlaneL3RoamingData> $dataPlanes
     *
     * @return self
     */
    public function setDataPlanes(array $dataPlanes): self
    {
        $this->initialized['dataPlanes'] = true;
        $this->dataPlanes = $dataPlanes;
        return $this;
    }
}