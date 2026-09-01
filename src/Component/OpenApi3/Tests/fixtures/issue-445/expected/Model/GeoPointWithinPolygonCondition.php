<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class GeoPointWithinPolygonCondition extends BusinessRuleCondition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    public ?string $fieldPath;
    /**
     * List of points that form the polygon for the geo fence.
     * Must include at least 3 points.
     *
     * @var list<LatLon>|null
     */
    public ?array $polygon;
    public function definedProperties(): array
    {
        return ['fieldPath' => 'fieldPath', 'polygon' => 'polygon'];
    }
}