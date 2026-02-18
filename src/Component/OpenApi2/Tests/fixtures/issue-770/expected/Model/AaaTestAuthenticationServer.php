<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaTestAuthenticationServer
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
     * Radius server type.
     *
     * @var string
     */
    protected $serverType;
    /**
     * Authentication/Accounting service protocol. RADIUS for Radius, AD and LDAP. RADIUSAcct for RADIUS Accounting
     *
     * @var string
     */
    protected $aaaType;
    /**
     * @var CommonGenericRef
     */
    protected $aaaServer;
    /**
     * User name
     *
     * @var string
     */
    protected $userName;
    /**
     * Password
     *
     * @var string
     */
    protected $password;
    /**
     * Authentication protocol
     *
     * @var string
     */
    protected $authProtocol = 'PAP';
    /**
     * Radius server type.
     *
     * @return string
     */
    public function getServerType(): string
    {
        return $this->serverType;
    }
    /**
     * Radius server type.
     *
     * @param string $serverType
     *
     * @return self
     */
    public function setServerType(string $serverType): self
    {
        $this->initialized['serverType'] = true;
        $this->serverType = $serverType;
        return $this;
    }
    /**
     * Authentication/Accounting service protocol. RADIUS for Radius, AD and LDAP. RADIUSAcct for RADIUS Accounting
     *
     * @return string
     */
    public function getAaaType(): string
    {
        return $this->aaaType;
    }
    /**
     * Authentication/Accounting service protocol. RADIUS for Radius, AD and LDAP. RADIUSAcct for RADIUS Accounting
     *
     * @param string $aaaType
     *
     * @return self
     */
    public function setAaaType(string $aaaType): self
    {
        $this->initialized['aaaType'] = true;
        $this->aaaType = $aaaType;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getAaaServer(): CommonGenericRef
    {
        return $this->aaaServer;
    }
    /**
     * @param CommonGenericRef $aaaServer
     *
     * @return self
     */
    public function setAaaServer(CommonGenericRef $aaaServer): self
    {
        $this->initialized['aaaServer'] = true;
        $this->aaaServer = $aaaServer;
        return $this;
    }
    /**
     * User name
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User name
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * Password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Authentication protocol
     *
     * @return string
     */
    public function getAuthProtocol(): string
    {
        return $this->authProtocol;
    }
    /**
     * Authentication protocol
     *
     * @param string $authProtocol
     *
     * @return self
     */
    public function setAuthProtocol(string $authProtocol): self
    {
        $this->initialized['authProtocol'] = true;
        $this->authProtocol = $authProtocol;
        return $this;
    }
}