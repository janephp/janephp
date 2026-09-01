<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class UserReviewManyRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User IDs.
     *
     * @var list<string>
     */
    public array $userIds;
    /**
     * Indicates the requested review state of the user.
     * If _true_ is specified, user will be transitioned into _reviewed_ state. _False_ will put the user back into _to be reviewed_ state.
     *
     * @var bool
     */
    public bool $reviewed;
    public function definedProperties(): array
    {
        return ['userIds' => 'userIds', 'reviewed' => 'reviewed'];
    }
}