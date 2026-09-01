<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GuidSuccessResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GuidSuccessResponseGUIDListItem>
     */
    public array $gUIDList;
    public function definedProperties(): array
    {
        return ['gUIDList' => 'GUIDList'];
    }
}