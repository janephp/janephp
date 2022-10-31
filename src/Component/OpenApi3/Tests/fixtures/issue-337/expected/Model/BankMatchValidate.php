<?php

namespace CreditSafe\API\Model;

class BankMatchValidate extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * 
     *
     * @var string
     */
    protected $iban;
    /**
     * Match or No Match
     *
     * @var string
     */
    protected $ibanResult;
    /**
     * 
     *
     * @var string
     */
    protected $ibanText;
    /**
     * 
     *
     * @var string
     */
    protected $logDate;
    /**
     * 
     *
     * @var string
     */
    protected $safeNumber;
    /**
     * Match or No Match
     *
     * @var string
     */
    protected $scanResult;
    /**
     * 
     *
     * @var string
     */
    protected $scanText;
    /**
     * 
     *
     * @var string
     */
    protected $sortCode;
    /**
     * Request status, e.g. Success, Error, Warning
     *
     * @var string
     */
    protected $statusResult;
    /**
     * Explanation for error or warning, if applicable, otherwise empty quotation marks
     *
     * @var string
     */
    protected $statusText;
    /**
     * Only applicable to Verification
     *
     * @var string
     */
    protected $vatResult;
    /**
     * 
     *
     * @var string
     */
    protected $vatText;
    /**
     * 
     *
     * @return string
     */
    public function getAccountNumber() : string
    {
        return $this->accountNumber;
    }
    /**
     * 
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(string $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIban() : string
    {
        return $this->iban;
    }
    /**
     * 
     *
     * @param string $iban
     *
     * @return self
     */
    public function setIban(string $iban) : self
    {
        $this->initialized['iban'] = true;
        $this->iban = $iban;
        return $this;
    }
    /**
     * Match or No Match
     *
     * @return string
     */
    public function getIbanResult() : string
    {
        return $this->ibanResult;
    }
    /**
     * Match or No Match
     *
     * @param string $ibanResult
     *
     * @return self
     */
    public function setIbanResult(string $ibanResult) : self
    {
        $this->initialized['ibanResult'] = true;
        $this->ibanResult = $ibanResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIbanText() : string
    {
        return $this->ibanText;
    }
    /**
     * 
     *
     * @param string $ibanText
     *
     * @return self
     */
    public function setIbanText(string $ibanText) : self
    {
        $this->initialized['ibanText'] = true;
        $this->ibanText = $ibanText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogDate() : string
    {
        return $this->logDate;
    }
    /**
     * 
     *
     * @param string $logDate
     *
     * @return self
     */
    public function setLogDate(string $logDate) : self
    {
        $this->initialized['logDate'] = true;
        $this->logDate = $logDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSafeNumber() : string
    {
        return $this->safeNumber;
    }
    /**
     * 
     *
     * @param string $safeNumber
     *
     * @return self
     */
    public function setSafeNumber(string $safeNumber) : self
    {
        $this->initialized['safeNumber'] = true;
        $this->safeNumber = $safeNumber;
        return $this;
    }
    /**
     * Match or No Match
     *
     * @return string
     */
    public function getScanResult() : string
    {
        return $this->scanResult;
    }
    /**
     * Match or No Match
     *
     * @param string $scanResult
     *
     * @return self
     */
    public function setScanResult(string $scanResult) : self
    {
        $this->initialized['scanResult'] = true;
        $this->scanResult = $scanResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getScanText() : string
    {
        return $this->scanText;
    }
    /**
     * 
     *
     * @param string $scanText
     *
     * @return self
     */
    public function setScanText(string $scanText) : self
    {
        $this->initialized['scanText'] = true;
        $this->scanText = $scanText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSortCode() : string
    {
        return $this->sortCode;
    }
    /**
     * 
     *
     * @param string $sortCode
     *
     * @return self
     */
    public function setSortCode(string $sortCode) : self
    {
        $this->initialized['sortCode'] = true;
        $this->sortCode = $sortCode;
        return $this;
    }
    /**
     * Request status, e.g. Success, Error, Warning
     *
     * @return string
     */
    public function getStatusResult() : string
    {
        return $this->statusResult;
    }
    /**
     * Request status, e.g. Success, Error, Warning
     *
     * @param string $statusResult
     *
     * @return self
     */
    public function setStatusResult(string $statusResult) : self
    {
        $this->initialized['statusResult'] = true;
        $this->statusResult = $statusResult;
        return $this;
    }
    /**
     * Explanation for error or warning, if applicable, otherwise empty quotation marks
     *
     * @return string
     */
    public function getStatusText() : string
    {
        return $this->statusText;
    }
    /**
     * Explanation for error or warning, if applicable, otherwise empty quotation marks
     *
     * @param string $statusText
     *
     * @return self
     */
    public function setStatusText(string $statusText) : self
    {
        $this->initialized['statusText'] = true;
        $this->statusText = $statusText;
        return $this;
    }
    /**
     * Only applicable to Verification
     *
     * @return string
     */
    public function getVatResult() : string
    {
        return $this->vatResult;
    }
    /**
     * Only applicable to Verification
     *
     * @param string $vatResult
     *
     * @return self
     */
    public function setVatResult(string $vatResult) : self
    {
        $this->initialized['vatResult'] = true;
        $this->vatResult = $vatResult;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVatText() : string
    {
        return $this->vatText;
    }
    /**
     * 
     *
     * @param string $vatText
     *
     * @return self
     */
    public function setVatText(string $vatText) : self
    {
        $this->initialized['vatText'] = true;
        $this->vatText = $vatText;
        return $this;
    }
}