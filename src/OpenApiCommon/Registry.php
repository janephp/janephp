<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Registry as BaseRegistry;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

class Registry extends BaseRegistry
{
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
}
