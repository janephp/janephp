<?php

namespace Github\Validator;

class ReposOwnerRepoIssuesIssueNumberAssigneesPostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['assignees' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough values. It should have {{ limit }} values or more.']), new \Symfony\Component\Validator\Constraints\Type(['0' => 'array']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])])], 'allowExtraFields' => true])];
    }
}