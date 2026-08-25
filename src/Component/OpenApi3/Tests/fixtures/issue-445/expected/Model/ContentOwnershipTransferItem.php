<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ContentOwnershipTransferItem implements AdditionalPropertiesInterface
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
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @var string
     */
    protected $transferUserId;
    /**
     * The content ID.
     *
     * @var string
     */
    protected $contentId;
    /**
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @return string
     */
    public function getTransferUserId(): string
    {
        return $this->transferUserId;
    }
    /**
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @param string $transferUserId
     *
     * @return self
     */
    public function setTransferUserId(string $transferUserId): self
    {
        $this->initialized['transferUserId'] = true;
        $this->transferUserId = $transferUserId;
        return $this;
    }
    /**
     * The content ID.
     *
     * @return string
     */
    public function getContentId(): string
    {
        return $this->contentId;
    }
    /**
     * The content ID.
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId): self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['transferUserId' => ['transferUserId', 'getTransferUserId', 'setTransferUserId'], 'contentId' => ['contentId', 'getContentId', 'setContentId']];
    }
}