<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $correlationId;
    /**
     * @var string
     */
    public string $orderId;
    /**
     * @var string
     */
    public string $directorId;
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
     * @var GbPeopleReportReponseReport
     */
    public GbPeopleReportReponseReport $report;
    public function definedProperties(): array
    {
        return ['correlationId' => 'correlationId', 'orderId' => 'orderId', 'directorId' => 'directorId', 'dateOfOrder' => 'dateOfOrder', 'language' => 'language', 'userId' => 'userId', 'report' => 'report'];
    }
}