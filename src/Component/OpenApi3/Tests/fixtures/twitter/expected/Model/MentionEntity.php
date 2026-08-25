<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class MentionEntity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    protected $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    protected $end;
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @var string
     */
    protected $username;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @param int $start
     *
     * @return self
     */
    public function setStart(int $start): self
    {
        $this->initialized['start'] = true;
        $this->start = $start;
        return $this;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @param int $end
     *
     * @return self
     */
    public function setEnd(int $end): self
    {
        $this->initialized['end'] = true;
        $this->end = $end;
        return $this;
    }
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * The Twitter handle (screen name) of this user.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['start' => ['start', 'getStart', 'setStart'], 'end' => ['end', 'getEnd', 'setEnd'], 'username' => ['username', 'getUsername', 'setUsername']];
    }
}