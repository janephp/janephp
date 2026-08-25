<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiChunkingOptions implements AdditionalPropertiesInterface
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
    /**
     * Hierarchical options
     *
     * @var int
     */
    protected $childChunkSize;
    /**
     * Section_Based and Fixed_Length options
     *
     * @var int
     */
    protected $maxChunkSize;
    /**
     * Hierarchical options
     *
     * @var int
     */
    protected $parentChunkSize;
    /**
     * Semantic options
     *
     * @var float
     */
    protected $semanticThreshold;
    /**
     * Hierarchical options
     *
     * @return int
     */
    public function getChildChunkSize(): int
    {
        return $this->childChunkSize;
    }
    /**
     * Hierarchical options
     *
     * @param int $childChunkSize
     *
     * @return self
     */
    public function setChildChunkSize(int $childChunkSize): self
    {
        $this->initialized['childChunkSize'] = true;
        $this->childChunkSize = $childChunkSize;
        return $this;
    }
    /**
     * Section_Based and Fixed_Length options
     *
     * @return int
     */
    public function getMaxChunkSize(): int
    {
        return $this->maxChunkSize;
    }
    /**
     * Section_Based and Fixed_Length options
     *
     * @param int $maxChunkSize
     *
     * @return self
     */
    public function setMaxChunkSize(int $maxChunkSize): self
    {
        $this->initialized['maxChunkSize'] = true;
        $this->maxChunkSize = $maxChunkSize;
        return $this;
    }
    /**
     * Hierarchical options
     *
     * @return int
     */
    public function getParentChunkSize(): int
    {
        return $this->parentChunkSize;
    }
    /**
     * Hierarchical options
     *
     * @param int $parentChunkSize
     *
     * @return self
     */
    public function setParentChunkSize(int $parentChunkSize): self
    {
        $this->initialized['parentChunkSize'] = true;
        $this->parentChunkSize = $parentChunkSize;
        return $this;
    }
    /**
     * Semantic options
     *
     * @return float
     */
    public function getSemanticThreshold(): float
    {
        return $this->semanticThreshold;
    }
    /**
     * Semantic options
     *
     * @param float $semanticThreshold
     *
     * @return self
     */
    public function setSemanticThreshold(float $semanticThreshold): self
    {
        $this->initialized['semanticThreshold'] = true;
        $this->semanticThreshold = $semanticThreshold;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['childChunkSize' => ['child_chunk_size', 'getChildChunkSize', 'setChildChunkSize'], 'maxChunkSize' => ['max_chunk_size', 'getMaxChunkSize', 'setMaxChunkSize'], 'parentChunkSize' => ['parent_chunk_size', 'getParentChunkSize', 'setParentChunkSize'], 'semanticThreshold' => ['semantic_threshold', 'getSemanticThreshold', 'setSemanticThreshold']];
    }
}