<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime;

interface AdditionalPropertiesInterface extends \IteratorAggregate, \Countable, \ArrayAccess, \JsonSerializable
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array;
    /**
     * @return iterable<string, mixed>
     */
    public function additionalPropertyEntries(): iterable;
}