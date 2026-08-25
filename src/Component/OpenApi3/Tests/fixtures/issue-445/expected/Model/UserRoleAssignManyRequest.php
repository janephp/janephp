<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRoleAssignManyRequest implements AdditionalPropertiesInterface
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
     * User IDs.
     *
     * @var list<string>
     */
    protected $userIds;
    /**
     * Users roles to modify.
     *
     * @var list<string>
     */
    protected $userRoleIds;
    /**
     * Defines how to apply specified UserRoleIds to UserIds
     * If an operation results in no change for a user, that user will be returned as succeeded.
     *
     * @var string
     */
    protected $operation;
    /**
     * User IDs.
     *
     * @return list<string>
     */
    public function getUserIds(): array
    {
        return $this->userIds;
    }
    /**
     * User IDs.
     *
     * @param list<string> $userIds
     *
     * @return self
     */
    public function setUserIds(array $userIds): self
    {
        $this->initialized['userIds'] = true;
        $this->userIds = $userIds;
        return $this;
    }
    /**
     * Users roles to modify.
     *
     * @return list<string>
     */
    public function getUserRoleIds(): array
    {
        return $this->userRoleIds;
    }
    /**
     * Users roles to modify.
     *
     * @param list<string> $userRoleIds
     *
     * @return self
     */
    public function setUserRoleIds(array $userRoleIds): self
    {
        $this->initialized['userRoleIds'] = true;
        $this->userRoleIds = $userRoleIds;
        return $this;
    }
    /**
     * Defines how to apply specified UserRoleIds to UserIds
     * If an operation results in no change for a user, that user will be returned as succeeded.
     *
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }
    /**
    * Defines how to apply specified UserRoleIds to UserIds
    If an operation results in no change for a user, that user will be returned as succeeded.
    *
    * @param string $operation
    *
    * @return self
    */
    public function setOperation(string $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['userIds' => ['userIds', 'getUserIds', 'setUserIds'], 'userRoleIds' => ['userRoleIds', 'getUserRoleIds', 'setUserRoleIds'], 'operation' => ['operation', 'getOperation', 'setOperation']];
    }
}