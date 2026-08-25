<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class LanguageAnalyzer extends AnalyzerBase implements AdditionalPropertiesInterface
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
     * The analyzer type: Language
     *
     * @var string
     */
    protected $type;
    /**
     * The suffix for the analyzed field: language.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: Language
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The analyzer type: Language
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The suffix for the analyzed field: language.
     *
     * @return string|null
     */
    public function getFieldSuffix(): ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: language.
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