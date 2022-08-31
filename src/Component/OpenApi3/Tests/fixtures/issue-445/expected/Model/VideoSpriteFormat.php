<?php

namespace PicturePark\API\Model;

class VideoSpriteFormat extends FormatBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
        $this->extension = $extension;
        return $this;
    }
}