<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityIdentityUserSummary
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
     * Identifier of the identity user
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $displayName;
    /**
     * User Name
     *
     * @var string
     */
    protected $userName;
    /**
     * User Source
     *
     * @var string
     */
    protected $userSource;
    /**
     * User Type
     *
     * @var string
     */
    protected $userType;
    /**
     * Is disalbed
     *
     * @var string
     */
    protected $isDisabled;
    /**
     * Created on
     *
     * @var string
     */
    protected $createdOn;
    /**
     * identifier of the domain
     *
     * @var string
     */
    protected $domainId;
    /**
     * Identifier of the identity user
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the identity user
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
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * User Name
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name
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
     * User Source
     *
     * @return string
     */
    public function getUserSource(): string
    {
        return $this->userSource;
    }
    /**
     * User Source
     *
     * @param string $userSource
     *
     * @return self
     */
    public function setUserSource(string $userSource): self
    {
        $this->initialized['userSource'] = true;
        $this->userSource = $userSource;
        return $this;
    }
    /**
     * User Type
     *
     * @return string
     */
    public function getUserType(): string
    {
        return $this->userType;
    }
    /**
     * User Type
     *
     * @param string $userType
     *
     * @return self
     */
    public function setUserType(string $userType): self
    {
        $this->initialized['userType'] = true;
        $this->userType = $userType;
        return $this;
    }
    /**
     * Is disalbed
     *
     * @return string
     */
    public function getIsDisabled(): string
    {
        return $this->isDisabled;
    }
    /**
     * Is disalbed
     *
     * @param string $isDisabled
     *
     * @return self
     */
    public function setIsDisabled(string $isDisabled): self
    {
        $this->initialized['isDisabled'] = true;
        $this->isDisabled = $isDisabled;
        return $this;
    }
    /**
     * Created on
     *
     * @return string
     */
    public function getCreatedOn(): string
    {
        return $this->createdOn;
    }
    /**
     * Created on
     *
     * @param string $createdOn
     *
     * @return self
     */
    public function setCreatedOn(string $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;
        return $this;
    }
    /**
     * identifier of the domain
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * identifier of the domain
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}