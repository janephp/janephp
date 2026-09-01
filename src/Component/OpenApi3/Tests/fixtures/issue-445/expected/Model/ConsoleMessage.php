<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ConsoleMessage extends Message implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $command;
    /**
     * @var list<TupleOfStringAndString>|null
     */
    public ?array $arguments;
    /**
     * @var string|null
     */
    public ?string $targetQueue;
    public function definedProperties(): array
    {
        return ['command' => 'command', 'arguments' => 'arguments', 'targetQueue' => 'targetQueue'];
    }
}