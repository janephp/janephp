<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ImageMetadata implements AdditionalPropertiesInterface
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
     * @var int
     */
    public int $width;
    /**
     * @var int
     */
    public int $height;
    /**
     * @var float
     */
    public float $widthInInch;
    /**
     * @var float
     */
    public float $heightInInch;
    /**
     * @var float
     */
    public float $widthInCm;
    /**
     * @var float
     */
    public float $heightInCm;
    /**
     * @var string|null
     */
    public ?string $colorSpace;
    /**
     * @var string|null
     */
    public ?string $colorProfile;
    /**
     * @var int
     */
    public int $bitsPerPixel;
    /**
     * @var int
     */
    public int $bitsPerChannel;
    /**
     * @var string|null
     */
    public ?string $channels;
    /**
     * @var string|null
     */
    public ?string $pixelFormat;
    /**
     * @var bool
     */
    public bool $hasAlpha;
    /**
     * @var bool
     */
    public bool $isIndexed;
    /**
     * @var bool
     */
    public bool $isExtended;
    /**
     * @var float
     */
    public float $horizontalResolution;
    /**
     * @var float
     */
    public float $verticalResolution;
    /**
     * @var int
     */
    public int $totalFrames;
    /**
     * @var int
     */
    public int $totalUnspecifiedTiffExtraChannels;
    /**
     * @var bool
     */
    public bool $hasExifData;
    /**
     * @var bool
     */
    public bool $hasIptcData;
    /**
     * @var bool
     */
    public bool $hasAdobeResourceData;
    /**
     * @var bool
     */
    public bool $hasXmpData;
    /**
     * @var int
     */
    public int $uncompressedSizeInBytes;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'descriptions' => 'descriptions', 'fileExtension' => 'fileExtension', 'fileName' => 'fileName', 'filePath' => 'filePath', 'fileSizeInBytes' => 'fileSizeInBytes', 'sha1Hash' => 'sha1Hash', 'xmpMetadata' => 'xmpMetadata', 'exifMetadata' => 'exifMetadata', 'language' => 'language', 'width' => 'width', 'height' => 'height', 'widthInInch' => 'widthInInch', 'heightInInch' => 'heightInInch', 'widthInCm' => 'widthInCm', 'heightInCm' => 'heightInCm', 'colorSpace' => 'colorSpace', 'colorProfile' => 'colorProfile', 'bitsPerPixel' => 'bitsPerPixel', 'bitsPerChannel' => 'bitsPerChannel', 'channels' => 'channels', 'pixelFormat' => 'pixelFormat', 'hasAlpha' => 'hasAlpha', 'isIndexed' => 'isIndexed', 'isExtended' => 'isExtended', 'horizontalResolution' => 'horizontalResolution', 'verticalResolution' => 'verticalResolution', 'totalFrames' => 'totalFrames', 'totalUnspecifiedTiffExtraChannels' => 'totalUnspecifiedTiffExtraChannels', 'hasExifData' => 'hasExifData', 'hasIptcData' => 'hasIptcData', 'hasAdobeResourceData' => 'hasAdobeResourceData', 'hasXmpData' => 'hasXmpData', 'uncompressedSizeInBytes' => 'uncompressedSizeInBytes'];
    }
}