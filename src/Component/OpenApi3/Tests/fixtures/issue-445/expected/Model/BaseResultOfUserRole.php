<?php

namespace PicturePark\API\Model;

class BaseResultOfUserRole
{
    /**
     * The total number of matching documents.
     *
     * @var int
     */
    public int $totalResults;
    /**
     * The matched documents.
     *
     * @var list<UserRole>
     */
    public array $results;
    /**
     * The search execution time in milliseconds.
     *
     * @var int
     */
    public int $elapsedMilliseconds;
    /**
     * An optional token to access the next page of results for those endpoints that support backend scrolling logic.
     *
     * @var string|null
     */
    public ?string $pageToken;
}