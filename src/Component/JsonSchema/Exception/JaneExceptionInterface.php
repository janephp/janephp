<?php

namespace Jane\Component\JsonSchema\Exception;

/**
 * Marker interface for all user facing errors thrown by Jane components.
 *
 * @deprecated use \Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface
 *             instead: this interface is kept as a subclass for backward
 *             compatibility and extends the runtime marker
 */
interface JaneExceptionInterface extends \Jane\Component\JsonSchemaRuntime\Exception\JaneExceptionInterface
{
}
