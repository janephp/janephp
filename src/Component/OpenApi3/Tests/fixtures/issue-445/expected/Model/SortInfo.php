<?php

namespace PicturePark\API\Model;

class SortInfo
{
    /**
     * The field's ID to sort on.
     *
     * @var string|null
     */
    public ?string $field;
    /**
     * The sort direction (ascending/descending).
     *
     * @var string
     */
    public string $direction;
}