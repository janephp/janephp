<?php

declare(strict_types=1);

namespace Jane\Component\OpenApiRuntime\Client;

use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Deferred access to an endpoint response (lazy and preload fetch modes).
 *
 * For preload, the transfer is registered immediately; for lazy, the request
 * is deferred until first access. Parsing happens on access through the parse
 * callback provided by the client (which calls the endpoint's own
 * parseResponse(), preserving its per-status model / exception mapping).
 *
 * Dropping an unconsumed instance aborts the transfer (garbage collection
 * cancels the underlying Symfony response): this is the documented
 * drop-to-cancel behavior. An explicit cancel() does the same.
 */
final class Result
{
    private ?ResponseInterface $response = null;
    private readonly ?\Closure $responseFactory;
    private bool $parsed = false;
    private mixed $parsedValue = null;

    /**
     * @param \Closure $parse fn(ResponseInterface $response): mixed
     */
    public function __construct(
        ResponseInterface|\Closure $responseOrFactory,
        private readonly \Closure $parse,
    ) {
        if ($responseOrFactory instanceof ResponseInterface) {
            $this->response = $responseOrFactory;
            $this->responseFactory = null;

            return;
        }

        $this->responseFactory = $responseOrFactory;
    }

    /**
     * The underlying HTTP response, sending the request if it was deferred.
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response ??= ($this->responseFactory)();
    }

    /**
     * Whether the response was fetched (or is in flight), i.e. whether the
     * deferred request has been sent.
     */
    public function isInitialized(): bool
    {
        return null !== $this->response;
    }

    /**
     * HTTP status code of the response. Never throws on 3/4/5xx status codes
     * (transport errors only), mirroring the historical PSR-18 semantics.
     */
    public function getStatusCode(): int
    {
        return $this->getResponse()->getStatusCode();
    }

    /**
     * Parsed response, as an object (generated model instance or stdClass).
     *
     * Returns null when the parsed value is not an object (e.g. JSON arrays:
     * use toArray() instead).
     */
    public function toObject(): ?object
    {
        $parsed = $this->parse();

        return \is_object($parsed) ? $parsed : null;
    }

    /**
     * Parsed response, as a PHP array.
     *
     * Returns an empty array when the parsed value is not an array (e.g. JSON
     * objects: use toObject() instead).
     */
    public function toArray(): array
    {
        $parsed = $this->parse();

        return \is_array($parsed) ? $parsed : [];
    }

    /**
     * Wait for the transfer to complete (headers and body buffered) without
     * parsing the response.
     */
    public function await(): void
    {
        $this->getResponse()->getContent(false);
    }

    /**
     * Abort the transfer. The response cannot be read afterwards.
     */
    public function cancel(): void
    {
        $this->getResponse()->cancel();
    }

    private function parse(): mixed
    {
        if (!$this->parsed) {
            $this->parsed = true;
            $this->parsedValue = ($this->parse)($this->getResponse());
        }

        return $this->parsedValue;
    }
}
