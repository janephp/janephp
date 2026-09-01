<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class DocumentMetadata implements AdditionalPropertiesInterface
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
    public ?string $applicationName;
    /**
     * @var string|null
     */
    public ?string $applicationVersion;
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
    public ?string $documentTitle;
    /**
     * @var int
     */
    public int $characterCount;
    /**
     * @var int
     */
    public int $characterCountWithSpaces;
    /**
     * @var int
     */
    public int $lineCount;
    /**
     * @var int
     */
    public int $pageCount;
    /**
     * @var int
     */
    public int $slideCount;
    /**
     * @var int
     */
    public int $paragraphCount;
    /**
     * @var int
     */
    public int $revisionNumber;
    /**
     * @var list<string>|null
     */
    public ?array $titles;
    /**
     * @var list<string>|null
     */
    public ?array $imageTitles;
    /**
     * @var EpsMetadata|null
     */
    public ?EpsMetadata $epsInfo;
    public function definedProperties(): array
    {
        return ['names' => 'names', 'descriptions' => 'descriptions', 'fileExtension' => 'fileExtension', 'fileName' => 'fileName', 'filePath' => 'filePath', 'fileSizeInBytes' => 'fileSizeInBytes', 'sha1Hash' => 'sha1Hash', 'xmpMetadata' => 'xmpMetadata', 'exifMetadata' => 'exifMetadata', 'language' => 'language', 'applicationName' => 'applicationName', 'applicationVersion' => 'applicationVersion', 'author' => 'author', 'creator' => 'creator', 'publisher' => 'publisher', 'company' => 'company', 'documentTitle' => 'documentTitle', 'characterCount' => 'characterCount', 'characterCountWithSpaces' => 'characterCountWithSpaces', 'lineCount' => 'lineCount', 'pageCount' => 'pageCount', 'slideCount' => 'slideCount', 'paragraphCount' => 'paragraphCount', 'revisionNumber' => 'revisionNumber', 'titles' => 'titles', 'imageTitles' => 'imageTitles', 'epsInfo' => 'epsInfo'];
    }
}