<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Registry as BaseRegistry;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

class Registry extends BaseRegistry
{
    /** @var string */
    private $openApiClass;

    /** @var array<string>|null */
    private $whitelistedPaths;

    public function getOpenApiClass(): string
    {
        return $this->openApiClass;
    }

    public function setOpenApiClass(string $openApiClass): void
    {
        $this->openApiClass = $openApiClass;
    }

    public function getFirstSchema(): Schema
    {
        return reset($this->schemas);
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

    public function setWhitelistedPaths(?array $whitelistedPaths): void
    {
        $this->whitelistedPaths = $whitelistedPaths;
    }

    public function getWhitelistedPaths(): ?array
    {
        return $this->whitelistedPaths;
    }
}
