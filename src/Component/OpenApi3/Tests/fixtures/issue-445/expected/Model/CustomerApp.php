<?php

namespace PicturePark\API\Model;

class CustomerApp
{
    /**
     * @var string|null
     */
    public ?string $appId;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $name;
    /**
     * @var iterable<string, string>|null
     */
    public ?iterable $description;
    /**
     * @var string|null
     */
    public ?string $icon;
}