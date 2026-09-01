<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $ccjDate;
    /**
     * @var string
     */
    public string $court;
    /**
     * @var float
     */
    public float $ccjAmount;
    /**
     * @var string
     */
    public string $caseNumber;
    /**
     * @var string
     */
    public string $ccjStatus;
    /**
     * @var string
     */
    public string $incomingRecordDetails;
    public function definedProperties(): array
    {
        return ['ccjDate' => 'ccjDate', 'court' => 'court', 'ccjAmount' => 'ccjAmount', 'caseNumber' => 'caseNumber', 'ccjStatus' => 'ccjStatus', 'incomingRecordDetails' => 'incomingRecordDetails'];
    }
}