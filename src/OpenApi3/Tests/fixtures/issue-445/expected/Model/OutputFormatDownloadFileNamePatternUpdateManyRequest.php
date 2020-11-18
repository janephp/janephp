<?php

namespace PicturePark\API\Model;

class OutputFormatDownloadFileNamePatternUpdateManyRequest
{
    /**
     * Download file name update requests to be processed.
     *
     * @var OutputFormatDownloadFileNamePatternUpdateRequestItem[]
     */
    protected $items;
    /**
     * Download file name update requests to be processed.
     *
     * @return OutputFormatDownloadFileNamePatternUpdateRequestItem[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * Download file name update requests to be processed.
     *
     * @param OutputFormatDownloadFileNamePatternUpdateRequestItem[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->items = $items;
        return $this;
    }
}