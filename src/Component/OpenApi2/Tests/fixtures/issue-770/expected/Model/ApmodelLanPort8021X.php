<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLanPort8021X
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
     * @var string
     */
    protected $type;
    /**
     * @var ApmodelLanPortAuthenticator
     */
    protected $authenticator;
    /**
     * @var ApmodelLanPortSupplicant
     */
    protected $supplicant;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return ApmodelLanPortAuthenticator
     */
    public function getAuthenticator(): ApmodelLanPortAuthenticator
    {
        return $this->authenticator;
    }
    /**
     * @param ApmodelLanPortAuthenticator $authenticator
     *
     * @return self
     */
    public function setAuthenticator(ApmodelLanPortAuthenticator $authenticator): self
    {
        $this->initialized['authenticator'] = true;
        $this->authenticator = $authenticator;
        return $this;
    }
    /**
     * @return ApmodelLanPortSupplicant
     */
    public function getSupplicant(): ApmodelLanPortSupplicant
    {
        return $this->supplicant;
    }
    /**
     * @param ApmodelLanPortSupplicant $supplicant
     *
     * @return self
     */
    public function setSupplicant(ApmodelLanPortSupplicant $supplicant): self
    {
        $this->initialized['supplicant'] = true;
        $this->supplicant = $supplicant;
        return $this;
    }
}