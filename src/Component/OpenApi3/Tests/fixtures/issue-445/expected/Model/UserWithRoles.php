<?php

namespace PicturePark\API\Model;

class UserWithRoles
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
     * IDs of user roles user is assigned to
     *
     * @var list<string>|null
     */
    protected $userRoleIds;
    /**
     * User's Picturepark ID.
     *
     * @var string
     */
    protected $id;
    /**
     * User's first name.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * User's last name.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Email address of the user (doubles as username).
     *
     * @var string
     */
    protected $emailAddress;
    /**
     * Authorization state the user is currently in.
     *
     * @var mixed
     */
    protected $authorizationState;
    /**
     * Life cycle state the user is currently in.
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * A locked user is not allowed to log in.
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * A support user is a user created for Picturepark support personnel.
     *
     * @var bool
     */
    protected $isSupportUser;
    /**
     * Read-only users can't be removed from the system, e.g. service user.
     *
     * @var bool
     */
    protected $isReadOnly;
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @var bool
     */
    protected $isFederated;
    /**
     * IDs of user roles user is assigned to
     *
     * @return list<string>|null
     */
    public function getUserRoleIds(): ?array
    {
        return $this->userRoleIds;
    }
    /**
     * IDs of user roles user is assigned to
     *
     * @param list<string>|null $userRoleIds
     *
     * @return self
     */
    public function setUserRoleIds(?array $userRoleIds): self
    {
        $this->initialized['userRoleIds'] = true;
        $this->userRoleIds = $userRoleIds;
        return $this;
    }
    /**
     * User's Picturepark ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User's Picturepark ID.
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
     * User's first name.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * User's first name.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * User's last name.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * User's last name.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Email address of the user (doubles as username).
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    /**
     * Email address of the user (doubles as username).
     *
     * @param string $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Authorization state the user is currently in.
     *
     * @return mixed
     */
    public function getAuthorizationState()
    {
        return $this->authorizationState;
    }
    /**
     * Authorization state the user is currently in.
     *
     * @param mixed $authorizationState
     *
     * @return self
     */
    public function setAuthorizationState($authorizationState): self
    {
        $this->initialized['authorizationState'] = true;
        $this->authorizationState = $authorizationState;
        return $this;
    }
    /**
     * Life cycle state the user is currently in.
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * Life cycle state the user is currently in.
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle): self
    {
        $this->initialized['lifeCycle'] = true;
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    /**
     * A locked user is not allowed to log in.
     *
     * @return bool
     */
    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }
    /**
     * A locked user is not allowed to log in.
     *
     * @param bool $isLocked
     *
     * @return self
     */
    public function setIsLocked(bool $isLocked): self
    {
        $this->initialized['isLocked'] = true;
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * A support user is a user created for Picturepark support personnel.
     *
     * @return bool
     */
    public function getIsSupportUser(): bool
    {
        return $this->isSupportUser;
    }
    /**
     * A support user is a user created for Picturepark support personnel.
     *
     * @param bool $isSupportUser
     *
     * @return self
     */
    public function setIsSupportUser(bool $isSupportUser): self
    {
        $this->initialized['isSupportUser'] = true;
        $this->isSupportUser = $isSupportUser;
        return $this;
    }
    /**
     * Read-only users can't be removed from the system, e.g. service user.
     *
     * @return bool
     */
    public function getIsReadOnly(): bool
    {
        return $this->isReadOnly;
    }
    /**
     * Read-only users can't be removed from the system, e.g. service user.
     *
     * @param bool $isReadOnly
     *
     * @return self
     */
    public function setIsReadOnly(bool $isReadOnly): self
    {
        $this->initialized['isReadOnly'] = true;
        $this->isReadOnly = $isReadOnly;
        return $this;
    }
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @return bool
     */
    public function getIsFederated(): bool
    {
        return $this->isFederated;
    }
    /**
     * Federated user is a user who is (currently) governed by an external identity provider.
     *
     * @param bool $isFederated
     *
     * @return self
     */
    public function setIsFederated(bool $isFederated): self
    {
        $this->initialized['isFederated'] = true;
        $this->isFederated = $isFederated;
        return $this;
    }
}