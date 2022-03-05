<?php

namespace Docker\Api\Validator;

interface ValidatorInterface
{
    public function validate($data) : void;
}