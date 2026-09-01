<?php

namespace PicturePark\API\Model;

class PagingRequest
{
    /**
     * Limits the number of the returned schemas. Defaults to 0.
     *
     * @var int
     */
    public int $limit;
    /**
     * The token used to retrieve the next page of results. It must be null on first request and only filled with the returned pageToken to request next page of results.
     *
     * @var string|null
     */
    public ?string $pageToken;
}