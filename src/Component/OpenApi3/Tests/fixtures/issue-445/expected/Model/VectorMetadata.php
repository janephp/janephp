<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class VectorMetadata implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    public ?string $author;
    /**
     * @var string|null
     */
    public ?string $creator;
    /**
     * @var string|null
     */
    public ?string $publisher;
    /**
     * @var string|null
     */
    public ?string $company;
    /**
     * @var string|null
     */
    public ?string $title;
    /**
     * @var int
     */
    public int $pageCount;
    /**
     * @var EpsMetadata|null
     */
    public ?EpsMetadata $epsInfo;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'descriptions' => 'descriptions', 'fileExtension' => 'fileExtension', 'fileName' => 'fileName', 'filePath' => 'filePath', 'fileSizeInBytes' => 'fileSizeInBytes', 'sha1Hash' => 'sha1Hash', 'xmpMetadata' => 'xmpMetadata', 'exifMetadata' => 'exifMetadata', 'language' => 'language', 'author' => 'author', 'creator' => 'creator', 'publisher' => 'publisher', 'company' => 'company', 'title' => 'title', 'pageCount' => 'pageCount', 'epsInfo' => 'epsInfo'];
    }
}