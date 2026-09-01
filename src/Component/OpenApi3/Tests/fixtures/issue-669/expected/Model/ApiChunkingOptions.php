<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiChunkingOptions implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Hierarchical options
     *
     * @var int
     */
    public int $childChunkSize;
    /**
     * Section_Based and Fixed_Length options
     *
     * @var int
     */
    public int $maxChunkSize;
    /**
     * Hierarchical options
     *
     * @var int
     */
    public int $parentChunkSize;
    /**
     * Semantic options
     *
     * @var float
     */
    public float $semanticThreshold;
    public function definedProperties(): array
    {
        return ['childChunkSize' => 'child_chunk_size', 'maxChunkSize' => 'max_chunk_size', 'parentChunkSize' => 'parent_chunk_size', 'semanticThreshold' => 'semantic_threshold'];
    }
}