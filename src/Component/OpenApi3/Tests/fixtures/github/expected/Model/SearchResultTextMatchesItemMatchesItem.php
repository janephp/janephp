<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class SearchResultTextMatchesItemMatchesItem implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $text;
    /**
     * @var list<int>
     */
    protected $indices;
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * @return list<int>
     */
    public function getIndices(): array
    {
        return $this->indices;
    }
    /**
     * @param list<int> $indices
     *
     * @return self
     */
    public function setIndices(array $indices): self
    {
        $this->initialized['indices'] = true;
        $this->indices = $indices;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['text' => ['text', 'getText', 'setText'], 'indices' => ['indices', 'getIndices', 'setIndices']];
    }
}