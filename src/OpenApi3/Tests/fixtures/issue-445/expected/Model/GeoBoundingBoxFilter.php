<?php

namespace PicturePark\API\Model;

class GeoBoundingBoxFilter
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @var string
    */
    protected $field;
    /**
     * The top left corner of the bounding box's geo location (latitude and longitude).
     *
     * @var mixed
     */
    protected $topLeft;
    /**
     * The bottom right corner of the bounding box's geo location (latitude and longitude).
     *
     * @var mixed
     */
    protected $bottomRight;
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
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @return string
    */
    public function getField() : string
    {
        return $this->field;
    }
    /**
    * The field's name to execute the filter on. It is composed by the field ids of the hierarchy joined with "."
    (i.e. personLayer.address.street).
    *
    * @param string $field
    *
    * @return self
    */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The top left corner of the bounding box's geo location (latitude and longitude).
     *
     * @return mixed
     */
    public function getTopLeft()
    {
        return $this->topLeft;
    }
    /**
     * The top left corner of the bounding box's geo location (latitude and longitude).
     *
     * @param mixed $topLeft
     *
     * @return self
     */
    public function setTopLeft($topLeft) : self
    {
        $this->topLeft = $topLeft;
        return $this;
    }
    /**
     * The bottom right corner of the bounding box's geo location (latitude and longitude).
     *
     * @return mixed
     */
    public function getBottomRight()
    {
        return $this->bottomRight;
    }
    /**
     * The bottom right corner of the bounding box's geo location (latitude and longitude).
     *
     * @param mixed $bottomRight
     *
     * @return self
     */
    public function setBottomRight($bottomRight) : self
    {
        $this->bottomRight = $bottomRight;
        return $this;
    }
}