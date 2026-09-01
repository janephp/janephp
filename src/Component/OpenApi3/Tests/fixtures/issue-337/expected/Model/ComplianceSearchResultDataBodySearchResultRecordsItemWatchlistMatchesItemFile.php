<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $build;
    /**
     * @var bool
     */
    public bool $custom;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $published;
    /**
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['build' => 'build', 'custom' => 'custom', 'id' => 'id', 'name' => 'name', 'published' => 'published', 'type' => 'type'];
    }
}