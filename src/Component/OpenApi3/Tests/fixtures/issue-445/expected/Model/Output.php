<?php

namespace PicturePark\API\Model;

class Output
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
     */
    public function setId(?string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
     */
    public function setOutputFormatId(string $outputFormatId)
    {
        $this->initialized['outputFormatId'] = true;
        $this->outputFormatId = $outputFormatId;
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
     */
    public function setContentId(string $contentId)
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
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
     */
    public function setRenderingState($renderingState)
    {
        $this->initialized['renderingState'] = true;
        $this->renderingState = $renderingState;
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
     */
    public function setDetail($detail)
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;
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
     */
    public function setBackupTimestamp(?\DateTime $backupTimestamp)
    {
        $this->initialized['backupTimestamp'] = true;
        $this->backupTimestamp = $backupTimestamp;
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
     */
    public function setAttemptsLeft(int $attemptsLeft)
    {
        $this->initialized['attemptsLeft'] = true;
        $this->attemptsLeft = $attemptsLeft;
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
     */
    public function setFileVersion(int $fileVersion)
    {
        $this->initialized['fileVersion'] = true;
        $this->fileVersion = $fileVersion;
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
     */
    public function setDynamicRendering(bool $dynamicRendering)
    {
        $this->initialized['dynamicRendering'] = true;
        $this->dynamicRendering = $dynamicRendering;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}