<?php

namespace PicturePark\API\Model;

class FileTransfer
{
    /**
     * ID of file transfer.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of file transfer.
     *
     * @var string
     */
    public string $name;
    /**
     * Replaced in favor of RequestId. Client provided identifier.
     *
     * @deprecated
     *
     * @var string|null
     */
    public ?string $identifier;
    /**
     * Client provided identifier.
     *
     * @var string
     */
    public string $requestId;
    /**
     * ID of transfer.
     *
     * @var string
     */
    public string $transferId;
    /**
     * State of file transfer.
     *
     * @var string
     */
    public string $state;
    /**
     * ID of Content created for file.
     *
     * @var string|null
     */
    public ?string $contentId;
}