<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class ImageUploadedMessage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $message;
    /**
     * The URL where the uploaded image can be accessed
     *
     * @var string
     */
    public string $imageUrl;
    /**
     * Timestamp when the image was uploaded
     *
     * @var \DateTime
     */
    public \DateTime $uploadedAt;
    /**
     * Size of the uploaded image in bytes
     *
     * @var int
     */
    public int $fileSize;
    /**
     * The content type of the uploaded image
     *
     * @var string
     */
    public string $mimeType;
    public function definedProperties(): array
    {
        return ['message' => 'message', 'imageUrl' => 'imageUrl', 'uploadedAt' => 'uploadedAt', 'fileSize' => 'fileSize', 'mimeType' => 'mimeType'];
    }
}