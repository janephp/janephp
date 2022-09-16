<?php

namespace Github\Validator;

class WorkflowRunUsageConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('billable' => new \Symfony\Component\Validator\Constraints\Optional(array(new \WorkflowUsageBillableUBUNTUConstraint(array()), new \WorkflowUsageBillableMACOSConstraint(array()), new \WorkflowUsageBillableWINDOWSConstraint(array()), new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'run_duration_ms' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'integer')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => false)));
    }
}