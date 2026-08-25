<?php

namespace PicturePark\API\Exception;

abstract class PreconditionFailedException extends \RuntimeException implements ClientException, WithResponseInterface
{
    public function __construct(string $message)
    {
        parent::__construct($message, 412);
    }
}