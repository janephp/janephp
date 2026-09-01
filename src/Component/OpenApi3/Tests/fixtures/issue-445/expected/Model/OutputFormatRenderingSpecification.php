<?php

namespace PicturePark\API\Model;

class OutputFormatRenderingSpecification
{
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
}