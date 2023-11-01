<?php

namespace PicturePark\API\Model;

class TransferFile
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
     * Replaced in favor of RequestId. Client generated identifier of the item.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $identifier;
    /**
     * Client generated identifier of the item.
     *
     * @var string|null
     */
    protected $requestId;
    /**
     * Replaced in favor of RequestId. Client generated identifier of the item.
     *
     * @deprecated
     *
     * @return string|null
     */
    public function getIdentifier() : ?string
    {
        return $this->identifier;
    }
    /**
     * Replaced in favor of RequestId. Client generated identifier of the item.
     *
     * @param string|null $identifier
     *
     * @deprecated
     *
     * @return self
     */
    public function setIdentifier(?string $identifier) : self
    {
        $this->initialized['identifier'] = true;
        $this->identifier = $identifier;
        return $this;
    }
    /**
     * Client generated identifier of the item.
     *
     * @return string|null
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }
    /**
     * Client generated identifier of the item.
     *
     * @param string|null $requestId
     *
     * @return self
     */
    public function setRequestId(?string $requestId) : self
    {
        $this->initialized['requestId'] = true;
        $this->requestId = $requestId;
        return $this;
    }
}