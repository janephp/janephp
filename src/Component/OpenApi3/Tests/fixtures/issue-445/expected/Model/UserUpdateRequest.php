<?php

namespace PicturePark\API\Model;

class UserUpdateRequest extends \ArrayObject
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
     * @var list<UserRole>|null
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
     * @return list<UserRole>|null
     */
    public function getUserRoles(): ?array
    {
        return $this->userRoles;
    }
    /**
     * User roles the user should be assigned to. Overwrites the original user roles.
     *
     * @param list<UserRole>|null $userRoles
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
}