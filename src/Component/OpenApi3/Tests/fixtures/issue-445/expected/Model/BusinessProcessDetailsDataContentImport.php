<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataContentImport extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Items that were imported.
     *
     * @var list<ContentImportResult>|null
     */
    public ?array $items;
    public function definedProperties(): array
    {
        return ['items' => 'items'];
    }
}