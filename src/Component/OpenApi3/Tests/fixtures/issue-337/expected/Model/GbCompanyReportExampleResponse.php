<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $orderId;
    /**
     * @var string
     */
    public string $companyId;
    /**
     * @var string
     */
    public string $dateOfOrder;
    /**
     * @var string
     */
    public string $language;
    /**
     * @var string
     */
    public string $userId;
    /**
     * @var GbCompanyReportExampleResponseReport
     */
    public GbCompanyReportExampleResponseReport $report;
    public function definedProperties(): array
    {
        return ['orderId' => 'orderId', 'companyId' => 'companyId', 'dateOfOrder' => 'dateOfOrder', 'language' => 'language', 'userId' => 'userId', 'report' => 'report'];
    }
}