<?php

namespace PicturePark\API\Model;

class BulkResponse
{
    /**
     * Rows of the bulk response.
     *
     * @var list<BulkResponseRow>|null
     */
    public ?array $rows;
}