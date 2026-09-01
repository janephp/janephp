<?php

namespace PicturePark\API\Model;

class ErrorResponse
{
    /**
     * Serialized PictureparkBusinessException.
     *
     * @var string|null
     */
    public ?string $exception;
    /**
     * Trace ID.
     *
     * @var string|null
     */
    public ?string $traceId;
    /**
     * Trace job ID.
     *
     * @var string|null
     */
    public ?string $traceJobId;
}