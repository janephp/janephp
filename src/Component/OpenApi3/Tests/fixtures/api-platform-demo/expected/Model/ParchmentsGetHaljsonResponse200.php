<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetHaljsonResponse200
{
    /**
     * 
     *
     * @var ParchmentJsonhal[]
     */
    protected $embedded;
    /**
     * 
     *
     * @var int
     */
    protected $totalItems;
    /**
     * 
     *
     * @var int
     */
    protected $itemsPerPage;
    /**
     * 
     *
     * @var ParchmentsGetHaljsonResponse200Links
     */
    protected $links;
    /**
     * 
     *
     * @return ParchmentJsonhal[]
     */
    public function getEmbedded() : array
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param ParchmentJsonhal[] $embedded
     *
     * @return self
     */
    public function setEmbedded(array $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalItems() : int
    {
        return $this->totalItems;
    }
    /**
     * 
     *
     * @param int $totalItems
     *
     * @return self
     */
    public function setTotalItems(int $totalItems) : self
    {
        $this->totalItems = $totalItems;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getItemsPerPage() : int
    {
        return $this->itemsPerPage;
    }
    /**
     * 
     *
     * @param int $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(int $itemsPerPage) : self
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetHaljsonResponse200Links
     */
    public function getLinks() : ParchmentsGetHaljsonResponse200Links
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param ParchmentsGetHaljsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(ParchmentsGetHaljsonResponse200Links $links) : self
    {
        $this->links = $links;
        return $this;
    }
}