<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApMultipleMoveApMultipleMoveResponseFailAps
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
     * Number of AP moved failures.
     *
     * @var int
     */
    protected $count;
    /**
     * @var list<ApMultipleMoveApMultipleMoveResponseFailApsApsItem>
     */
    protected $aps;
    /**
     * Number of AP moved failures.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of AP moved failures.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return list<ApMultipleMoveApMultipleMoveResponseFailApsApsItem>
     */
    public function getAps(): array
    {
        return $this->aps;
    }
    /**
     * @param list<ApMultipleMoveApMultipleMoveResponseFailApsApsItem> $aps
     *
     * @return self
     */
    public function setAps(array $aps): self
    {
        $this->initialized['aps'] = true;
        $this->aps = $aps;
        return $this;
    }
}