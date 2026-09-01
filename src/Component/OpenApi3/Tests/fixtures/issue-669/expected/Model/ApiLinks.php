<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Information about how to reach other pages
     *
     * @var ApiPages
     */
    public ApiPages $pages;
    public function definedProperties(): array
    {
        return ['pages' => 'pages'];
    }
}