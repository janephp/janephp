<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class GeoDistanceFilter extends FilterBase implements AdditionalPropertiesInterface
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
     * The point of origin to calculate the distance from (latitude/longitude).
     *
     * @var GeoLocation
     */
    public GeoLocation $location;
    /**
     * The distance in meters from the point of origin.
     *
     * @var float
     */
    public float $distance;
    public function definedProperties(): array
    {
        return ['field' => 'field', 'location' => 'location', 'distance' => 'distance'];
    }
}