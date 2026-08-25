<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
class TopBooksGetHaljsonResponse200 implements AdditionalPropertiesInterface
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
     * @var list<TopBookJsonhal>
     */
    protected $embedded;
    /**
     * @var int
     */
    protected $totalItems;
    /**
     * @var int
     */
    protected $itemsPerPage;
    /**
     * @var TopBooksGetHaljsonResponse200Links
     */
    protected $links;
    /**
     * @return list<TopBookJsonhal>
     */
    public function getEmbedded(): array
    {
        return $this->embedded;
    }
    /**
     * @param list<TopBookJsonhal> $embedded
     *
     * @return self
     */
    public function setEmbedded(array $embedded): self
    {
        $this->initialized['embedded'] = true;
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * @return int
     */
    public function getTotalItems(): int
    {
        return $this->totalItems;
    }
    /**
     * @param int $totalItems
     *
     * @return self
     */
    public function setTotalItems(int $totalItems): self
    {
        $this->initialized['totalItems'] = true;
        $this->totalItems = $totalItems;
        return $this;
    }
    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }
    /**
     * @param int $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(int $itemsPerPage): self
    {
        $this->initialized['itemsPerPage'] = true;
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * @return TopBooksGetHaljsonResponse200Links
     */
    public function getLinks(): TopBooksGetHaljsonResponse200Links
    {
        return $this->links;
    }
    /**
     * @param TopBooksGetHaljsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(TopBooksGetHaljsonResponse200Links $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['embedded' => ['_embedded', 'getEmbedded', 'setEmbedded'], 'totalItems' => ['totalItems', 'getTotalItems', 'setTotalItems'], 'itemsPerPage' => ['itemsPerPage', 'getItemsPerPage', 'setItemsPerPage'], 'links' => ['_links', 'getLinks', 'setLinks']];
    }
}