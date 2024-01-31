<?php

namespace CreditSafe\API\Model;

class SearchNoResultsError extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var float
     */
    protected $totalSize;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $companies;
    /**
     * 
     *
     * @var SearchNoResultsErrorMessages
     */
    protected $messages;
    /**
     * 
     *
     * @return float
     */
    public function getTotalSize() : float
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param float $totalSize
     *
     * @return self
     */
    public function setTotalSize(float $totalSize) : self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getCompanies() : iterable
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param array<string, mixed> $companies
     *
     * @return self
     */
    public function setCompanies(iterable $companies) : self
    {
        $this->initialized['companies'] = true;
        $this->companies = $companies;
        return $this;
    }
    /**
     * 
     *
     * @return SearchNoResultsErrorMessages
     */
    public function getMessages() : SearchNoResultsErrorMessages
    {
        return $this->messages;
    }
    /**
     * 
     *
     * @param SearchNoResultsErrorMessages $messages
     *
     * @return self
     */
    public function setMessages(SearchNoResultsErrorMessages $messages) : self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
}