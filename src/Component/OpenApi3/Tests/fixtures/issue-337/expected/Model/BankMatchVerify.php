<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class BankMatchVerify implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $companyNumber;
    /**
     * @var string
     */
    public string $accountNumber;
    /**
     * @var string
     */
    public string $iban;
    /**
     * Match or No Match
     *
     * @var string
     */
    public string $ibanResult;
    /**
     * @var string
     */
    public string $ibanText;
    /**
     * @var string
     */
    public string $logDate;
    /**
     * @var string
     */
    public string $safeNumber;
    /**
     * Match or No Match
     *
     * @var string
     */
    public string $scanResult;
    /**
     * @var string
     */
    public string $scanText;
    /**
     * @var string
     */
    public string $sortCode;
    /**
     * Request status, e.g. Success, Error, Warning
     *
     * @var string
     */
    public string $statusResult;
    /**
     * Explanation for error or warning, if applicable, otherwise empty quotation marks
     *
     * @var string
     */
    public string $statusText;
    /**
     * Match or No Match
     *
     * @var string
     */
    public string $vatResult;
    /**
     * @var string
     */
    public string $vatText;
    public function definedProperties(): array
    {
        return ['companyNumber' => 'companyNumber', 'accountNumber' => 'accountNumber', 'iban' => 'iban', 'ibanResult' => 'ibanResult', 'ibanText' => 'ibanText', 'logDate' => 'logDate', 'safeNumber' => 'safeNumber', 'scanResult' => 'scanResult', 'scanText' => 'scanText', 'sortCode' => 'sortCode', 'statusResult' => 'statusResult', 'statusText' => 'statusText', 'vatResult' => 'vatResult', 'vatText' => 'vatText'];
    }
}