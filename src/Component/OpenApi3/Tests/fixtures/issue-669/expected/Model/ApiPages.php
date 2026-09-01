<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiPages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * First page
     *
     * @var string
     */
    public string $first;
    /**
     * Last page
     *
     * @var string
     */
    public string $last;
    /**
     * Next page
     *
     * @var string
     */
    public string $next;
    /**
     * Previous page
     *
     * @var string
     */
    public string $previous;
    public function definedProperties(): array
    {
        return ['first' => 'first', 'last' => 'last', 'next' => 'next', 'previous' => 'previous'];
    }
}