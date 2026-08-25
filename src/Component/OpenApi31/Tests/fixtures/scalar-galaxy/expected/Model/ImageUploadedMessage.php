<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class ImageUploadedMessage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $message;
    /**
     * The URL where the uploaded image can be accessed
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * Timestamp when the image was uploaded
     *
     * @var \DateTime
     */
    protected $uploadedAt;
    /**
     * Size of the uploaded image in bytes
     *
     * @var int
     */
    protected $fileSize;
    /**
     * The content type of the uploaded image
     *
     * @var string
     */
    protected $mimeType;
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The URL where the uploaded image can be accessed
     *
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
    /**
     * The URL where the uploaded image can be accessed
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl): self
    {
        $this->initialized['imageUrl'] = true;
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * Timestamp when the image was uploaded
     *
     * @return \DateTime
     */
    public function getUploadedAt(): \DateTime
    {
        return $this->uploadedAt;
    }
    /**
     * Timestamp when the image was uploaded
     *
     * @param \DateTime $uploadedAt
     *
     * @return self
     */
    public function setUploadedAt(\DateTime $uploadedAt): self
    {
        $this->initialized['uploadedAt'] = true;
        $this->uploadedAt = $uploadedAt;
        return $this;
    }
    /**
     * Size of the uploaded image in bytes
     *
     * @return int
     */
    public function getFileSize(): int
    {
        return $this->fileSize;
    }
    /**
     * Size of the uploaded image in bytes
     *
     * @param int $fileSize
     *
     * @return self
     */
    public function setFileSize(int $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * The content type of the uploaded image
     *
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }
    /**
     * The content type of the uploaded image
     *
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType(string $mimeType): self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['message' => ['message', 'getMessage', 'setMessage'], 'imageUrl' => ['imageUrl', 'getImageUrl', 'setImageUrl'], 'uploadedAt' => ['uploadedAt', 'getUploadedAt', 'setUploadedAt'], 'fileSize' => ['fileSize', 'getFileSize', 'setFileSize'], 'mimeType' => ['mimeType', 'getMimeType', 'setMimeType']];
    }
}