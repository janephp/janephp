<?php

namespace PicturePark\API\Model;

class UserRoleEditable
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
     * Language specific user role names.
     *
     * @var array<string, string>
     */
    protected $names;
    /**
     * All user rights for this user role.
     *
     * @var list<string>
     */
    protected $userRights;
    /**
     * Language specific user role names.
     *
     * @return array<string, string>
     */
    public function getNames(): iterable
    {
        return $this->names;
    }
    /**
     * Language specific user role names.
     *
     * @param array<string, string> $names
     *
     * @return self
     */
    public function setNames(iterable $names): self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
    /**
     * All user rights for this user role.
     *
     * @return list<string>
     */
    public function getUserRights(): array
    {
        return $this->userRights;
    }
    /**
     * All user rights for this user role.
     *
     * @param list<string> $userRights
     *
     * @return self
     */
    public function setUserRights(array $userRights): self
    {
        $this->initialized['userRights'] = true;
        $this->userRights = $userRights;
        return $this;
    }
}