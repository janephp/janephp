<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class PaginatedResourceMeta implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $limit;
    /**
     * @var int
     */
    public int $offset;
    /**
     * @var int
     */
    public int $total;
    /**
     * @var string|null
     */
    public ?string $next;
    public function definedProperties(): array
    {
        return ['limit' => 'limit', 'offset' => 'offset', 'total' => 'total', 'next' => 'next'];
    }
}