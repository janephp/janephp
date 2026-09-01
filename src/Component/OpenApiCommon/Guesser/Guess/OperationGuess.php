<?php

namespace Jane\Component\OpenApiCommon\Guesser\Guess;

class OperationGuess
{
    public const DELETE = 'DELETE';
    public const GET = 'GET';
    public const POST = 'POST';
    public const PUT = 'PUT';
    public const PATCH = 'PATCH';
    public const OPTIONS = 'OPTIONS';
    public const HEAD = 'HEAD';

    private string $path;
    private array $parameters;
    private array $securityScopes;
    /** @var string[] Sub-namespace segments from the "x-namespace" extension; empty when the endpoint uses the flat layout */
    private array $subNamespace = [];

    public function __construct(
        object $pathItem,
        private readonly object $operation,
        string $path,
        private readonly string $method,
        private readonly string $reference,
        array $securityScopes = [],
    ) {
        $this->path = preg_replace('#^/+#', '/', $path);
        $this->parameters = array_merge(
            ($pathItem->parameters ?? null) ?? [],
            ($operation->parameters ?? null) ?? []
        );
        $this->securityScopes = $securityScopes;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getOperation(): object
    {
        return $this->operation;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function getSecurityScopes(): array
    {
        return $this->securityScopes;
    }

    /**
     * @return string[] Sub-namespace segments (already sanitized), empty when the endpoint uses the flat layout
     */
    public function getSubNamespace(): array
    {
        return $this->subNamespace;
    }

    /**
     * @param string[] $subNamespace
     */
    public function setSubNamespace(array $subNamespace): void
    {
        $this->subNamespace = $subNamespace;
    }
}
