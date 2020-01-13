<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class PollOption
{
    /**
     * Position of this choice in the poll.
     *
     * @var int
     */
    protected $position;
    /**
     * The text of a poll choice.
     *
     * @var string
     */
    protected $label;
    /**
     * Number of users who voted for this choice.
     *
     * @var int
     */
    protected $votes;
    /**
     * Position of this choice in the poll.
     *
     * @return int
     */
    public function getPosition() : int
    {
        return $this->position;
    }
    /**
     * Position of this choice in the poll.
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * The text of a poll choice.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * The text of a poll choice.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * Number of users who voted for this choice.
     *
     * @return int
     */
    public function getVotes() : int
    {
        return $this->votes;
    }
    /**
     * Number of users who voted for this choice.
     *
     * @param int $votes
     *
     * @return self
     */
    public function setVotes(int $votes) : self
    {
        $this->votes = $votes;
        return $this;
    }
}