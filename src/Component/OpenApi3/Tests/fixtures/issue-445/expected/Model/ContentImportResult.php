<?php

namespace PicturePark\API\Model;

class ContentImportResult
{
    /**
     * ID of the file transfer.
     *
     * @var string
     */
    public string $fileTransferId;
    /**
     * ID of the resulting content.
     *
     * @var string|null
     */
    public ?string $contentId;
    /**
     * State of the item.
     *
     * @var string|null
     */
    public ?string $state;
    /**
     * Indicates if the operation succeeded.
     *
     * @var bool
     */
    public bool $succeeded;
    /**
     * If the operation did not succeeded, this contains error related information.
     *
     * @var ErrorResponse|null
     */
    public ?ErrorResponse $error;
}