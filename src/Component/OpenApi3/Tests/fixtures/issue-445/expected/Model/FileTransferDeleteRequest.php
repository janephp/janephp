<?php

namespace PicturePark\API\Model;

class FileTransferDeleteRequest
{
    /**
     * ID of transfer.
     *
     * @var string
     */
    public string $transferId;
    /**
     * List of IDs of file transfers to delete.
     *
     * @var list<string>
     */
    public array $fileTransferIds;
}