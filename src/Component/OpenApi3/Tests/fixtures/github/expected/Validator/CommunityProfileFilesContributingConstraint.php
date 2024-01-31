<?php

namespace Github\Validator;

class CommunityProfileFilesContributingConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Length(['min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['url' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(['min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.']), new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'html_url' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(['min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.']), new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])])], 'allowExtraFields' => true])];
    }
}