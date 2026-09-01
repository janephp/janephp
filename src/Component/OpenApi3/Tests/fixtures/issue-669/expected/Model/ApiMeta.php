<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiMeta implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The current page
     *
     * @var int
     */
    public int $page;
    /**
     * Total number of pages
     *
     * @var int
     */
    public int $pages;
    /**
     * Total amount of items over all pages
     *
     * @var int
     */
    public int $total;
    public function definedProperties(): array
    {
        return ['page' => 'page', 'pages' => 'pages', 'total' => 'total'];
    }
}