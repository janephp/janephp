<?php

namespace PicturePark\API\Model;

class TransferUploadFile extends \ArrayObject
{
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
     * Target filename of file.
     *
     * @var string
     */
    protected $fileName;
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
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Target filename of file.
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * Target filename of file.
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
}