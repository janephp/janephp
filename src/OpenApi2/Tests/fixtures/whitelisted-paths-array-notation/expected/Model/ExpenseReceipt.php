<?php

namespace Jane\OpenApi2\Tests\Expected\Model;

class ExpenseReceipt
{
    /**
     * 
     *
     * @var string
     */
    protected $uRL;
    /**
     * 
     *
     * @var string
     */
    protected $fileName;
    /**
     * 
     *
     * @return string
     */
    public function getURL() : string
    {
        return $this->uRL;
    }
    /**
     * 
     *
     * @param string $uRL
     *
     * @return self
     */
    public function setURL(string $uRL) : self
    {
        $this->uRL = $uRL;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->fileName = $fileName;
        return $this;
    }
}