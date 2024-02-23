<?php

namespace PicturePark\API\Model;

class SchemaOwnershipTransferManyRequest
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The schema ids.
     *
     * @var list<string>|null
     */
    protected $schemaIds;
    /**
     * The id of user to whom the schemas have to be transferred to.
     *
     * @var string|null
     */
    protected $transferUserId;
    /**
     * The schema ids.
     *
     * @return list<string>|null
     */
    public function getSchemaIds() : ?array
    {
        return $this->schemaIds;
    }
    /**
     * The schema ids.
     *
     * @param list<string>|null $schemaIds
     *
     * @return self
     */
    public function setSchemaIds(?array $schemaIds) : self
    {
        $this->initialized['schemaIds'] = true;
        $this->schemaIds = $schemaIds;
        return $this;
    }
    /**
     * The id of user to whom the schemas have to be transferred to.
     *
     * @return string|null
     */
    public function getTransferUserId() : ?string
    {
        return $this->transferUserId;
    }
    /**
     * The id of user to whom the schemas have to be transferred to.
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