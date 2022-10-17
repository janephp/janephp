<?php

namespace PicturePark\API\Model;

class OutputFormat extends \ArrayObject
{
    /**
     * Which output format should be used as a source of data.
     *
     * @var mixed|null
     */
    protected $sourceOutputFormats;
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @var mixed|null
     */
    protected $format;
    /**
     * Language specific names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @var string
     */
    protected $retentionTime;
    /**
    * Optional patterns (liquid syntax) that produce the filename for item of this output format.
    If set, the customer's default language is required.
    *
    * @var mixed|null
    */
    protected $downloadFileNamePatterns;
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @var bool
     */
    protected $viewForAll;
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @var bool
     */
    protected $enableXmpWriteback;
    /**
     * Output format ID.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Marks if this is a system output format.
     *
     * @var bool
     */
    protected $system;
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @var bool
     */
    protected $dynamic;
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @var bool
     */
    protected $dataExtraction;
    /**
     * Temporary outputs will not be backed up.
     *
     * @var bool
     */
    protected $temporary;
    /**
     * Which output format should be used as a source of data.
     *
     * @return mixed
     */
    public function getSourceOutputFormats()
    {
        return $this->sourceOutputFormats;
    }
    /**
     * Which output format should be used as a source of data.
     *
     * @param mixed $sourceOutputFormats
     *
     * @return self
     */
    public function setSourceOutputFormats($sourceOutputFormats) : self
    {
        $this->sourceOutputFormats = $sourceOutputFormats;
        return $this;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * Information about the technical format of the data, e.g. JPEG, AAC or video still.
     *
     * @param mixed $format
     *
     * @return self
     */
    public function setFormat($format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * Language specific names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @return string
     */
    public function getRetentionTime() : string
    {
        return $this->retentionTime;
    }
    /**
     * How long should the dynamic outputs created from this format be kept.
     *
     * @param string $retentionTime
     *
     * @return self
     */
    public function setRetentionTime(string $retentionTime) : self
    {
        $this->retentionTime = $retentionTime;
        return $this;
    }
    /**
    * Optional patterns (liquid syntax) that produce the filename for item of this output format.
    If set, the customer's default language is required.
    *
    * @return mixed
    */
    public function getDownloadFileNamePatterns()
    {
        return $this->downloadFileNamePatterns;
    }
    /**
    * Optional patterns (liquid syntax) that produce the filename for item of this output format.
    If set, the customer's default language is required.
    *
    * @param mixed $downloadFileNamePatterns
    *
    * @return self
    */
    public function setDownloadFileNamePatterns($downloadFileNamePatterns) : self
    {
        $this->downloadFileNamePatterns = $downloadFileNamePatterns;
        return $this;
    }
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @return bool
     */
    public function getViewForAll() : bool
    {
        return $this->viewForAll;
    }
    /**
     * Indicates if outputs derived from original output format should be accessible also for users not having AccessOriginal permission on the content.
     *
     * @param bool $viewForAll
     *
     * @return self
     */
    public function setViewForAll(bool $viewForAll) : self
    {
        $this->viewForAll = $viewForAll;
        return $this;
    }
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @return bool
     */
    public function getEnableXmpWriteback() : bool
    {
        return $this->enableXmpWriteback;
    }
    /**
     * Indicates if metadata should be written into XMP header of outputs where applicable and configured.
     *
     * @param bool $enableXmpWriteback
     *
     * @return self
     */
    public function setEnableXmpWriteback(bool $enableXmpWriteback) : self
    {
        $this->enableXmpWriteback = $enableXmpWriteback;
        return $this;
    }
    /**
     * Output format ID.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Output format ID.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Marks if this is a system output format.
     *
     * @return bool
     */
    public function getSystem() : bool
    {
        return $this->system;
    }
    /**
     * Marks if this is a system output format.
     *
     * @param bool $system
     *
     * @return self
     */
    public function setSystem(bool $system) : self
    {
        $this->system = $system;
        return $this;
    }
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @return bool
     */
    public function getDynamic() : bool
    {
        return $this->dynamic;
    }
    /**
     * A dynamic output format is not rendered automatically, but only on demand.
     *
     * @param bool $dynamic
     *
     * @return self
     */
    public function setDynamic(bool $dynamic) : self
    {
        $this->dynamic = $dynamic;
        return $this;
    }
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @return bool
     */
    public function getDataExtraction() : bool
    {
        return $this->dataExtraction;
    }
    /**
     * Specifies if output format should be taken into account during data extraction.
     *
     * @param bool $dataExtraction
     *
     * @return self
     */
    public function setDataExtraction(bool $dataExtraction) : self
    {
        $this->dataExtraction = $dataExtraction;
        return $this;
    }
    /**
     * Temporary outputs will not be backed up.
     *
     * @return bool
     */
    public function getTemporary() : bool
    {
        return $this->temporary;
    }
    /**
     * Temporary outputs will not be backed up.
     *
     * @param bool $temporary
     *
     * @return self
     */
    public function setTemporary(bool $temporary) : self
    {
        $this->temporary = $temporary;
        return $this;
    }
}