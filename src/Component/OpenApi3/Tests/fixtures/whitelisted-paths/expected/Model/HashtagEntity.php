<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class HashtagEntity implements AdditionalPropertiesInterface
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
     * The text of the Hashtag
     *
     * @var string
     */
    public string $tag;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end', 'tag' => 'tag'];
    }
}