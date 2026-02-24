<?php

namespace PicturePark\API\Model;

class UserDetail extends \ArrayObject
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
     * User's Picturepark ID.
     *
     * @var string|null
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
     * Marks a user that was deleted from the system.
     *
     * @var bool
     */
    protected $isDeleted;
    /**
     * User roles the user should be assigned to. Overwrites the original user roles.
     *
     * @var list<UserRoleAssignment>|null
     */
    protected $userRoles;
    /**
     * Comment saved for the user.
     *
     * @var string|null
     */
    protected $comment;
    /**
     * Preferred language, e.g. for correspondence.
     *
     * @var string|null
     */
    protected $languageCode;
    /**
     * User's address.
     *
     * @var mixed|null
     */
    protected $address;
    /**
     * Identity provider that governs this user or null for Picturepark's own IdentityServer.
     *
     * @var string|null
     */
    protected $identityProviderId;
    /**
     * Owner tokens referencing the user.
     *
     * @var list<OwnerToken>|null
     */
    protected $ownerTokens;
    /**
     * Authorization state the user is currently in.
     *
     * @var mixed
     */
    protected $authorizationState;
    /**
     * Locked users are unable to log in and use the system.
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * Life cycle state the user is currently in.
     *
     * @var mixed
     */
    protected $lifeCycle;
    /**
     * The support user is a user created for Picturepark support personnel.
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
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * User's Picturepark ID.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * User's Picturepark ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
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
     * Marks a user that was deleted from the system.
     *
     * @return bool
     */
    public function getIsDeleted(): bool
    {
        return $this->isDeleted;
    }
    /**
     * Marks a user that was deleted from the system.
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted): self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     * User roles the user should be assigned to. Overwrites the original user roles.
     *
     * @return list<UserRoleAssignment>|null
     */
    public function getUserRoles(): ?array
    {
        return $this->userRoles;
    }
    /**
     * User roles the user should be assigned to. Overwrites the original user roles.
     *
     * @param list<UserRoleAssignment>|null $userRoles
     *
     * @return self
     */
    public function setUserRoles(?array $userRoles): self
    {
        $this->initialized['userRoles'] = true;
        $this->userRoles = $userRoles;
        return $this;
    }
    /**
     * Comment saved for the user.
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Comment saved for the user.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * Preferred language, e.g. for correspondence.
     *
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * Preferred language, e.g. for correspondence.
     *
     * @param string|null $languageCode
     *
     * @return self
     */
    public function setLanguageCode(?string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * User's address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * User's address.
     *
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Identity provider that governs this user or null for Picturepark's own IdentityServer.
     *
     * @return string|null
     */
    public function getIdentityProviderId(): ?string
    {
        return $this->identityProviderId;
    }
    /**
     * Identity provider that governs this user or null for Picturepark's own IdentityServer.
     *
     * @param string|null $identityProviderId
     *
     * @return self
     */
    public function setIdentityProviderId(?string $identityProviderId): self
    {
        $this->initialized['identityProviderId'] = true;
        $this->identityProviderId = $identityProviderId;
        return $this;
    }
    /**
     * Owner tokens referencing the user.
     *
     * @return list<OwnerToken>|null
     */
    public function getOwnerTokens(): ?array
    {
        return $this->ownerTokens;
    }
    /**
     * Owner tokens referencing the user.
     *
     * @param list<OwnerToken>|null $ownerTokens
     *
     * @return self
     */
    public function setOwnerTokens(?array $ownerTokens): self
    {
        $this->initialized['ownerTokens'] = true;
        $this->ownerTokens = $ownerTokens;
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
     * Locked users are unable to log in and use the system.
     *
     * @return bool
     */
    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }
    /**
     * Locked users are unable to log in and use the system.
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
     * The support user is a user created for Picturepark support personnel.
     *
     * @return bool
     */
    public function getIsSupportUser(): bool
    {
        return $this->isSupportUser;
    }
    /**
     * The support user is a user created for Picturepark support personnel.
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
    /**
     * Audit information.
     *
     * @return mixed
     */
    public function getAudit()
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param mixed $audit
     *
     * @return self
     */
    public function setAudit($audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
}