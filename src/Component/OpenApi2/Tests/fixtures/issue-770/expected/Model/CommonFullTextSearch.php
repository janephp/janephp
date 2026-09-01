<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonFullTextSearch
{
    /**
     * Search logic operator
     *
     * @var string
     */
    public string $type;
    /**
     * Text or number to search
     *
     * @var string
     */
    public string $value;
    /**
     * Specific fields to search
     *
     * @var list<string>
     */
    public array $fields;
}