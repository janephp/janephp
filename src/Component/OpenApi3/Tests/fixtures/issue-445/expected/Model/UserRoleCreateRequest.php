<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRoleCreateRequest implements AdditionalPropertiesInterface
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
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    protected $requestId;
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
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @return string|null
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }
    /**
    * Optional client reference for this request.
    Will be returned back in response to make easier for clients to match request items with the respective results.
    It is not persisted anywhere and it is ignored in single operations.
    *
    * @param string|null $requestId
    *
    * @return self
    */
    public function setRequestId(?string $requestId): self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['names' => ['names', 'getNames', 'setNames'], 'userRights' => ['userRights', 'getUserRights', 'setUserRights'], 'requestId' => ['requestId', 'getRequestId', 'setRequestId']];
    }
}