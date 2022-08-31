<?php

namespace PicturePark\API\Model;

class OutputDetail extends Output
{
    /**
     * The ID of the output. Can be null for dynamic outputs which are not rendered yet.
     *
     * @var string|null
     */
    protected $id;
    /**
     * The ID of the output format this output represents.
     *
     * @var string
     */
    protected $outputFormatId;
    /**
     * The ID of the content for which this output has been created.
     *
     * @var string
     */
    protected $contentId;
    /**
     * The rendering state of the output file.
     *
     * @var mixed
     */
    protected $renderingState;
    /**
     * Detail of the output that are format dependent.
     *
     * @var mixed|null
     */
    protected $detail;
    /**
     * Date and time of the backup of the output file.
     *
     * @var \DateTime|null
     */
    protected $backupTimestamp;
    /**
     * Number of rendering retry attempts left.
     *
     * @var int
     */
    protected $attemptsLeft;
    /**
     * Version counter incremented every time this output is rendered (or in case of Original when new original is uploaded).
     *
     * @var int
     */
    protected $fileVersion;
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @var bool
     */
    protected $dynamicRendering;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The ID of the output. Can be null for dynamic outputs which are not rendered yet.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The ID of the output. Can be null for dynamic outputs which are not rendered yet.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The ID of the output format this output represents.
     *
     * @return string
     */
    public function getOutputFormatId() : string
    {
        return $this->outputFormatId;
    }
    /**
     * The ID of the output format this output represents.
     *
     * @param string $outputFormatId
     *
     * @return self
     */
    public function setOutputFormatId(string $outputFormatId) : self
    {
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
    /**
     * The ID of the content for which this output has been created.
     *
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }
    /**
     * The ID of the content for which this output has been created.
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * The rendering state of the output file.
     *
     * @return mixed
     */
    public function getRenderingState()
    {
        return $this->renderingState;
    }
    /**
     * The rendering state of the output file.
     *
     * @param mixed $renderingState
     *
     * @return self
     */
    public function setRenderingState($renderingState) : self
    {
        $this->renderingState = $renderingState;
        return $this;
    }
    /**
     * Detail of the output that are format dependent.
     *
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }
    /**
     * Detail of the output that are format dependent.
     *
     * @param mixed $detail
     *
     * @return self
     */
    public function setDetail($detail) : self
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     * Date and time of the backup of the output file.
     *
     * @return \DateTime|null
     */
    public function getBackupTimestamp() : ?\DateTime
    {
        return $this->backupTimestamp;
    }
    /**
     * Date and time of the backup of the output file.
     *
     * @param \DateTime|null $backupTimestamp
     *
     * @return self
     */
    public function setBackupTimestamp(?\DateTime $backupTimestamp) : self
    {
        $this->backupTimestamp = $backupTimestamp;
        return $this;
    }
    /**
     * Number of rendering retry attempts left.
     *
     * @return int
     */
    public function getAttemptsLeft() : int
    {
        return $this->attemptsLeft;
    }
    /**
     * Number of rendering retry attempts left.
     *
     * @param int $attemptsLeft
     *
     * @return self
     */
    public function setAttemptsLeft(int $attemptsLeft) : self
    {
        $this->attemptsLeft = $attemptsLeft;
        return $this;
    }
    /**
     * Version counter incremented every time this output is rendered (or in case of Original when new original is uploaded).
     *
     * @return int
     */
    public function getFileVersion() : int
    {
        return $this->fileVersion;
    }
    /**
     * Version counter incremented every time this output is rendered (or in case of Original when new original is uploaded).
     *
     * @param int $fileVersion
     *
     * @return self
     */
    public function setFileVersion(int $fileVersion) : self
    {
        $this->fileVersion = $fileVersion;
        return $this;
    }
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @return bool
     */
    public function getDynamicRendering() : bool
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
    public function setDynamicRendering(bool $dynamicRendering) : self
    {
        $this->dynamicRendering = $dynamicRendering;
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
}