<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderHomeOIs
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
     * Name of the home OI
     *
     * @var string
     */
    protected $name;
    /**
     * Orgnization ID(3Hex or 5Hex)
     *
     * @var string
     */
    protected $oi;
    /**
     * Name of the home OI
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the home OI
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Orgnization ID(3Hex or 5Hex)
     *
     * @return string
     */
    public function getOi(): string
    {
        return $this->oi;
    }
    /**
     * Orgnization ID(3Hex or 5Hex)
     *
     * @param string $oi
     *
     * @return self
     */
    public function setOi(string $oi): self
    {
        $this->initialized['oi'] = true;
        $this->oi = $oi;
        return $this;
    }
}