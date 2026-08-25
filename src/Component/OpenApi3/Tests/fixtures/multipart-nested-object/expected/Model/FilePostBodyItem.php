<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class FilePostBodyItem implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $itemId;
    /**
     * @var string
     */
    protected $itemType;
    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }
    /**
     * @param int $itemId
     *
     * @return self
     */
    public function setItemId(int $itemId): self
    {
        $this->initialized['itemId'] = true;
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * @return string
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }
    /**
     * @param string $itemType
     *
     * @return self
     */
    public function setItemType(string $itemType): self
    {
        $this->initialized['itemType'] = true;
        $this->itemType = $itemType;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['itemId' => ['itemId', 'getItemId', 'setItemId'], 'itemType' => ['itemType', 'getItemType', 'setItemType']];
    }
}