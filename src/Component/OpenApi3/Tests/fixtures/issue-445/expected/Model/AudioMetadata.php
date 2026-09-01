<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class AudioMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $names;
    /**
     * @var array<string, string>|null
     */
    public ?iterable $descriptions;
    /**
     * @var string|null
     */
    public ?string $fileExtension;
    /**
     * @var string|null
     */
    public ?string $fileName;
    /**
     * @var string|null
     */
    public ?string $filePath;
    /**
     * @var int|null
     */
    public ?int $fileSizeInBytes;
    /**
     * @var string|null
     */
    public ?string $sha1Hash;
    /**
     * @var mixed|null
     */
    public $xmpMetadata;
    /**
     * @var mixed|null
     */
    public $exifMetadata;
    /**
     * @var string|null
     */
    public ?string $language;
    /**
     * @var list<AudioStream>|null
     */
    public ?array $audioStreams;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'descriptions' => 'descriptions', 'fileExtension' => 'fileExtension', 'fileName' => 'fileName', 'filePath' => 'filePath', 'fileSizeInBytes' => 'fileSizeInBytes', 'sha1Hash' => 'sha1Hash', 'xmpMetadata' => 'xmpMetadata', 'exifMetadata' => 'exifMetadata', 'language' => 'language', 'audioStreams' => 'audioStreams'];
    }
}