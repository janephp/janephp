<?php

namespace PicturePark\API\Model;

class UnsharpenMaskAction extends ImageActionBase
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['amount'] = true;
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
        $this->initialized['radius'] = true;
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
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
}