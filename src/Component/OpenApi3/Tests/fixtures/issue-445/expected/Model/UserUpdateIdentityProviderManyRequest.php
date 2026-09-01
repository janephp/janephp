<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserUpdateIdentityProviderManyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User IDs.
     *
     * @var list<string>
     */
    public array $userIds;
    /**
     * Identity provider to assign to users.
     *
     * @var string
     */
    public string $identityProviderId;
    public function definedProperties(): array
    {
        return ['userIds' => 'userIds', 'identityProviderId' => 'identityProviderId'];
    }
}