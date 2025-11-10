<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapIndoorMapAp
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
     * the identifier of the create object
     *
     * @var string
     */
    protected $mac;
    /**
     * @var IndoorMapIndoorMapXy
     */
    protected $indoorMapXy;
    /**
     * the identifier of the create object
     *
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * the identifier of the create object
     *
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac): self
    {
        $this->initialized['mac'] = true;
        $this->mac = $mac;
        return $this;
    }
    /**
     * @return IndoorMapIndoorMapXy
     */
    public function getIndoorMapXy(): IndoorMapIndoorMapXy
    {
        return $this->indoorMapXy;
    }
    /**
     * @param IndoorMapIndoorMapXy $indoorMapXy
     *
     * @return self
     */
    public function setIndoorMapXy(IndoorMapIndoorMapXy $indoorMapXy): self
    {
        $this->initialized['indoorMapXy'] = true;
        $this->indoorMapXy = $indoorMapXy;
        return $this;
    }
}