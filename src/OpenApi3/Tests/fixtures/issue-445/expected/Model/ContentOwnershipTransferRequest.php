<?php

namespace PicturePark\API\Model;

class ContentOwnershipTransferRequest
{
    /**
     * The ID of the user to whom the content ownership has to be transferred to.
     *
     * @var string
     */
    protected $transferUserId;
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
}