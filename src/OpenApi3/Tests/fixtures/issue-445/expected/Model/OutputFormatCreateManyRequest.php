<?php

namespace PicturePark\API\Model;

class OutputFormatCreateManyRequest
{
    /**
     * Output format items to be created.
     *
     * @var OutputFormat[]|null
     */
    protected $items;
    /**
     * Output format items to be created.
     *
     * @return OutputFormat[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Output format items to be created.
     *
     * @param OutputFormat[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}