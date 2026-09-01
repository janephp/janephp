<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * @var list<string>|null
     */
    public ?array $array;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $object;
}