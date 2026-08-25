<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

/**
 * Generates the names of a client method (`getFunctionName`) and of its
 * related endpoint class (`getEndpointName`) for an API operation.
 *
 * Implementations are version-agnostic: the wrapped operation object of an
 * OperationGuess differs across OpenAPI versions (specification 2.x, 3.x,
 * 3.1), so implementations needing version specific data have to detect the
 * version themselves (e.g. through `instanceof` checks on
 * `$operation->getOperation()`).
 *
 * Namings are executed as a chain: returning an empty string means "I cannot
 * handle this operation", deferring the decision to the next naming of the
 * chain. Implementations must be stateless and deterministic: they must
 * return the same names every time they are called with the same operation,
 * and must not rely on any external mutable state.
 */
interface OperationNamingInterface
{
    /**
     * Returns the client method name for the given operation, or an empty
     * string to defer the decision to the next naming of the chain.
     */
    public function getFunctionName(OperationGuess $operation): string;

    /**
     * Returns the endpoint class name for the given operation, or an empty
     * string to defer the decision to the next naming of the chain.
     */
    public function getEndpointName(OperationGuess $operation): string;
}
