<?php

namespace PicturePark\API\Model;

class OutputFormatUpdateManyRequestItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * ID of the output format to modify.
     *
     * @var string|null
     */
    protected $id;
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
        $this->initialized['sourceOutputFormats'] = true;
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
        $this->initialized['format'] = true;
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
        $this->initialized['names'] = true;
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
        $this->initialized['retentionTime'] = true;
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
        $this->initialized['downloadFileNamePatterns'] = true;
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
        $this->initialized['viewForAll'] = true;
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
        $this->initialized['enableXmpWriteback'] = true;
        $this->enableXmpWriteback = $enableXmpWriteback;
        return $this;
    }
    /**
     * ID of the output format to modify.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * ID of the output format to modify.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}