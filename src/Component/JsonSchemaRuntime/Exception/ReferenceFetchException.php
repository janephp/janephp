<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchemaRuntime\Exception;

/**
 * Thrown when a JSON reference document cannot be fetched: unreadable local
 * file or remote stream, or a redirect that is refused because following
 * redirects is disabled.
 *
 * Extends ReferenceResolveException (itself a \RuntimeException), so the
 * Jane error taxonomy and existing \RuntimeException catch blocks both keep
 * working.
 */
class ReferenceFetchException extends ReferenceResolveException
{
}