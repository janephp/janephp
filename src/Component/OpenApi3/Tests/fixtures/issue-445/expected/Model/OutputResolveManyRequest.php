<?php

namespace PicturePark\API\Model;

class OutputResolveManyRequest
{
    /**
     * The IDs of the contents whose outputs should to be retrieved.
     *
     * @var list<string>
     */
    public array $contentIds;
}