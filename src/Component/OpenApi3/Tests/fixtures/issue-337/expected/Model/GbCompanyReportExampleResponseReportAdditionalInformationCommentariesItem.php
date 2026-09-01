<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportAdditionalInformationCommentariesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $commentaryText;
    /**
     * @var string
     */
    public string $positiveNegative;
    public function definedProperties(): array
    {
        return ['commentaryText' => 'commentaryText', 'positiveNegative' => 'positiveNegative'];
    }
}