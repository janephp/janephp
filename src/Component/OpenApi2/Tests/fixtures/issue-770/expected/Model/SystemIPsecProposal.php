<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemIPsecProposal
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
     * Encrytion algorithm
     *
     * @var string
     */
    protected $encAlg;
    /**
     * Authentication algorithm
     *
     * @var string
     */
    protected $authAlg;
    /**
     * Encrytion algorithm
     *
     * @return string
     */
    public function getEncAlg(): string
    {
        return $this->encAlg;
    }
    /**
     * Encrytion algorithm
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
     * Authentication algorithm
     *
     * @return string
     */
    public function getAuthAlg(): string
    {
        return $this->authAlg;
    }
    /**
     * Authentication algorithm
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
}