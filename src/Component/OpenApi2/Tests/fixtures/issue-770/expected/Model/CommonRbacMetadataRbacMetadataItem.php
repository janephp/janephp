<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonRbacMetadataRbacMetadataItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
}