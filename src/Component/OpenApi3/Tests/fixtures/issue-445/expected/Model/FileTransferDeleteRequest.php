<?php

namespace PicturePark\API\Model;

class FileTransferDeleteRequest
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
     * ID of transfer.
     *
     * @var string
     */
    protected $transferId;
    /**
     * List of IDs of file transfers to delete.
     *
     * @var string[]
     */
    protected $fileTransferIds;
    /**
     * ID of transfer.
     *
     * @return string
     */
    public function getTransferId() : string
    {
        return $this->transferId;
    }
    /**
     * ID of transfer.
     *
     * @param string $transferId
     *
     * @return self
     */
    public function setTransferId(string $transferId) : self
    {
        $this->initialized['transferId'] = true;
        $this->transferId = $transferId;
        return $this;
    }
    /**
     * List of IDs of file transfers to delete.
     *
     * @return string[]
     */
    public function getFileTransferIds() : array
    {
        return $this->fileTransferIds;
    }
    /**
     * List of IDs of file transfers to delete.
     *
     * @param string[] $fileTransferIds
     *
     * @return self
     */
    public function setFileTransferIds(array $fileTransferIds) : self
    {
        $this->initialized['fileTransferIds'] = true;
        $this->fileTransferIds = $fileTransferIds;
        return $this;
    }
}