<?php

namespace PicturePark\API\Model;

class GeoPointWithinPolygonCondition extends BusinessRuleCondition
{
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @var string|null
     */
    protected $traceRefId;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @return string|null
     */
    public function getTraceRefId() : ?string
    {
        return $this->traceRefId;
    }
    /**
     * Optional trace log reference ID set by the system when EnableTracing is set to true on the associated rule.
     *
     * @param string|null $traceRefId
     *
     * @return self
     */
    public function setTraceRefId(?string $traceRefId) : self
    {
        $this->traceRefId = $traceRefId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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