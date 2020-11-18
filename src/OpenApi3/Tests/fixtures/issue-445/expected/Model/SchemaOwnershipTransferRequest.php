<?php

namespace PicturePark\API\Model;

class SchemaOwnershipTransferRequest
{
    /**
     * The id of the user to whom the schema has to be transferred to.
     *
     * @var string|null
     */
    protected $transferUserId;
    /**
     * The id of the user to whom the schema has to be transferred to.
     *
     * @return string|null
     */
    public function getTransferUserId() : ?string
    {
        return $this->transferUserId;
    }
    /**
     * The id of the user to whom the schema has to be transferred to.
     *
     * @param string|null $transferUserId
     *
     * @return self
     */
    public function setTransferUserId(?string $transferUserId) : self
    {
        $this->transferUserId = $transferUserId;
        return $this;
    }
}