<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\AdditionalPropertiesInterface;
class CommonRbacMetadataRbacMetadataItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}