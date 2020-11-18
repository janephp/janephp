<?php

namespace PicturePark\API\Model;

class FileTransferDeleteRequest
{
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
        $this->fileTransferIds = $fileTransferIds;
        return $this;
    }
}