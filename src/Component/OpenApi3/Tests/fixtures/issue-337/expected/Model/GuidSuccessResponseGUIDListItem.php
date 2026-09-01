<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GuidSuccessResponseGUIDListItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $friendlyName;
    /**
     * @var string
     */
    public string $gUID;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $serviceLine;
    public function definedProperties(): array
    {
        return ['friendlyName' => 'friendlyName', 'gUID' => 'GUID', 'type' => 'type', 'serviceLine' => 'serviceLine'];
    }
}