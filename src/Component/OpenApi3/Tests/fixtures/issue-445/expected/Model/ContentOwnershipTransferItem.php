<?php

namespace PicturePark\API\Model;

class ContentOwnershipTransferItem
{
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
    public function getTransferUserId() : string
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
    public function setTransferUserId(string $transferUserId) : self
    {
        $this->transferUserId = $transferUserId;
        return $this;
    }
    /**
     * The content ID.
     *
     * @return string
     */
    public function getContentId() : string
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
    public function setContentId(string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
}