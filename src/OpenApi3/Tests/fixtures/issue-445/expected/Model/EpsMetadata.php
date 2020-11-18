<?php

namespace PicturePark\API\Model;

class EpsMetadata
{
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
        $this->heightInPoints = $heightInPoints;
        return $this;
    }
}