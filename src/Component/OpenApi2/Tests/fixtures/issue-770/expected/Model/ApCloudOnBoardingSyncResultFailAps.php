<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApCloudOnBoardingSyncResultFailAps
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
     * Number of failed provisions APs
     *
     * @var int
     */
    protected $count;
    /**
     * @var list<ApCloudOnBoardingSyncResultFailApsApsItem>
     */
    protected $aps;
    /**
     * Number of failed provisions APs
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of failed provisions APs
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
     * @return list<ApCloudOnBoardingSyncResultFailApsApsItem>
     */
    public function getAps(): array
    {
        return $this->aps;
    }
    /**
     * @param list<ApCloudOnBoardingSyncResultFailApsApsItem> $aps
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