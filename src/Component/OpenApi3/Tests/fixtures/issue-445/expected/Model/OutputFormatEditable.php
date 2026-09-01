<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class OutputFormatEditable implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Which output format should be used as a source of data.
     *
     * @var SourceOutputFormats|null
     */
    public ?SourceOutputFormats $sourceOutputFormats;
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @var FormatBase|null
     */
    public ?FormatBase $format;
    /**
     * Language specific names.
     *
     * @var array<string, string>
     */
    public iterable $names;
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @var string
     */
    public string $retentionTime;
    /**
     * Optional patterns (liquid syntax) that produce the filename for item of this output format.
     * If set, the customer's default language is required.
     *
     * @var array<string, string>|null
     */
    public ?iterable $downloadFileNamePatterns;
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @var bool
     */
    public bool $viewForAll;
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @var bool
     */
    public bool $enableXmpWriteback;
    public function definedProperties(): array
    {
        return ['sourceOutputFormats' => 'sourceOutputFormats', 'format' => 'format', 'names' => 'names', 'retentionTime' => 'retentionTime', 'downloadFileNamePatterns' => 'downloadFileNamePatterns', 'viewForAll' => 'viewForAll', 'enableXmpWriteback' => 'enableXmpWriteback'];
    }
}