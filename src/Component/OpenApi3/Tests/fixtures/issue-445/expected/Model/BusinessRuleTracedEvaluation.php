<?php

namespace PicturePark\API\Model;

class BusinessRuleTracedEvaluation
{
    /**
     * Indicates if the rule was found to be executable.
     *
     * @var bool
     */
    public bool $conditionSatisfied;
    /**
     * Detailed evaluation results for each condition.
     *
     * @var list<BusinessRuleTracedEvaluationCondition>|null
     */
    public ?array $conditions;
    /**
     * Detailed results for transformation groups.
     *
     * @var list<BusinessRuleTracedTransformationGroup>|null
     */
    public ?array $transformationGroups;
    /**
     * Detailed steps performed by actions.
     *
     * @var list<BusinessRuleTracedAction>|null
     */
    public ?array $actions;
    /**
     * State of variables after all transformation groups were ran.
     *
     * @var array<string, string>|null
     */
    public ?iterable $variables;
}