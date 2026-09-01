<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * @var string|null
     */
    public ?string $string = 'content';
    /**
     * @var bool|null
     */
    public ?bool $bool = true;
    /**
     * @var int|null
     */
    public ?int $integer = 10;
    /**
     * @var float|null
     */
    public ?float $float = 3.4;
    /**
     * @var list<mixed>|null
     */
    public ?array $array = array(0 => 'value');
    /**
     * @var list<mixed>|null
     */
    public ?array $object = array('key' => 'value');
    /**
     * @var TestSubObject|null
     */
    public ?TestSubObject $subObject;
}