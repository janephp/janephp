<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceTestingConfig
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
     * Identifier of the authentication service
     *
     * @var string
     */
    protected $id;
    /**
     * @var ServiceTestingConfigLoginRequest
     */
    protected $loginRequest;
    /**
     * Identifier of the authentication service
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the authentication service
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return ServiceTestingConfigLoginRequest
     */
    public function getLoginRequest(): ServiceTestingConfigLoginRequest
    {
        return $this->loginRequest;
    }
    /**
     * @param ServiceTestingConfigLoginRequest $loginRequest
     *
     * @return self
     */
    public function setLoginRequest(ServiceTestingConfigLoginRequest $loginRequest): self
    {
        $this->initialized['loginRequest'] = true;
        $this->loginRequest = $loginRequest;
        return $this;
    }
}