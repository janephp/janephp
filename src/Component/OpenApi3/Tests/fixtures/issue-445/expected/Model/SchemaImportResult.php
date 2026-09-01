<?php

namespace PicturePark\API\Model;

class SchemaImportResult
{
    /**
     * Number of schemas imported
     *
     * @var int
     */
    public int $importedSchemaCount;
    /**
     * Number of schema skipped during import phase because they were already found in the system
     *
     * @var int
     */
    public int $skippedSchemaCount;
    /**
     * Total number of schemas requested to be imported
     *
     * @var int
     */
    public int $totalSchemaCount;
    /**
     * Ids of the schemas that were not imported because already found in the system
     *
     * @var list<string>|null
     */
    public ?array $skippedSchemaIds;
    /**
     * Ids of the schemas that were successfully imported
     *
     * @var list<string>|null
     */
    public ?array $importedSchemaIds;
}