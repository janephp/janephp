<?php

namespace PicturePark\API\Model;

class CustomerApp
{
    /**
     * @var string|null
     */
    public ?string $appId;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $name;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $description;
    /**
     * @var string|null
     */
    public ?string $icon;
}