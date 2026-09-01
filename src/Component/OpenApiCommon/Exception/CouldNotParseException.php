<?php

namespace Jane\Component\OpenApiCommon\Exception;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

class CouldNotParseException extends \LogicException implements JaneExceptionInterface
{
}
