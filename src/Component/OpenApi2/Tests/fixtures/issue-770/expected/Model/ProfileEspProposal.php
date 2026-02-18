<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileEspProposal
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
     * encAlg of espProposal Specific
     *
     * @var string
     */
    protected $encAlg;
    /**
     * authAlg of espProposal Specific
     *
     * @var string
     */
    protected $authAlg;
    /**
     * dhGroup of espProposal Specific
     *
     * @var string
     */
    protected $dhGroup;
    /**
     * encAlg of espProposal Specific
     *
     * @return string
     */
    public function getEncAlg(): string
    {
        return $this->encAlg;
    }
    /**
     * encAlg of espProposal Specific
     *
     * @param string $encAlg
     *
     * @return self
     */
    public function setEncAlg(string $encAlg): self
    {
        $this->initialized['encAlg'] = true;
        $this->encAlg = $encAlg;
        return $this;
    }
    /**
     * authAlg of espProposal Specific
     *
     * @return string
     */
    public function getAuthAlg(): string
    {
        return $this->authAlg;
    }
    /**
     * authAlg of espProposal Specific
     *
     * @param string $authAlg
     *
     * @return self
     */
    public function setAuthAlg(string $authAlg): self
    {
        $this->initialized['authAlg'] = true;
        $this->authAlg = $authAlg;
        return $this;
    }
    /**
     * dhGroup of espProposal Specific
     *
     * @return string
     */
    public function getDhGroup(): string
    {
        return $this->dhGroup;
    }
    /**
     * dhGroup of espProposal Specific
     *
     * @param string $dhGroup
     *
     * @return self
     */
    public function setDhGroup(string $dhGroup): self
    {
        $this->initialized['dhGroup'] = true;
        $this->dhGroup = $dhGroup;
        return $this;
    }
}