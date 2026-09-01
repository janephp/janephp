<?php

namespace PicturePark\API\Model;

class Transfer
{
    /**
     * ID of transfer.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of transfer.
     *
     * @var string
     */
    public string $name;
    /**
     * State of transfer.
     *
     * @var string
     */
    public string $state;
    /**
     * Type of transfer.
     *
     * @var string
     */
    public string $transferType;
    /**
     * Associated business process ID.
     *
     * @var string|null
     */
    public ?string $businessProcessId;
    /**
     * Number of files in transfer.
     *
     * @var int
     */
    public int $fileTransferCount;
    /**
     * ID of collection created from transfer.
     *
     * @var string|null
     */
    public ?string $collectionId;
}