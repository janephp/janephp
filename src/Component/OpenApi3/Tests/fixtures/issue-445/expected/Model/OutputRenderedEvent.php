<?php

namespace PicturePark\API\Model;

class OutputRenderedEvent extends ApplicationEvent
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
     * @var string|null
     */
    protected $outputId;
    /**
     * 
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $outputFormatId;
    /**
     * 
     *
     * @var string
     */
    protected $renderingState;
    /**
     * 
     *
     * @return string|null
     */
    public function getOutputId() : ?string
    {
        return $this->outputId;
    }
    /**
     * 
     *
     * @param string|null $outputId
     *
     * @return self
     */
    public function setOutputId(?string $outputId) : self
    {
        $this->initialized['outputId'] = true;
        $this->outputId = $outputId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * 
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId) : self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOutputFormatId() : ?string
    {
        return $this->outputFormatId;
    }
    /**
     * 
     *
     * @param string|null $outputFormatId
     *
     * @return self
     */
    public function setOutputFormatId(?string $outputFormatId) : self
    {
        $this->initialized['outputFormatId'] = true;
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRenderingState() : string
    {
        return $this->renderingState;
    }
    /**
     * 
     *
     * @param string $renderingState
     *
     * @return self
     */
    public function setRenderingState(string $renderingState) : self
    {
        $this->initialized['renderingState'] = true;
        $this->renderingState = $renderingState;
        return $this;
    }
}