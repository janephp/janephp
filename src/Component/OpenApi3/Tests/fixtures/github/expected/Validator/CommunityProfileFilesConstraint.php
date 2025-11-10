<?php

namespace Github\Validator;

class CommunityProfileFilesConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['code_of_conduct' => new \Symfony\Component\Validator\Constraints\Required([]), 'license' => new \Symfony\Component\Validator\Constraints\Required([]), 'contributing' => new \Symfony\Component\Validator\Constraints\Required([]), 'readme' => new \Symfony\Component\Validator\Constraints\Required([]), 'issue_template' => new \Symfony\Component\Validator\Constraints\Required([]), 'pull_request_template' => new \Symfony\Component\Validator\Constraints\Required([])], 'allowExtraFields' => true])];
    }
}