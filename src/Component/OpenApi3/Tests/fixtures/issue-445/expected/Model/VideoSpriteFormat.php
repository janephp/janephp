<?php

namespace PicturePark\API\Model;

class VideoSpriteFormat extends FormatBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies the dimensions of a single frame in the sprite.
     *
     * @var mixed|null
     */
    protected $spriteResizeAction;
    /**
     * Limit for the number of frames to generate.
     *
     * @var int
     */
    protected $maxNumberOfSprites;
    /**
     * JPEG-quality to use for the sprite.
     *
     * @var int
     */
    protected $quality;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * Specifies the dimensions of a single frame in the sprite.
     *
     * @return mixed
     */
    public function getSpriteResizeAction()
    {
        return $this->spriteResizeAction;
    }
    /**
     * Specifies the dimensions of a single frame in the sprite.
     *
     * @param mixed $spriteResizeAction
     *
     * @return self
     */
    public function setSpriteResizeAction($spriteResizeAction) : self
    {
        $this->initialized['spriteResizeAction'] = true;
        $this->spriteResizeAction = $spriteResizeAction;
        return $this;
    }
    /**
     * Limit for the number of frames to generate.
     *
     * @return int
     */
    public function getMaxNumberOfSprites() : int
    {
        return $this->maxNumberOfSprites;
    }
    /**
     * Limit for the number of frames to generate.
     *
     * @param int $maxNumberOfSprites
     *
     * @return self
     */
    public function setMaxNumberOfSprites(int $maxNumberOfSprites) : self
    {
        $this->initialized['maxNumberOfSprites'] = true;
        $this->maxNumberOfSprites = $maxNumberOfSprites;
        return $this;
    }
    /**
     * JPEG-quality to use for the sprite.
     *
     * @return int
     */
    public function getQuality() : int
    {
        return $this->quality;
    }
    /**
     * JPEG-quality to use for the sprite.
     *
     * @param int $quality
     *
     * @return self
     */
    public function setQuality(int $quality) : self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
}