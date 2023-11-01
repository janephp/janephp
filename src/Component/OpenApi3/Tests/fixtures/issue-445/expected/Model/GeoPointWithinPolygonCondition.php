<?php

namespace PicturePark\API\Model;

class GeoPointWithinPolygonCondition extends BusinessRuleCondition
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
        $this->initialized['fieldPath'] = true;
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
        $this->initialized['polygon'] = true;
        $this->polygon = $polygon;
        return $this;
    }
}