<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class CashtagEntity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    public int $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    public int $end;
    /**
     * @var string
     */
    public string $tag;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end', 'tag' => 'tag'];
    }
}