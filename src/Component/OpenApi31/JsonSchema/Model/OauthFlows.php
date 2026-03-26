<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class OauthFlows
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var Implicit|null
     */
    protected $implicit;
    /**
     * @var Password|null
     */
    protected $password;
    /**
     * @var ClientCredentials|null
     */
    protected $clientCredentials;
    /**
     * @var AuthorizationCode|null
     */
    protected $authorizationCode;

    public function getImplicit(): ?Implicit
    {
        return $this->implicit;
    }

    public function setImplicit(?Implicit $implicit): self
    {
        $this->initialized['implicit'] = true;
        $this->implicit = $implicit;

        return $this;
    }

    public function getPassword(): ?Password
    {
        return $this->password;
    }

    public function setPassword(?Password $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;

        return $this;
    }

    public function getClientCredentials(): ?ClientCredentials
    {
        return $this->clientCredentials;
    }

    public function setClientCredentials(?ClientCredentials $clientCredentials): self
    {
        $this->initialized['clientCredentials'] = true;
        $this->clientCredentials = $clientCredentials;

        return $this;
    }

    public function getAuthorizationCode(): ?AuthorizationCode
    {
        return $this->authorizationCode;
    }

    public function setAuthorizationCode(?AuthorizationCode $authorizationCode): self
    {
        $this->initialized['authorizationCode'] = true;
        $this->authorizationCode = $authorizationCode;

        return $this;
    }
}
