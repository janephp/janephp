<?php

namespace Jane\Component\OpenApiCommon\Exception;

use Jane\Component\JsonSchema\Exception\JaneExceptionInterface;

class CouldNotParseException extends \LogicException implements JaneExceptionInterface
{
}
