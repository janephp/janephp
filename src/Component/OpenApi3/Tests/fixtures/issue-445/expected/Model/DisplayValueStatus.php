<?php

namespace PicturePark\API\Model;

class DisplayValueStatus
{
    /**
     * The schema ids (of type Content or Layer) for which the re-rendering of the display values is needed.
     *
     * @var list<string>|null
     */
    public ?array $contentOrLayerSchemaIds;
    /**
     * The schema ids (of type List) for which the re-rendering of the display values is needed.
     *
     * @var list<string>|null
     */
    public ?array $listSchemaIds;
    /**
     * The state of the display values compared to the schema structure (UpToDate = ok, Outdated = re-rendering needed).
     *
     * @var string
     */
    public string $state;
}