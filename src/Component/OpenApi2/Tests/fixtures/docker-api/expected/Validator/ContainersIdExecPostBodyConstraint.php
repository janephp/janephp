<?php

namespace Docker\Api\Validator;

class ContainersIdExecPostBodyConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options): array
    {
        return [new \Symfony\Component\Validator\Constraints\Collection(fields: ['AttachStdin' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'AttachStdout' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'AttachStderr' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'DetachKeys' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'Tty' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'Env' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'Cmd' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\All(constraints: [new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), new \Symfony\Component\Validator\Constraints\Type(type: ['array'])]), 'Privileged' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['bool'])]), 'User' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])]), 'WorkingDir' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(type: ['string'])])], allowExtraFields: true)];
    }
}