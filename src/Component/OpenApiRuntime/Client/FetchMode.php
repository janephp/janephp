<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client;

/**
 * Fetch strategies available on GET and HEAD operations.
 *
 * - Lazy: the request is deferred until the response is first accessed
 *   (default).
 * - Eager: blocking request + parse, the historical behavior.
 * - Preload: the request is registered immediately and sent / progressed
 *   concurrently with every other in-flight request of the client at the
 *   first consumption (stream(), await(), parse...).
 *
 * Every other HTTP verb is always executed eagerly.
 */
enum FetchMode: string
{
    case Lazy = 'lazy';
    case Eager = 'eager';
    case Preload = 'preload';
}
