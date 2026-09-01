<?php

namespace PicturePark\API\Model;

class OutputResetRetryAttemptsRequest
{
    /**
     * List of output IDs you want to filter on. If this field is not empty, the other will be ignored.
     *
     * @var list<string>|null
     */
    public ?array $outputIds;
    /**
     * List of Content IDs you want to filter on.
     *
     * @var list<string>|null
     */
    public ?array $contentIds;
    /**
     * The file extension of the outputs you want to filter on.
     *
     * @var list<string>|null
     */
    public ?array $fileExtensions;
    /**
     * The IDs of the output formats you want to filter on.
     *
     * @var list<string>|null
     */
    public ?array $outputFormatIds;
    /**
     * Should the successful filter results also be reset (and subsequently re-rendered)?
     *
     * @var bool
     */
    public bool $includeCompleted;
}