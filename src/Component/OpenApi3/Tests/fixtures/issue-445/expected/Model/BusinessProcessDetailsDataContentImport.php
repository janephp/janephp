<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessDetailsDataContentImport extends BusinessProcessDetailsDataBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Items that were imported.
     *
     * @var list<ContentImportResult>|null
     */
    protected $items;
    /**
     * Items that were imported.
     *
     * @return list<ContentImportResult>|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     * Items that were imported.
     *
     * @param list<ContentImportResult>|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['items' => ['items', 'getItems', 'setItems']];
    }
}