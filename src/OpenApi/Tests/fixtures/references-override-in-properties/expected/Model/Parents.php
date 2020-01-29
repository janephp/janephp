<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Parents
{
    /**
     * 
     *
     * @var Child|null
     */
    protected $currency;
    /**
     * 
     *
     * @return Child|null
     */
    public function getCurrency() : ?Child
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param Child|null $currency
     *
     * @return self
     */
    public function setCurrency(?Child $currency) : self
    {
        $this->currency = $currency;
        return $this;
    }
}