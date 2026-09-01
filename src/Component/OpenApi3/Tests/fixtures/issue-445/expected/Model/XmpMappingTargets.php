<?php

namespace PicturePark\API\Model;

class XmpMappingTargets
{
    /**
     * Fields in XMP/Exif.
     *
     * @var list<XmpField>
     */
    public array $xmpFields;
    /**
     * Fields in metadata.
     *
     * @var list<MetadataField>
     */
    public array $metadataFields;
}