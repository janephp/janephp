<?php

namespace PicturePark\API\Model;

class SchemaImportRequest
{
    /**
     * ID of the file transfer identifying the file previously uploaded.
     *
     * @var string
     */
    public string $fileTransferId;
    /**
     * Allow creating list items that refer to list items or contents that don't exist in the system.
     *
     * @var bool
     */
    public bool $allowMissingDependencies;
    /**
     * Import the list items belonging to the schema.
     *
     * @var bool
     */
    public bool $importListItems;
}