<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Schema as BaseSchema;
use Jane\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;

class Schema extends BaseSchema
{
    /** @var OperationGuess[] */
    private $operations = [];

    /** @var SecuritySchemeGuess[] List of SecuritySchemes associated to this schema */
    private $securitySchemes = [];

    public function addSecurityScheme(string $reference, SecuritySchemeGuess $securityScheme)
    {
        $this->securitySchemes[urldecode($reference)] = $securityScheme;
    }

    public function getSecurityScheme($reference): ?SecuritySchemeGuess
    {
        $reference = urldecode($reference);

        if (\array_key_exists($reference, $this->securitySchemes)) {
            return $this->securitySchemes[$reference];
        }

        if (\array_key_exists($reference . '#', $this->securitySchemes)) {
            return $this->securitySchemes[$reference . '#'];
        }

        return null;
    }

    /**
     * @return SecuritySchemeGuess[]
     */
    public function getSecuritySchemes(): array
    {
        return $this->securitySchemes;
    }

    public function addOperation(string $reference, OperationGuess $operationGuess): void
    {
        $this->operations[urldecode($reference)] = $operationGuess;
    }

    /**
     * @return OperationGuess[]
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
}
