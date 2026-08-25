<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Model;

class WidgetSettings
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
    protected $color;
    /**
     * @var int
     */
    protected $size;
    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
}