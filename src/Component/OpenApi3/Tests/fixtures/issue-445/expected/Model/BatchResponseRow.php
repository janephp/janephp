<?php

namespace PicturePark\API\Model;

class BatchResponseRow
{
    /**
     * Id of the item.
     *
     * @var string
     */
    public string $id;
    /**
     * Indicates if the operation succeeded.
     *
     * @var bool
     */
    public bool $succeeded;
    /**
     * Status code of the operation.
     *
     * @var int
     */
    public int $status;
    /**
     * New version of the item.
     *
     * @var int
     */
    public int $version;
    /**
     * If the operation did not succeed, this contains error information.
     *
     * @var ErrorResponse|null
     */
    public ?ErrorResponse $error;
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @var string|null
     */
    public ?string $requestId;
}