<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var list<MonitoringPortfoliosPortfolioIdPatchBodyEmailsItem>
     */
    public array $emails;
    /**
     * @var string
     */
    public string $emailLanguage;
    /**
     * @var string
     */
    public string $emailSubject;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'emails' => 'emails', 'emailLanguage' => 'emailLanguage', 'emailSubject' => 'emailSubject'];
    }
}