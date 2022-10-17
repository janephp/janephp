<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdImportPostBody extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $importCsv;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @return string
     */
    public function getImportCsv() : string
    {
        return $this->importCsv;
    }
    /**
     * 
     *
     * @param string $importCsv
     *
     * @return self
     */
    public function setImportCsv(string $importCsv) : self
    {
        $this->importCsv = $importCsv;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}