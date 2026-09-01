<?php

namespace Jane\Component\OpenApiCommon\Exception;

use Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface;

class OpenApiVersionSupportException extends \BadMethodCallException implements JaneExceptionInterface
{
}
