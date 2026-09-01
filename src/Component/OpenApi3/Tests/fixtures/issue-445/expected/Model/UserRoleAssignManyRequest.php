<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRoleAssignManyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User IDs.
     *
     * @var list<string>
     */
    public array $userIds;
    /**
     * Users roles to modify.
     *
     * @var list<string>
     */
    public array $userRoleIds;
    /**
     * Defines how to apply specified UserRoleIds to UserIds
     * If an operation results in no change for a user, that user will be returned as succeeded.
     *
     * @var string
     */
    public string $operation;
    public function definedProperties(): array
    {
        return ['userIds' => 'userIds', 'userRoleIds' => 'userRoleIds', 'operation' => 'operation'];
    }
}