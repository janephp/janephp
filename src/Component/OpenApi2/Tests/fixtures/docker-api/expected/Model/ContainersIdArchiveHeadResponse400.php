<?php

namespace Docker\Api\Model;

class ContainersIdArchiveHeadResponse400
{
    /**
     * The error message. Either "must specify path parameter"
     * (path cannot be empty) or "not a directory" (path was
     * asserted to be a directory but exists as a file).
     * 
     *
     * @var string
     */
    public string $message;
}