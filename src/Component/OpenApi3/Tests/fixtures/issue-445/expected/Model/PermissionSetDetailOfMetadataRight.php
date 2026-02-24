<?php

namespace PicturePark\API\Model;

class PermissionSetDetailOfMetadataRight
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
     * The permission set ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @var list<PermissionUserRoleRightsOfMetadataRight>|null
     */
    protected $userRolesRights;
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @var list<PermissionUserRoleRightsOfPermissionSetRight>|null
     */
    protected $userRolesPermissionSetRights;
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @var bool
     */
    protected $exclusive;
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @var string
     */
    protected $ownerTokenId;
    /**
     * Audit information.
     *
     * @var mixed|null
     */
    protected $audit;
    /**
     * The permission set ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The permission set ID.
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
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @return list<PermissionUserRoleRightsOfMetadataRight>|null
     */
    public function getUserRolesRights(): ?array
    {
        return $this->userRolesRights;
    }
    /**
     * A list of content or metadata rights authorizing operations on Content Items or List Items.
     *
     * @param list<PermissionUserRoleRightsOfMetadataRight>|null $userRolesRights
     *
     * @return self
     */
    public function setUserRolesRights(?array $userRolesRights): self
    {
        $this->initialized['userRolesRights'] = true;
        $this->userRolesRights = $userRolesRights;
        return $this;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @return list<PermissionUserRoleRightsOfPermissionSetRight>|null
     */
    public function getUserRolesPermissionSetRights(): ?array
    {
        return $this->userRolesPermissionSetRights;
    }
    /**
     * A list of permission set rights authorizing operations on this permission set.
     *
     * @param list<PermissionUserRoleRightsOfPermissionSetRight>|null $userRolesPermissionSetRights
     *
     * @return self
     */
    public function setUserRolesPermissionSetRights(?array $userRolesPermissionSetRights): self
    {
        $this->initialized['userRolesPermissionSetRights'] = true;
        $this->userRolesPermissionSetRights = $userRolesPermissionSetRights;
        return $this;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @return bool
     */
    public function getExclusive(): bool
    {
        return $this->exclusive;
    }
    /**
     * When true this permission set will derogate all other configured permission sets on the Content Item or List Item.
     *
     * @param bool $exclusive
     *
     * @return self
     */
    public function setExclusive(bool $exclusive): self
    {
        $this->initialized['exclusive'] = true;
        $this->exclusive = $exclusive;
        return $this;
    }
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @return string
     */
    public function getOwnerTokenId(): string
    {
        return $this->ownerTokenId;
    }
    /**
     * The owner token ID. Defines the permission set owner.
     *
     * @param string $ownerTokenId
     *
     * @return self
     */
    public function setOwnerTokenId(string $ownerTokenId): self
    {
        $this->initialized['ownerTokenId'] = true;
        $this->ownerTokenId = $ownerTokenId;
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