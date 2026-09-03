<?php

namespace Jane\Component\JsonSchema\Tests\Expected\TestNull\Model;

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
     * @var string
     */
    public string $required;
    /**
     * @var string|null
     */
    public ?string $requiredNull;
}