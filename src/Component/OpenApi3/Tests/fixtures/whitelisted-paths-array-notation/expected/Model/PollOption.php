<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PollOption implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Position of this choice in the poll.
     *
     * @var int
     */
    public int $position;
    /**
     * The text of a poll choice.
     *
     * @var string
     */
    public string $label;
    /**
     * Number of users who voted for this choice.
     *
     * @var int
     */
    public int $votes;
    public function definedProperties(): array
    {
        return ['position' => 'position', 'label' => 'label', 'votes' => 'votes'];
    }
}