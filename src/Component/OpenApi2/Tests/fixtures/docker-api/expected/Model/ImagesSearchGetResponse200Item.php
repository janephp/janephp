<?php

namespace Docker\Api\Model;

class ImagesSearchGetResponse200Item
{
    /**
     * @var string
     */
    public string $description;
    /**
     * @var bool
     */
    public bool $isOfficial;
    /**
     * @var bool
     */
    public bool $isAutomated;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var int
     */
    public int $starCount;
}