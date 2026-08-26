<?php

namespace Jane\Component\OpenApi31\Tests\ExpectedIssue1036\Runtime;

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