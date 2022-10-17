<?php

namespace Github\Validator;

class ImportProjectChoicesItemConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Count(array('min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')), new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('vcs' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'tfvc_project' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.')))), 'human_name' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Length(array('min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.')), new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\NotNull(array('message' => 'This value should not be null.'))))), 'allowExtraFields' => true)));
    }
}