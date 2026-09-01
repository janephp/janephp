<?php

namespace PicturePark\API\Model;

class LiveStreamSearchRequest
{
    /**
     * Sets the start date and time for results based on Timestamp attribute.
     *
     * @var \DateTime
     */
    public \DateTime $from;
    /**
     * Sets the end date and time for results based on Timestamp attribute.
     *
     * @var \DateTime
     */
    public \DateTime $to;
    /**
     * Optionally limits the result to only the specified scope type.
     *
     * @var string|null
     */
    public ?string $scopeType;
    /**
     * An optional search filter. Limits the document result set.
     *
     * @var FilterBase|null
     */
    public ?FilterBase $filter;
    /**
     * Limits the document count of the result set. Defaults to 30.
     *
     * @var int
     */
    public int $limit = 30;
    /**
     * To get a large amount of data, page token returned from the response can be used to get all data.
     *
     * @var string|null
     */
    public ?string $pageToken;
}