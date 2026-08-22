<?php

namespace Jane\Component\OpenApiCommon\Exception;

use Jane\Component\JsonSchema\Exception\JaneExceptionInterface;

class OpenApiVersionSupportException extends \BadMethodCallException implements JaneExceptionInterface
{
}
