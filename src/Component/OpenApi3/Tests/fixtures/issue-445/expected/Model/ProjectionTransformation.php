<?php

namespace PicturePark\API\Model;

class ProjectionTransformation extends BusinessRuleTransformation
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
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
    public function getTransformations() : ?array
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
    public function setTransformations(?array $transformations) : self
    {
        $this->initialized['transformations'] = true;
        $this->transformations = $transformations;
        return $this;
    }
}