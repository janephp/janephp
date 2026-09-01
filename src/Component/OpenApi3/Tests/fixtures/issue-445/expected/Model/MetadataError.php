<?php

namespace PicturePark\API\Model;

class MetadataError
{
    /**
     * @var string|null
     */
    public ?string $errorType;
    /**
     * @var int
     */
    public int $lineNumber;
    /**
     * @var int
     */
    public int $linePosition;
    /**
     * @var string|null
     */
    public ?string $path;
    /**
     * @var string|null
     */
    public ?string $message;
    /**
     * @var string|null
     */
    public ?string $schemaId;
}