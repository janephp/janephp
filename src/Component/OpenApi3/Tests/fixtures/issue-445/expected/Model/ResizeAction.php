<?php

namespace PicturePark\API\Model;

class ResizeAction
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
     * Target width for the output.
     *
     * @var int
     */
    protected $width;
    /**
     * Target height for the output.
     *
     * @var int
     */
    protected $height;
    /**
     * Specifies additional resize behaviour.
     *
     * @var string
     */
    protected $resizeMode;
    /**
     * Target width for the output.
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * Target width for the output.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Target height for the output.
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * Target height for the output.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * Specifies additional resize behaviour.
     *
     * @return string
     */
    public function getResizeMode(): string
    {
        return $this->resizeMode;
    }
    /**
     * Specifies additional resize behaviour.
     *
     * @param string $resizeMode
     *
     * @return self
     */
    public function setResizeMode(string $resizeMode): self
    {
        $this->initialized['resizeMode'] = true;
        $this->resizeMode = $resizeMode;
        return $this;
    }
}