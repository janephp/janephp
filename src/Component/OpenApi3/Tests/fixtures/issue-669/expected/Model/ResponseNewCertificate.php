<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseNewCertificate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Certificate
     */
    public Certificate $certificate;
    public function definedProperties(): array
    {
        return ['certificate' => 'certificate'];
    }
}