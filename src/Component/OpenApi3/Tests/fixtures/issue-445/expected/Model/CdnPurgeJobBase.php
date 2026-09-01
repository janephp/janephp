<?php

namespace PicturePark\API\Model;

class CdnPurgeJobBase
{
    /**
     * Indicates if the operation was performed successfully.
     *
     * @var bool
     */
    public bool $success;
    /**
     * Number of retries left until the operation is considered as failed.
     *
     * @var int
     */
    public int $retriesLeft;
    /**
     * @var string
     */
    public string $kind;
}