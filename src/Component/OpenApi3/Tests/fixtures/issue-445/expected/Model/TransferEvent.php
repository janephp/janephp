<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class TransferEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $transferId;
    /**
     * Transfer states
     *
     * @var string
     */
    public string $state;
    public function definedProperties(): array
    {
        return ['transferId' => 'transferId', 'state' => 'state'];
    }
}