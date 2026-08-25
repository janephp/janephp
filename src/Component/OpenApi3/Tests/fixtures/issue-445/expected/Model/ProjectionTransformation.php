<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ProjectionTransformation extends BusinessRuleTransformation implements AdditionalPropertiesInterface
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
     * Transformations to apply.
     *
     * @var list<BusinessRuleTransformation>|null
     */
    protected $transformations;
    /**
     * Transformations to apply.
     *
     * @return list<BusinessRuleTransformation>|null
     */
    public function getTransformations(): ?array
    {
        return $this->transformations;
    }
    /**
     * Transformations to apply.
     *
     * @param list<BusinessRuleTransformation>|null $transformations
     *
     * @return self
     */
    public function setTransformations(?array $transformations): self
    {
        $this->initialized['transformations'] = true;
        $this->transformations = $transformations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['transformations' => ['transformations', 'getTransformations', 'setTransformations']];
    }
}