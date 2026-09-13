<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class MentionEntity implements AdditionalPropertiesInterface
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
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    public string $username;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end', 'username' => 'username'];
    }
}