<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserReinviteManyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User IDs.
     *
     * @var list<string>
     */
    public array $userIds;
    public function definedProperties(): array
    {
        return ['userIds' => 'userIds'];
    }
}