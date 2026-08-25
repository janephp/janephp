<?php

namespace PicturePark\API\Model;

class OutputFormatRenderingSpecification
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Which output format should be used as a source of data.
     *
     * @var SourceOutputFormats|null
     */
    protected $sourceOutputFormats;
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @var FormatBase|null
     */
    protected $format;
    /**
     * Which output format should be used as a source of data.
     *
     * @return SourceOutputFormats|null
     */
    public function getSourceOutputFormats(): ?SourceOutputFormats
    {
        return $this->sourceOutputFormats;
    }
    /**
     * Which output format should be used as a source of data.
     *
     * @param SourceOutputFormats|null $sourceOutputFormats
     *
     * @return self
     */
    public function setSourceOutputFormats(?SourceOutputFormats $sourceOutputFormats): self
    {
        $this->initialized['sourceOutputFormats'] = true;
        $this->sourceOutputFormats = $sourceOutputFormats;
        return $this;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @return FormatBase|null
     */
    public function getFormat(): ?FormatBase
    {
        return $this->format;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @param FormatBase|null $format
     *
     * @return self
     */
    public function setFormat(?FormatBase $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
}