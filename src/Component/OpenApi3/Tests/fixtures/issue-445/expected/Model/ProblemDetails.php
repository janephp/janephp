<?php

namespace PicturePark\API\Model;

class ProblemDetails
{
    /**
     * @var string|null
     */
    public ?string $type;
    /**
     * @var string|null
     */
    public ?string $title;
    /**
     * @var int|null
     */
    public ?int $status;
    /**
     * @var string|null
     */
    public ?string $detail;
    /**
     * @var string|null
     */
    public ?string $instance;
    /**
     * @var array<string, mixed>|null
     */
    public ?iterable $extensions;
}