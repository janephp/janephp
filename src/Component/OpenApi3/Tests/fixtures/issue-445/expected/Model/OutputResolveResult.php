<?php

namespace PicturePark\API\Model;

class OutputResolveResult
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
     * ID of output.
     *
     * @var string|null
     */
    protected $id;
    /**
     * ID of output format.
     *
     * @var string
     */
    protected $outputFormatId;
    /**
     * ID of content.
     *
     * @var string
     */
    protected $contentId;
    /**
     * Rendering state of output.
     *
     * @var mixed
     */
    protected $renderingState;
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @var bool
     */
    protected $dynamicRendering;
    /**
     * Size of file, if already known
     *
     * @var int|null
     */
    protected $fileSize;
    /**
     * ID of output.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * ID of output.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * ID of output format.
     *
     * @return string
     */
    public function getOutputFormatId(): string
    {
        return $this->outputFormatId;
    }
    /**
     * ID of output format.
     *
     * @param string $outputFormatId
     *
     * @return self
     */
    public function setOutputFormatId(string $outputFormatId): self
    {
        $this->initialized['outputFormatId'] = true;
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
    /**
     * ID of content.
     *
     * @return string
     */
    public function getContentId(): string
    {
        return $this->contentId;
    }
    /**
     * ID of content.
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId): self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * Rendering state of output.
     *
     * @return mixed
     */
    public function getRenderingState()
    {
        return $this->renderingState;
    }
    /**
     * Rendering state of output.
     *
     * @param mixed $renderingState
     *
     * @return self
     */
    public function setRenderingState($renderingState): self
    {
        $this->initialized['renderingState'] = true;
        $this->renderingState = $renderingState;
        return $this;
    }
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @return bool
     */
    public function getDynamicRendering(): bool
    {
        return $this->dynamicRendering;
    }
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @param bool $dynamicRendering
     *
     * @return self
     */
    public function setDynamicRendering(bool $dynamicRendering): self
    {
        $this->initialized['dynamicRendering'] = true;
        $this->dynamicRendering = $dynamicRendering;
        return $this;
    }
    /**
     * Size of file, if already known
     *
     * @return int|null
     */
    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
    /**
     * Size of file, if already known
     *
     * @param int|null $fileSize
     *
     * @return self
     */
    public function setFileSize(?int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
}