<?php

namespace Docker\Api\Validator;

class MountConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return array(new \Symfony\Component\Validator\Constraints\Collection(array('fields' => array('Target' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Source' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'Type' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')), new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('bind', 'volume', 'tmpfs', 'npipe'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')))), 'ReadOnly' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'bool')))), 'Consistency' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Symfony\Component\Validator\Constraints\Type(array('0' => 'string')))), 'BindOptions' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\MountBindOptionsConstraint(array()))), 'VolumeOptions' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\MountVolumeOptionsConstraint(array()))), 'TmpfsOptions' => new \Symfony\Component\Validator\Constraints\Optional(array(new \Docker\Api\Validator\MountTmpfsOptionsConstraint(array())))), 'allowExtraFields' => true)));
    }
}