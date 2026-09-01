<?php

namespace Docker\Api\Model;

class ImagesNameHistoryGetResponse200Item
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var int
     */
    public int $created;
    /**
     * @var string
     */
    public string $createdBy;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var int
     */
    public int $size;
    /**
     * @var string
     */
    public string $comment;
}