<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentOwnershipTransferItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @var string
     */
    public string $transferUserId;
    /**
     * The content ID.
     *
     * @var string
     */
    public string $contentId;
    public function definedProperties(): array
    {
        return ['transferUserId' => 'transferUserId', 'contentId' => 'contentId'];
    }
}