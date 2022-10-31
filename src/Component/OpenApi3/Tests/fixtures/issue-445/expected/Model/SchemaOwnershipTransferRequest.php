<?php

namespace PicturePark\API\Model;

class SchemaOwnershipTransferRequest
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['transferUserId'] = true;
        $this->transferUserId = $transferUserId;
        return $this;
    }
}