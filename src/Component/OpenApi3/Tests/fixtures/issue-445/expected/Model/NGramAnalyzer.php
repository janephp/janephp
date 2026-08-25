<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class NGramAnalyzer extends AnalyzerBase implements AdditionalPropertiesInterface
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
     * The analyzer type: NGram
     *
     * @var mixed
     */
    protected $type;
    /**
     * The suffix for the analyzed field: ngram.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: NGram
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The analyzer type: NGram
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The suffix for the analyzed field: ngram.
     *
     * @return string|null
     */
    public function getFieldSuffix(): ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: ngram.
     *
     * @param string|null $fieldSuffix
     *
     * @return self
     */
    public function setFieldSuffix(?string $fieldSuffix): self
    {
        $this->initialized['fieldSuffix'] = true;
        $this->fieldSuffix = $fieldSuffix;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'fieldSuffix' => ['fieldSuffix', 'getFieldSuffix', 'setFieldSuffix']];
    }
}