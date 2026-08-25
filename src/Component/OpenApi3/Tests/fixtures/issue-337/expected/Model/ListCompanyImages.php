<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImages implements AdditionalPropertiesInterface
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
    protected $totalSize;
    /**
     * @var list<ListCompanyImagesDataItem>
     */
    protected $data;
    /**
     * @return int
     */
    public function getTotalSize(): int
    {
        return $this->totalSize;
    }
    /**
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize): self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * @return list<ListCompanyImagesDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<ListCompanyImagesDataItem> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalSize' => ['totalSize', 'getTotalSize', 'setTotalSize'], 'data' => ['data', 'getData', 'setData']];
    }
}