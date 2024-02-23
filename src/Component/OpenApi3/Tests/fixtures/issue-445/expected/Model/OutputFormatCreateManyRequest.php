<?php

namespace PicturePark\API\Model;

class OutputFormatCreateManyRequest
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
     * Output format items to be created.
     *
     * @var list<OutputFormat>|null
     */
    protected $items;
    /**
     * Output format items to be created.
     *
     * @return list<OutputFormat>|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * Output format items to be created.
     *
     * @param list<OutputFormat>|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}