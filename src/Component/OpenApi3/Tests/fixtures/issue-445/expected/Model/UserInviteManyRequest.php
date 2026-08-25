<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserInviteManyRequest implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['userIds' => ['userIds', 'getUserIds', 'setUserIds']];
    }
}