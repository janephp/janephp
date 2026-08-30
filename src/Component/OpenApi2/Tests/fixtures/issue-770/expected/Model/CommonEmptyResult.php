<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class CommonEmptyResult
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