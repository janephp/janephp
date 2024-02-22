<?php

namespace PicturePark\API\Model;

class OutputFormatDownloadFileNamePatternUpdateManyRequest
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
     * Download file name update requests to be processed.
     *
     * @var list<OutputFormatDownloadFileNamePatternUpdateRequestItem>
     */
    protected $items;
    /**
     * Download file name update requests to be processed.
     *
     * @return list<OutputFormatDownloadFileNamePatternUpdateRequestItem>
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Download file name update requests to be processed.
     *
     * @param list<OutputFormatDownloadFileNamePatternUpdateRequestItem> $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}