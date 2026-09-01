<?php

namespace PicturePark\API\Model;

class OutputFormatDeleteManyRequest
{
    /**
     * List of IDs of output formats to remove.
     *
     * @var list<string>|null
     */
    public ?array $ids;
}