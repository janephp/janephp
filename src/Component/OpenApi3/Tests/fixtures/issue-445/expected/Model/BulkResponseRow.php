<?php

namespace PicturePark\API\Model;

class BulkResponseRow
{
    /**
     * ID of the document.
     *
     * @var string
     */
    public string $id;
    /**
     * Version of the document.
     *
     * @var int
     */
    public int $version;
    /**
     * Eventual error.
     *
     * @var string|null
     */
    public ?string $error;
    /**
     * True if item successfully saved. False otherwise.
     *
     * @var bool
     */
    public bool $succeeded;
    /**
     * Returned status code.
     *
     * @var int
     */
    public int $status;
    /**
     * The identifier provided by user in the corresponding request (or null if none was provided). Used only in bulk creation.
     *
     * @var string|null
     */
    public ?string $requestId;
}