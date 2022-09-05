<?php

namespace PicturePark\API\Model;

class GeoPointWithinPolygonCondition extends BusinessRuleCondition
{
    /**
     * JSON path to the field
     *
     * @var string|null
     */
    protected $fieldPath;
    /**
    * List of points that form the polygon for the geo fence.
    Must include at least 3 points.
    *
    * @var LatLon[]|null
    */
    protected $polygon;
    /**
     * JSON path to the field
     *
     * @return string|null
     */
    public function getFieldPath() : ?string
    {
        return $this->fieldPath;
    }
    /**
     * JSON path to the field
     *
     * @param string|null $fieldPath
     *
     * @return self
     */
    public function setFieldPath(?string $fieldPath) : self
    {
        $this->fieldPath = $fieldPath;
        return $this;
    }
    /**
    * List of points that form the polygon for the geo fence.
    Must include at least 3 points.
    *
    * @return LatLon[]|null
    */
    public function getPolygon() : ?array
    {
        return $this->polygon;
    }
    /**
    * List of points that form the polygon for the geo fence.
    Must include at least 3 points.
    *
    * @param LatLon[]|null $polygon
    *
    * @return self
    */
    public function setPolygon(?array $polygon) : self
    {
        $this->polygon = $polygon;
        return $this;
    }
}