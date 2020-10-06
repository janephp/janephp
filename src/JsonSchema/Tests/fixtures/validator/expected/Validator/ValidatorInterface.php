<?php

namespace Jane\JsonSchema\Tests\Expected\Validator;

interface ValidatorInterface
{
    public function validate($data) : void;
}