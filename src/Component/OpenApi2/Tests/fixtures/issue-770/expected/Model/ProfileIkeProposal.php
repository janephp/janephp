<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIkeProposal
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
     * encAlg of ikeProposal Specific
     *
     * @var string
     */
    protected $encAlg;
    /**
     * authAlg of ikeProposal Specific
     *
     * @var string
     */
    protected $authAlg;
    /**
     * prfAlg of ikeProposal Specific
     *
     * @var string
     */
    protected $prfAlg;
    /**
     * dhGroup of ikeProposal Specific
     *
     * @var string
     */
    protected $dhGroup;
    /**
     * encAlg of ikeProposal Specific
     *
     * @return string
     */
    public function getEncAlg(): string
    {
        return $this->encAlg;
    }
    /**
     * encAlg of ikeProposal Specific
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
     * authAlg of ikeProposal Specific
     *
     * @return string
     */
    public function getAuthAlg(): string
    {
        return $this->authAlg;
    }
    /**
     * authAlg of ikeProposal Specific
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
     * prfAlg of ikeProposal Specific
     *
     * @return string
     */
    public function getPrfAlg(): string
    {
        return $this->prfAlg;
    }
    /**
     * prfAlg of ikeProposal Specific
     *
     * @param string $prfAlg
     *
     * @return self
     */
    public function setPrfAlg(string $prfAlg): self
    {
        $this->initialized['prfAlg'] = true;
        $this->prfAlg = $prfAlg;
        return $this;
    }
    /**
     * dhGroup of ikeProposal Specific
     *
     * @return string
     */
    public function getDhGroup(): string
    {
        return $this->dhGroup;
    }
    /**
     * dhGroup of ikeProposal Specific
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