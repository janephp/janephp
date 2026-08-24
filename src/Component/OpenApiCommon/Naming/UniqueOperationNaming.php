<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

/**
 * Decorates an OperationNamingInterface to guarantee collision-free names.
 *
 * URL based naming can produce the same name for distinct operations, e.g. a
 * `GET /api/user` path and a `GET /api/users` path whose response is not an
 * array (the last url segment is singularized in that case). As PHP method and
 * class names are case-insensitive, such collisions would generate broken
 * clients (duplicated methods / classes).
 *
 * Colliding names get an incrementing integer suffix (getApiUser, getApiUser2,
 * ...), applied consistently to both the client method name and the endpoint
 * class name of the same operation.
 */
class UniqueOperationNaming implements OperationNamingInterface
{
    /**
     * @var array<string, array<string, true>> used client method names, indexed by specification origin then lowercased name
     */
    private array $usedFunctionNames = [];

    /**
     * @var array<string, array<string, true>> used endpoint class names, indexed by specification origin then lowercased name
     */
    private array $usedEndpointNames = [];

    /**
     * @var array<int, array{string, string}> resolved names indexed by spl object id of the operation guess
     */
    private array $resolvedNames = [];

    public function __construct(
        private readonly OperationNamingInterface $decorated,
    ) {
    }

    public function getFunctionName(OperationGuess $operation): string
    {
        return $this->resolve($operation)[0];
    }

    public function getEndpointName(OperationGuess $operation): string
    {
        return $this->resolve($operation)[1];
    }

    /**
     * Resolves (once per operation) the client method and endpoint class names.
     *
     * Both names must be computed together so that the disambiguation suffix
     * matches between the generated Client method and Endpoint class.
     *
     * @return array{string, string} tuple of client method name and endpoint class name
     */
    private function resolve(OperationGuess $operation): array
    {
        $cacheKey = spl_object_id($operation);

        if (isset($this->resolvedNames[$cacheKey])) {
            return $this->resolvedNames[$cacheKey];
        }

        $functionName = $this->decorated->getFunctionName($operation);
        $endpointName = $this->decorated->getEndpointName($operation);

        // A naming instance serves every schema of a generation command, so
        // uniqueness has to be tracked per specification: identical operations
        // from two mapped specifications live in distinct namespaces and must
        // not trigger suffixes on each other. The operation reference starts
        // with the specification origin (`<origin>#/paths/...`).
        $schemaKey = explode('#', $operation->getReference(), 2)[0];

        $functionKey = mb_strtolower($functionName);
        $endpointKey = mb_strtolower($endpointName);

        if (isset($this->usedFunctionNames[$schemaKey][$functionKey]) || isset($this->usedEndpointNames[$schemaKey][$endpointKey])) {
            $suffix = 2;

            while (
                isset($this->usedFunctionNames[$schemaKey][mb_strtolower($functionName . $suffix)])
                || isset($this->usedEndpointNames[$schemaKey][mb_strtolower($endpointName . $suffix)])
            ) {
                ++$suffix;
            }

            $functionName .= $suffix;
            $endpointName .= $suffix;
        }

        $this->usedFunctionNames[$schemaKey][mb_strtolower($functionName)] = true;
        $this->usedEndpointNames[$schemaKey][mb_strtolower($endpointName)] = true;

        return $this->resolvedNames[$cacheKey] = [$functionName, $endpointName];
    }
}
