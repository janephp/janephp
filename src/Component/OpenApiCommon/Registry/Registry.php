<?php

namespace Jane\Component\OpenApiCommon\Registry;

use Jane\Component\JsonSchema\Registry\Registry as BaseRegistry;
use Jane\Component\JsonSchema\Registry\RegistryInterface;
use Jane\Component\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

class Registry extends BaseRegistry implements RegistryInterface
{
    private string $openApiClass = '';
    /** @var array<string> */
    private array $whitelistedPaths = [];
    private array $customQueryResolver = [];
    private bool $throwUnexpectedStatusCode = false;
    private bool $generateErrorExceptions = true;

    public function setOpenApiClass(string $openApiClass): void
    {
        $this->openApiClass = $openApiClass;
    }

    public function getOpenApiClass(): string
    {
        return $this->openApiClass;
    }

    public function setWhitelistedPaths(array $whitelistedPaths): void
    {
        $this->whitelistedPaths = $whitelistedPaths;
    }

    public function getWhitelistedPaths(): array
    {
        return $this->whitelistedPaths;
    }

    public function setCustomQueryResolver(array $customQueryResolver): void
    {
        $this->customQueryResolver = $customQueryResolver;
    }

    public function getCustomQueryResolver(): array
    {
        return $this->customQueryResolver;
    }

    public function setThrowUnexpectedStatusCode(bool $throwUnexpectedStatusCode): void
    {
        $this->throwUnexpectedStatusCode = $throwUnexpectedStatusCode;
    }

    public function getThrowUnexpectedStatusCode(): bool
    {
        return $this->throwUnexpectedStatusCode;
    }

    public function setGenerateErrorExceptions(bool $generateErrorExceptions): void
    {
        $this->generateErrorExceptions = $generateErrorExceptions;
    }

    public function getGenerateErrorExceptions(): bool
    {
        return $this->generateErrorExceptions;
    }

    public function hasSecurityScheme($securitySchemeReference): bool
    {
        return null !== $this->getClass($securitySchemeReference);
    }

    public function getSecurityScheme($securitySchemeReference): ?SecuritySchemeGuess
    {
        /** @var Schema $schema */
        $schema = $this->getSchema($securitySchemeReference);

        if (null === $schema) {
            return null;
        }

        return $schema->getSecurityScheme($securitySchemeReference);
    }

    public function getOptionsHash(): string
    {
        return md5(json_encode([
            'open-api-class' => $this->getOpenApiClass(),
            'whitelisted-paths' => $this->getWhitelistedPaths(),
            'throw-unexpected-status-code' => $this->getThrowUnexpectedStatusCode(),
            'generate-error-exceptions' => $this->getGenerateErrorExceptions(),
        ]));
    }
}
