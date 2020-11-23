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

    private $operation;

    private $path;

    private $method;

    private $reference;

    private $parameters;

    private $securityScopes;

    public function __construct(object $pathItem, object $operation, string $path, string $method, string $reference, array $securityScopes = [])
    {
        $this->operation = $operation;
        $this->path = preg_replace('#^/+#', '/', $path);
        $this->method = $method;
        $this->reference = $reference;
        $this->parameters = array_merge(
            $pathItem->getParameters() ?? [],
            $operation->getParameters() ?? []
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
}
