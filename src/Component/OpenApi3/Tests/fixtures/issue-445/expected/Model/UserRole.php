<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRole implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * User role ID.
     *
     * @var string
     */
    protected $id;
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
    /**
     * User role ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User role ID.
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
    public function definedProperties(): array
    {
        return ['names' => ['names', 'getNames', 'setNames'], 'userRights' => ['userRights', 'getUserRights', 'setUserRights'], 'id' => ['id', 'getId', 'setId']];
    }
}