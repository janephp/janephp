<?php

namespace PicturePark\API\Model;

class ContentImportResult
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
     * ID of the file transfer.
     *
     * @var string
     */
    protected $fileTransferId;
    /**
     * ID of the resulting content.
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * State of the item.
     *
     * @var string|null
     */
    protected $state;
    /**
     * Indicates if the operation succeeded.
     *
     * @var bool
     */
    protected $succeeded;
    /**
     * If the operation did not succeeded, this contains error related information.
     *
     * @var mixed|null
     */
    protected $error;
    /**
     * ID of the file transfer.
     *
     * @return string
     */
    public function getFileTransferId(): string
    {
        return $this->fileTransferId;
    }
    /**
     * ID of the file transfer.
     *
     * @param string $fileTransferId
     *
     * @return self
     */
    public function setFileTransferId(string $fileTransferId): self
    {
        $this->initialized['fileTransferId'] = true;
        $this->fileTransferId = $fileTransferId;
        return $this;
    }
    /**
     * ID of the resulting content.
     *
     * @return string|null
     */
    public function getContentId(): ?string
    {
        return $this->contentId;
    }
    /**
     * ID of the resulting content.
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId): self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * State of the item.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * State of the item.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Indicates if the operation succeeded.
     *
     * @return bool
     */
    public function getSucceeded(): bool
    {
        return $this->succeeded;
    }
    /**
     * Indicates if the operation succeeded.
     *
     * @param bool $succeeded
     *
     * @return self
     */
    public function setSucceeded(bool $succeeded): self
    {
        $this->initialized['succeeded'] = true;
        $this->succeeded = $succeeded;
        return $this;
    }
    /**
     * If the operation did not succeeded, this contains error related information.
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * If the operation did not succeeded, this contains error related information.
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}