<?php

namespace PicturePark\API\Model;

class FileMetadata
{
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
}