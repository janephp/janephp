<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class GeoBoundingBoxFilter extends FilterBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
     * (i.e. personLayer.address.street).
     *
     * @var string
     */
    public string $field;
    /**
     * The top left corner of the bounding box's geo location (latitude and longitude).
     *
     * @var GeoLocation
     */
    public GeoLocation $topLeft;
    /**
     * The bottom right corner of the bounding box's geo location (latitude and longitude).
     *
     * @var GeoLocation
     */
    public GeoLocation $bottomRight;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'topLeft' => 'topLeft', 'bottomRight' => 'bottomRight'];
    }
}