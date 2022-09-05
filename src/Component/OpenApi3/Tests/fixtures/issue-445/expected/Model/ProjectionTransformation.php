<?php

namespace PicturePark\API\Model;

class ProjectionTransformation extends BusinessRuleTransformation
{
    /**
     * Transformations to apply.
     *
     * @var BusinessRuleTransformation[]|null
     */
    protected $transformations;
    /**
     * Transformations to apply.
     *
     * @return BusinessRuleTransformation[]|null
     */
    public function getTransformations() : ?array
    {
        return $this->transformations;
    }
    /**
     * Transformations to apply.
     *
     * @param BusinessRuleTransformation[]|null $transformations
     *
     * @return self
     */
    public function setTransformations(?array $transformations) : self
    {
        $this->transformations = $transformations;
        return $this;
    }
}