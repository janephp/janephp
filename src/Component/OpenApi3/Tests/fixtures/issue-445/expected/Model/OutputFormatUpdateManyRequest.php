<?php

namespace PicturePark\API\Model;

class OutputFormatUpdateManyRequest
{
    /**
     * Output format items to be modified.
     *
     * @var OutputFormatUpdateManyRequestItem[]|null
     */
    protected $items;
    /**
     * Output format items to be modified.
     *
     * @return OutputFormatUpdateManyRequestItem[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Output format items to be modified.
     *
     * @param OutputFormatUpdateManyRequestItem[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}