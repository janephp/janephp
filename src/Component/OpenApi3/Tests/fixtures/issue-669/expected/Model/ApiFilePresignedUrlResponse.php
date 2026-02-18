<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiFilePresignedUrlResponse extends \ArrayObject
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
     * The time the url expires at.
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * The unique object key to store the file as.
     *
     * @var string
     */
    protected $objectKey;
    /**
     * The original file name.
     *
     * @var string
     */
    protected $originalFileName;
    /**
     * The actual presigned URL the client can use to upload the file directly.
     *
     * @var string
     */
    protected $presignedUrl;
    /**
     * The time the url expires at.
     *
     * @return \DateTime
     */
    public function getExpiresAt(): \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * The time the url expires at.
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The unique object key to store the file as.
     *
     * @return string
     */
    public function getObjectKey(): string
    {
        return $this->objectKey;
    }
    /**
     * The unique object key to store the file as.
     *
     * @param string $objectKey
     *
     * @return self
     */
    public function setObjectKey(string $objectKey): self
    {
        $this->initialized['objectKey'] = true;
        $this->objectKey = $objectKey;
        return $this;
    }
    /**
     * The original file name.
     *
     * @return string
     */
    public function getOriginalFileName(): string
    {
        return $this->originalFileName;
    }
    /**
     * The original file name.
     *
     * @param string $originalFileName
     *
     * @return self
     */
    public function setOriginalFileName(string $originalFileName): self
    {
        $this->initialized['originalFileName'] = true;
        $this->originalFileName = $originalFileName;
        return $this;
    }
    /**
     * The actual presigned URL the client can use to upload the file directly.
     *
     * @return string
     */
    public function getPresignedUrl(): string
    {
        return $this->presignedUrl;
    }
    /**
     * The actual presigned URL the client can use to upload the file directly.
     *
     * @param string $presignedUrl
     *
     * @return self
     */
    public function setPresignedUrl(string $presignedUrl): self
    {
        $this->initialized['presignedUrl'] = true;
        $this->presignedUrl = $presignedUrl;
        return $this;
    }
}