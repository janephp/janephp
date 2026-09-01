<?php

namespace PicturePark\API\Model;

class ShareDeleteManyRequest
{
    /**
     * IDs of shares to delete.
     *
     * @var list<string>
     */
    public array $ids;
}