<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AlarmListSingleAlarm
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $ackTime;
    /**
     * @var string
     */
    protected $ackUser;
    /**
     * @var string
     */
    protected $acknowledged;
    /**
     * @var string
     */
    protected $activity;
    /**
     * @var int
     */
    protected $alarmCode;
    /**
     * @var string
     */
    protected $alarmState;
    /**
     * @var string
     */
    protected $alarmType;
    /**
     * @var string
     */
    protected $category;
    /**
     * @var string
     */
    protected $clearComment;
    /**
     * @var int
     */
    protected $clearTime;
    /**
     * @var string
     */
    protected $clearUser;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $insertionTime;
    /**
     * @var string
     */
    protected $severity;
    /**
     * @return int
     */
    public function getAckTime(): int
    {
        return $this->ackTime;
    }
    /**
     * @param int $ackTime
     *
     * @return self
     */
    public function setAckTime(int $ackTime): self
    {
        $this->initialized['ackTime'] = true;
        $this->ackTime = $ackTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getAckUser(): string
    {
        return $this->ackUser;
    }
    /**
     * @param string $ackUser
     *
     * @return self
     */
    public function setAckUser(string $ackUser): self
    {
        $this->initialized['ackUser'] = true;
        $this->ackUser = $ackUser;
        return $this;
    }
    /**
     * @return string
     */
    public function getAcknowledged(): string
    {
        return $this->acknowledged;
    }
    /**
     * @param string $acknowledged
     *
     * @return self
     */
    public function setAcknowledged(string $acknowledged): self
    {
        $this->initialized['acknowledged'] = true;
        $this->acknowledged = $acknowledged;
        return $this;
    }
    /**
     * @return string
     */
    public function getActivity(): string
    {
        return $this->activity;
    }
    /**
     * @param string $activity
     *
     * @return self
     */
    public function setActivity(string $activity): self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * @return int
     */
    public function getAlarmCode(): int
    {
        return $this->alarmCode;
    }
    /**
     * @param int $alarmCode
     *
     * @return self
     */
    public function setAlarmCode(int $alarmCode): self
    {
        $this->initialized['alarmCode'] = true;
        $this->alarmCode = $alarmCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlarmState(): string
    {
        return $this->alarmState;
    }
    /**
     * @param string $alarmState
     *
     * @return self
     */
    public function setAlarmState(string $alarmState): self
    {
        $this->initialized['alarmState'] = true;
        $this->alarmState = $alarmState;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlarmType(): string
    {
        return $this->alarmType;
    }
    /**
     * @param string $alarmType
     *
     * @return self
     */
    public function setAlarmType(string $alarmType): self
    {
        $this->initialized['alarmType'] = true;
        $this->alarmType = $alarmType;
        return $this;
    }
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * @return string
     */
    public function getClearComment(): string
    {
        return $this->clearComment;
    }
    /**
     * @param string $clearComment
     *
     * @return self
     */
    public function setClearComment(string $clearComment): self
    {
        $this->initialized['clearComment'] = true;
        $this->clearComment = $clearComment;
        return $this;
    }
    /**
     * @return int
     */
    public function getClearTime(): int
    {
        return $this->clearTime;
    }
    /**
     * @param int $clearTime
     *
     * @return self
     */
    public function setClearTime(int $clearTime): self
    {
        $this->initialized['clearTime'] = true;
        $this->clearTime = $clearTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getClearUser(): string
    {
        return $this->clearUser;
    }
    /**
     * @param string $clearUser
     *
     * @return self
     */
    public function setClearUser(string $clearUser): self
    {
        $this->initialized['clearUser'] = true;
        $this->clearUser = $clearUser;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return int
     */
    public function getInsertionTime(): int
    {
        return $this->insertionTime;
    }
    /**
     * @param int $insertionTime
     *
     * @return self
     */
    public function setInsertionTime(int $insertionTime): self
    {
        $this->initialized['insertionTime'] = true;
        $this->insertionTime = $insertionTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }
    /**
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity): self
    {
        $this->initialized['severity'] = true;
        $this->severity = $severity;
        return $this;
    }
}