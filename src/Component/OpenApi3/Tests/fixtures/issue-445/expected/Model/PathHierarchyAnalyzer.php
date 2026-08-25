<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class PathHierarchyAnalyzer extends AnalyzerBase implements AdditionalPropertiesInterface
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
     * The analyzer type: PathHierarchy
     *
     * @var string
     */
    protected $type;
    /**
     * The suffix for the analyzed field: pathhierarchy.
     *
     * @var string|null
     */
    protected $fieldSuffix;
    /**
     * The analyzer type: PathHierarchy
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The analyzer type: PathHierarchy
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
     * The suffix for the analyzed field: pathhierarchy.
     *
     * @return string|null
     */
    public function getFieldSuffix(): ?string
    {
        return $this->fieldSuffix;
    }
    /**
     * The suffix for the analyzed field: pathhierarchy.
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