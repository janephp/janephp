<?php

namespace PicturePark\API\Model;

class SortInfo
{
    /**
     * The field's ID to sort on.
     *
     * @var string|null
     */
    protected $field;
    /**
     * The sort direction (ascending/descending).
     *
     * @var mixed
     */
    protected $direction;
    /**
     * The field's ID to sort on.
     *
     * @return string|null
     */
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * The field's ID to sort on.
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * The sort direction (ascending/descending).
     *
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * The sort direction (ascending/descending).
     *
     * @param mixed $direction
     *
     * @return self
     */
    public function setDirection($direction) : self
    {
        $this->direction = $direction;
        return $this;
    }
}