<?php

namespace Jane\Component\JsonSchema\Tests\Expected\DisabledStrictRequired\Model;

class Nullable
{
    /**
     * @var null
     */
    public $onlyNull;
    /**
     * @var string|null
     */
    public ?string $nullOrString;
    /**
     * @var string|null
     */
    public ?string $required;
    /**
     * @var string|null
     */
    public ?string $requiredNull;
}