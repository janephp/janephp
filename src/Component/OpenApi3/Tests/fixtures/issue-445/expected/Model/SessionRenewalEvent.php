<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class SessionRenewalEvent extends ApplicationEvent implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * User authorization state
     *
     * @var string
     */
    public string $authorizationState;
    public function definedProperties(): array
    {
        return ['authorizationState' => 'authorizationState'];
    }
}