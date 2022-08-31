<?php

namespace PicturePark\API\Model;

class UnsharpenMaskAction extends ImageActionBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * Unsharp mask amount (the difference between blurred and original image).
     *
     * @var float
     */
    protected $amount;
    /**
     * Blur radius used to produce unfocused version of the image.
     *
     * @var float
     */
    protected $radius;
    /**
     * The threshold value for the unsharp mask in range [0, 1]
     *
     * @var float
     */
    protected $threshold;
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
     * Unsharp mask amount (the difference between blurred and original image).
     *
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }
    /**
     * Unsharp mask amount (the difference between blurred and original image).
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Blur radius used to produce unfocused version of the image.
     *
     * @return float
     */
    public function getRadius() : float
    {
        return $this->radius;
    }
    /**
     * Blur radius used to produce unfocused version of the image.
     *
     * @param float $radius
     *
     * @return self
     */
    public function setRadius(float $radius) : self
    {
        $this->radius = $radius;
        return $this;
    }
    /**
     * The threshold value for the unsharp mask in range [0, 1]
     *
     * @return float
     */
    public function getThreshold() : float
    {
        return $this->threshold;
    }
    /**
     * The threshold value for the unsharp mask in range [0, 1]
     *
     * @param float $threshold
     *
     * @return self
     */
    public function setThreshold(float $threshold) : self
    {
        $this->threshold = $threshold;
        return $this;
    }
}