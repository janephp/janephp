<?php

namespace PicturePark\API\Model;

class XmpMappingTargets
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Fields in XMP/Exif.
     *
     * @var XmpField[]
     */
    protected $xmpFields;
    /**
     * Fields in metadata.
     *
     * @var MetadataField[]
     */
    protected $metadataFields;
    /**
     * Fields in XMP/Exif.
     *
     * @return XmpField[]
     */
    public function getXmpFields() : array
    {
        return $this->xmpFields;
    }
    /**
     * Fields in XMP/Exif.
     *
     * @param XmpField[] $xmpFields
     *
     * @return self
     */
    public function setXmpFields(array $xmpFields) : self
    {
        $this->initialized['xmpFields'] = true;
        $this->xmpFields = $xmpFields;
        return $this;
    }
    /**
     * Fields in metadata.
     *
     * @return MetadataField[]
     */
    public function getMetadataFields() : array
    {
        return $this->metadataFields;
    }
    /**
     * Fields in metadata.
     *
     * @param MetadataField[] $metadataFields
     *
     * @return self
     */
    public function setMetadataFields(array $metadataFields) : self
    {
        $this->initialized['metadataFields'] = true;
        $this->metadataFields = $metadataFields;
        return $this;
    }
}