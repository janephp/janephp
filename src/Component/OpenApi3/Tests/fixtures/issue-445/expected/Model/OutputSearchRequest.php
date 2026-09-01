<?php

namespace PicturePark\API\Model;

class OutputSearchRequest
{
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    public int $limit = 30;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    public ?string $pageToken;
    /**
     * List of Content ids you want to use to fetch the outputs.
     *
     * @var list<string>|null
     */
    public ?array $contentIds;
    /**
     * The allowed rendering states of the outputs you want to fetch.
     *
     * @var list<string>|null
     */
    public ?array $renderingStates;
    /**
     * The file extension of the outputs you want to fetch.
     *
     * @var list<string>|null
     */
    public ?array $fileExtensions;
    /**
     * The output format id of the outputs you want to fetch.
     *
     * @var list<string>|null
     */
    public ?array $outputFormatIds;
}