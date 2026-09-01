<?php

namespace PicturePark\API\Model;

class Message
{
    /**
     * @var string|null
     */
    public ?string $id;
    /**
     * @var int
     */
    public int $retries;
    /**
     * @var int
     */
    public int $priority;
    /**
     * @var bool
     */
    public bool $deduplicate;
    /**
     * @var string
     */
    public string $kind;
}