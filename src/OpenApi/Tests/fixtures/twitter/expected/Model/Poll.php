<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Poll
{
    /**
     * Unique identifier of this poll.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var PollOption[]
     */
    protected $options;
    /**
     * 
     *
     * @var string
     */
    protected $votingStatus;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $endDatetime;
    /**
     * 
     *
     * @var int
     */
    protected $durationMinutes;
    /**
     * Unique identifier of this poll.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Unique identifier of this poll.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return PollOption[]
     */
    public function getOptions() : array
    {
        return $this->options;
    }
    /**
     * 
     *
     * @param PollOption[] $options
     *
     * @return self
     */
    public function setOptions(array $options) : self
    {
        $this->options = $options;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVotingStatus() : string
    {
        return $this->votingStatus;
    }
    /**
     * 
     *
     * @param string $votingStatus
     *
     * @return self
     */
    public function setVotingStatus(string $votingStatus) : self
    {
        $this->votingStatus = $votingStatus;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEndDatetime() : \DateTime
    {
        return $this->endDatetime;
    }
    /**
     * 
     *
     * @param \DateTime $endDatetime
     *
     * @return self
     */
    public function setEndDatetime(\DateTime $endDatetime) : self
    {
        $this->endDatetime = $endDatetime;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDurationMinutes() : int
    {
        return $this->durationMinutes;
    }
    /**
     * 
     *
     * @param int $durationMinutes
     *
     * @return self
     */
    public function setDurationMinutes(int $durationMinutes) : self
    {
        $this->durationMinutes = $durationMinutes;
        return $this;
    }
}