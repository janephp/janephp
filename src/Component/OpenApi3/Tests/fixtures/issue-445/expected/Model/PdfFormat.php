<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class PdfFormat extends FormatBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Specifies compression quality used for ReduceFileSize.
     *
     * @var int
     */
    public int $jpegQuality;
    /**
     * Whether to linearize the output for fast web viewing.
     *
     * @var bool
     */
    public bool $fastWebView;
    /**
     * Whether to apply measures to decrease output size or not.
     *
     * @var bool
     */
    public bool $reduceFileSize;
    /**
     * @var string|null
     */
    public ?string $extension;
    /**
     * Whether to extract document full text from this output.
     *
     * @var bool
     */
    public bool $extractFullText;
    public function definedProperties(): array
    {
        return ['jpegQuality' => 'jpegQuality', 'fastWebView' => 'fastWebView', 'reduceFileSize' => 'reduceFileSize', 'extension' => 'extension', 'extractFullText' => 'extractFullText'];
    }
}