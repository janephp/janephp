<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class StatsGetResponse200 implements AdditionalPropertiesInterface
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
    protected $booksCount;
    /**
     * @var int
     */
    protected $topbooksCount;
    /**
     * @return int
     */
    public function getBooksCount(): int
    {
        return $this->booksCount;
    }
    /**
     * @param int $booksCount
     *
     * @return self
     */
    public function setBooksCount(int $booksCount): self
    {
        $this->initialized['booksCount'] = true;
        $this->booksCount = $booksCount;
        return $this;
    }
    /**
     * @return int
     */
    public function getTopbooksCount(): int
    {
        return $this->topbooksCount;
    }
    /**
     * @param int $topbooksCount
     *
     * @return self
     */
    public function setTopbooksCount(int $topbooksCount): self
    {
        $this->initialized['topbooksCount'] = true;
        $this->topbooksCount = $topbooksCount;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['booksCount' => ['books_count', 'getBooksCount', 'setBooksCount'], 'topbooksCount' => ['topbooks_count', 'getTopbooksCount', 'setTopbooksCount']];
    }
}