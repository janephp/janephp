<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Poll implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Unique identifier of this poll.
     *
     * @var string
     */
    public string $id;
    /**
     * @var list<PollOption>
     */
    public array $options;
    /**
     * @var string
     */
    public string $votingStatus;
    /**
     * @var \DateTime
     */
    public \DateTime $endDatetime;
    /**
     * @var int
     */
    public int $durationMinutes;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'options' => 'options', 'votingStatus' => 'voting_status', 'endDatetime' => 'end_datetime', 'durationMinutes' => 'duration_minutes'];
    }
}