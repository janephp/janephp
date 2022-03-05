<?php

namespace Github\Validator;

interface ValidatorInterface
{
    public function validate($data) : void;
}