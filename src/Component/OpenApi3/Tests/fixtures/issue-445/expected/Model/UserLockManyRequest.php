<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserLockManyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User IDs.
     *
     * @var list<string>
     */
    public array $userIds;
    /**
     * Indicates the requested lock state of the users.
     * If _true_ was specified, the users will be _locked_. _False_ will unlock the previously _locked_ users.
     * Users which are already in desired state will be returned as errors.
     *
     * @var bool
     */
    public bool $lock;
    public function definedProperties(): array
    {
        return ['userIds' => 'userIds', 'lock' => 'lock'];
    }
}