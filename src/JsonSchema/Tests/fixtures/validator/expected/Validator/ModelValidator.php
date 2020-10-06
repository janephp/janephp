<?php

namespace Jane\JsonSchema\Tests\Expected\Validator;

class ModelValidator implements Jane\JsonSchema\Tests\Expected\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraint = new \Symfony\Component\Validator\Constraints\Collection(array('enumString' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('foo', 'bar', 'baz'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')))), 'enumArrayString' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('foo', 'bar', 'baz'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".')))), 'enumNoType' => new \Symfony\Component\Validator\Constraints\Required(array(new \Symfony\Component\Validator\Constraints\Choice(array('choices' => array('foo', 'bar', 'baz'), 'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".'))))));
        $validator = \Symfony\Component\Validator\Validation::createValidator();
        $violations = $validator->validate($data, $constraint);
        if ($violations->count() > 0) {
            throw new Jane\JsonSchema\Tests\Expected\Validator\ValidationException($violations);
        }
    }
}