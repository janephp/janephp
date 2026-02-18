<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapIndoorMapXy
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
     * x
     *
     * @var float
     */
    protected $x;
    /**
     * y
     *
     * @var float
     */
    protected $y;
    /**
     * x
     *
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }
    /**
     * x
     *
     * @param float $x
     *
     * @return self
     */
    public function setX(float $x): self
    {
        $this->initialized['x'] = true;
        $this->x = $x;
        return $this;
    }
    /**
     * y
     *
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }
    /**
     * y
     *
     * @param float $y
     *
     * @return self
     */
    public function setY(float $y): self
    {
        $this->initialized['y'] = true;
        $this->y = $y;
        return $this;
    }
}