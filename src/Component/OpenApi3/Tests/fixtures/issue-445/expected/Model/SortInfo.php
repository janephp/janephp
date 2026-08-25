<?php

namespace PicturePark\API\Model;

class SortInfo
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The field's ID to sort on.
     *
     * @var string|null
     */
    protected $field;
    /**
     * The sort direction (ascending/descending).
     *
     * @var string
     */
    protected $direction;
    /**
     * The field's ID to sort on.
     *
     * @return string|null
     */
    public function getField(): ?string
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
    public function setField(?string $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
    /**
     * The sort direction (ascending/descending).
     *
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
    /**
     * The sort direction (ascending/descending).
     *
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->initialized['direction'] = true;
        $this->direction = $direction;
        return $this;
    }
}