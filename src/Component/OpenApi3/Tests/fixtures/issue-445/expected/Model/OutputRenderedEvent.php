<?php

namespace PicturePark\API\Model;

class OutputRenderedEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
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
        $this->renderingState = $renderingState;
        return $this;
    }
}