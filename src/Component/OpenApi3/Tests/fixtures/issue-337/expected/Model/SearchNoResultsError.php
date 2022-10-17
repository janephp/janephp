<?php

namespace CreditSafe\API\Model;

class SearchNoResultsError extends \ArrayObject
{
    /**
     * 
     *
     * @var float
     */
    protected $totalSize;
    /**
     * 
     *
     * @var mixed[]
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
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getCompanies() : iterable
    {
        return $this->companies;
    }
    /**
     * 
     *
     * @param mixed[] $companies
     *
     * @return self
     */
    public function setCompanies(iterable $companies) : self
    {
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
        $this->messages = $messages;
        return $this;
    }
}