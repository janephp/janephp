<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanschedulerModifyWlanScheduler
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Schedules on Sunday
     *
     * @var list<string>
     */
    protected $sun;
    /**
     * Schedules on Monday
     *
     * @var list<string>
     */
    protected $mon;
    /**
     * Schedules on Tuesday
     *
     * @var list<string>
     */
    protected $tue;
    /**
     * schedules on Wednesday
     *
     * @var list<string>
     */
    protected $wed;
    /**
     * Schedules on Thursday
     *
     * @var list<string>
     */
    protected $thu;
    /**
     * Schedules on Friday
     *
     * @var list<string>
     */
    protected $fri;
    /**
     * Schedules on Saturday
     *
     * @var list<string>
     */
    protected $sat;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Schedules on Sunday
     *
     * @return list<string>
     */
    public function getSun(): array
    {
        return $this->sun;
    }
    /**
     * Schedules on Sunday
     *
     * @param list<string> $sun
     *
     * @return self
     */
    public function setSun(array $sun): self
    {
        $this->initialized['sun'] = true;
        $this->sun = $sun;
        return $this;
    }
    /**
     * Schedules on Monday
     *
     * @return list<string>
     */
    public function getMon(): array
    {
        return $this->mon;
    }
    /**
     * Schedules on Monday
     *
     * @param list<string> $mon
     *
     * @return self
     */
    public function setMon(array $mon): self
    {
        $this->initialized['mon'] = true;
        $this->mon = $mon;
        return $this;
    }
    /**
     * Schedules on Tuesday
     *
     * @return list<string>
     */
    public function getTue(): array
    {
        return $this->tue;
    }
    /**
     * Schedules on Tuesday
     *
     * @param list<string> $tue
     *
     * @return self
     */
    public function setTue(array $tue): self
    {
        $this->initialized['tue'] = true;
        $this->tue = $tue;
        return $this;
    }
    /**
     * schedules on Wednesday
     *
     * @return list<string>
     */
    public function getWed(): array
    {
        return $this->wed;
    }
    /**
     * schedules on Wednesday
     *
     * @param list<string> $wed
     *
     * @return self
     */
    public function setWed(array $wed): self
    {
        $this->initialized['wed'] = true;
        $this->wed = $wed;
        return $this;
    }
    /**
     * Schedules on Thursday
     *
     * @return list<string>
     */
    public function getThu(): array
    {
        return $this->thu;
    }
    /**
     * Schedules on Thursday
     *
     * @param list<string> $thu
     *
     * @return self
     */
    public function setThu(array $thu): self
    {
        $this->initialized['thu'] = true;
        $this->thu = $thu;
        return $this;
    }
    /**
     * Schedules on Friday
     *
     * @return list<string>
     */
    public function getFri(): array
    {
        return $this->fri;
    }
    /**
     * Schedules on Friday
     *
     * @param list<string> $fri
     *
     * @return self
     */
    public function setFri(array $fri): self
    {
        $this->initialized['fri'] = true;
        $this->fri = $fri;
        return $this;
    }
    /**
     * Schedules on Saturday
     *
     * @return list<string>
     */
    public function getSat(): array
    {
        return $this->sat;
    }
    /**
     * Schedules on Saturday
     *
     * @param list<string> $sat
     *
     * @return self
     */
    public function setSat(array $sat): self
    {
        $this->initialized['sat'] = true;
        $this->sat = $sat;
        return $this;
    }
}