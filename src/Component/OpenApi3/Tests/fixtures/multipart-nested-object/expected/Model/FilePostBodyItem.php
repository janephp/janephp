<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class FilePostBodyItem extends \ArrayObject
{
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
}