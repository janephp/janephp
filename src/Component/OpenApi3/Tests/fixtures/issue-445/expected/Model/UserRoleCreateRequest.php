<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserRoleCreateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Language specific user role names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * All user rights for this user role.
     *
     * @var list<string>
     */
    public array $userRights;
    /**
     * Optional client reference for this request.
     * Will be returned back in response to make easier for clients to match request items with the respective results.
     * It is not persisted anywhere and it is ignored in single operations.
     *
     * @var string|null
     */
    public ?string $requestId;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'userRights' => 'userRights', 'requestId' => 'requestId'];
    }
}