<?php

namespace PicturePark\API\Model;

class SortField
{
    /**
     * The path of the field ({schemaId}.{fieldId})
     *
     * @var string
     */
    public string $path;
    /**
     * The translated name of the field to be shown in the UI.
     *
     * @var array<string, string>
     */
    public iterable $names;
}