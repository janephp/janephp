<?php

namespace PicturePark\API\Model;

class EpsMetadata
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
     * 
     *
     * @var bool
     */
    protected $isRasterized;
    /**
     * 
     *
     * @var float
     */
    protected $widthInPoints;
    /**
     * 
     *
     * @var float
     */
    protected $heightInPoints;
    /**
     * 
     *
     * @return bool
     */
    public function getIsRasterized() : bool
    {
        return $this->isRasterized;
    }
    /**
     * 
     *
     * @param bool $isRasterized
     *
     * @return self
     */
    public function setIsRasterized(bool $isRasterized) : self
    {
        $this->initialized['isRasterized'] = true;
        $this->isRasterized = $isRasterized;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getWidthInPoints() : float
    {
        return $this->widthInPoints;
    }
    /**
     * 
     *
     * @param float $widthInPoints
     *
     * @return self
     */
    public function setWidthInPoints(float $widthInPoints) : self
    {
        $this->initialized['widthInPoints'] = true;
        $this->widthInPoints = $widthInPoints;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getHeightInPoints() : float
    {
        return $this->heightInPoints;
    }
    /**
     * 
     *
     * @param float $heightInPoints
     *
     * @return self
     */
    public function setHeightInPoints(float $heightInPoints) : self
    {
        $this->initialized['heightInPoints'] = true;
        $this->heightInPoints = $heightInPoints;
        return $this;
    }
}