<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PortfolioRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var bool
     */
    public bool $isDefault;
    /**
     * @var PortfolioRequestEmails
     */
    public PortfolioRequestEmails $emails;
    /**
     * @var string
     */
    public string $emailSubject;
    /**
     * @var string
     */
    public string $emailLanguage;
    /**
     * @var string
     */
    public string $frequency;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'isDefault' => 'isDefault', 'emails' => 'emails', 'emailSubject' => 'emailSubject', 'emailLanguage' => 'emailLanguage', 'frequency' => 'frequency'];
    }
}