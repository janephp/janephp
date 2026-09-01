<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAccount implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Account
     */
    public Account $account;
    public function definedProperties(): array
    {
        return ['account' => 'account'];
    }
}