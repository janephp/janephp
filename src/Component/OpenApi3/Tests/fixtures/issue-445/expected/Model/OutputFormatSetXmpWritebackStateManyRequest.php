<?php

namespace PicturePark\API\Model;

class OutputFormatSetXmpWritebackStateManyRequest
{
    /**
     * XMP writeback state changes to be processed.
     *
     * @var list<OutputFormatSetXmpWritebackStateRequestItem>|null
     */
    public ?array $items;
}