<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaModifyHttp2Server
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * The partner name of the HTTP2 server
     *
     * @var string
     */
    protected $partnerName;
    /**
     * The token of the HTTP2 server
     *
     * @var string
     */
    protected $token;
    /**
     * The authentication API of the HTTP2 server
     *
     * @var string
     */
    protected $authenticationApi;
    /**
     * The accounting API of the HTTP2 server
     *
     * @var string
     */
    protected $accountingApi;
    /**
     * The COA response API of the HTTP2 server
     *
     * @var string
     */
    protected $coaResponseApi;
    /**
     * The COA API of the HTTP2 server
     *
     * @var string
     */
    protected $coaApi;
    /**
     * The SSE timeout of the HTTP2 server
     *
     * @var int
     */
    protected $sseTimeout = 60;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The partner name of the HTTP2 server
     *
     * @return string
     */
    public function getPartnerName(): string
    {
        return $this->partnerName;
    }
    /**
     * The partner name of the HTTP2 server
     *
     * @param string $partnerName
     *
     * @return self
     */
    public function setPartnerName(string $partnerName): self
    {
        $this->initialized['partnerName'] = true;
        $this->partnerName = $partnerName;
        return $this;
    }
    /**
     * The token of the HTTP2 server
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * The token of the HTTP2 server
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * The authentication API of the HTTP2 server
     *
     * @return string
     */
    public function getAuthenticationApi(): string
    {
        return $this->authenticationApi;
    }
    /**
     * The authentication API of the HTTP2 server
     *
     * @param string $authenticationApi
     *
     * @return self
     */
    public function setAuthenticationApi(string $authenticationApi): self
    {
        $this->initialized['authenticationApi'] = true;
        $this->authenticationApi = $authenticationApi;
        return $this;
    }
    /**
     * The accounting API of the HTTP2 server
     *
     * @return string
     */
    public function getAccountingApi(): string
    {
        return $this->accountingApi;
    }
    /**
     * The accounting API of the HTTP2 server
     *
     * @param string $accountingApi
     *
     * @return self
     */
    public function setAccountingApi(string $accountingApi): self
    {
        $this->initialized['accountingApi'] = true;
        $this->accountingApi = $accountingApi;
        return $this;
    }
    /**
     * The COA response API of the HTTP2 server
     *
     * @return string
     */
    public function getCoaResponseApi(): string
    {
        return $this->coaResponseApi;
    }
    /**
     * The COA response API of the HTTP2 server
     *
     * @param string $coaResponseApi
     *
     * @return self
     */
    public function setCoaResponseApi(string $coaResponseApi): self
    {
        $this->initialized['coaResponseApi'] = true;
        $this->coaResponseApi = $coaResponseApi;
        return $this;
    }
    /**
     * The COA API of the HTTP2 server
     *
     * @return string
     */
    public function getCoaApi(): string
    {
        return $this->coaApi;
    }
    /**
     * The COA API of the HTTP2 server
     *
     * @param string $coaApi
     *
     * @return self
     */
    public function setCoaApi(string $coaApi): self
    {
        $this->initialized['coaApi'] = true;
        $this->coaApi = $coaApi;
        return $this;
    }
    /**
     * The SSE timeout of the HTTP2 server
     *
     * @return int
     */
    public function getSseTimeout(): int
    {
        return $this->sseTimeout;
    }
    /**
     * The SSE timeout of the HTTP2 server
     *
     * @param int $sseTimeout
     *
     * @return self
     */
    public function setSseTimeout(int $sseTimeout): self
    {
        $this->initialized['sseTimeout'] = true;
        $this->sseTimeout = $sseTimeout;
        return $this;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @return list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    public function getMappings(): array
    {
        return $this->mappings;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @param list<AaaModifyGroupAttrIdentityUserRoleMapping> $mappings
     *
     * @return self
     */
    public function setMappings(array $mappings): self
    {
        $this->initialized['mappings'] = true;
        $this->mappings = $mappings;
        return $this;
    }
}