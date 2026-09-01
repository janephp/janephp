<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

class OperationUrlNaming implements OperationNamingInterface
{
    use InflectorTrait;
    public const FORBIDDEN_EXTENSIONS = [
        '.json',
        '.php',
        '.asp',
    ];

    private Naming $naming;

    public function __construct()
    {
        $this->naming = new Naming();
    }

    protected function getUniqueName(OperationGuess $operation): string
    {
        $prefix = strtolower($operation->getMethod());
        $shouldSingularize = true;
        $responses = $operation->getOperation()->responses ?? null;

        if (null !== $responses && isset($responses[200])) {
            $response = $responses[200];

            if (\is_object($response)) {
                // OpenAPI 2 response shape: response.schema
                $schema = ($response->schema ?? null);
                if (\is_object($schema) && 'array' === ($schema->type ?? null)) {
                    $shouldSingularize = false;
                } elseif ($response->content ?? null) {
                    // OpenAPI 3 / 3.1 response shape: response.content.<media>.schema
                    $firstContent = (new \ArrayIterator(iterator_to_array($response->content ?? null)))->current();
                    $schema = \is_object($firstContent) ? ($firstContent->schema ?? null) : null;

                    if (\is_object($schema)) {
                        $schemaType = ($schema->type ?? null);

                        if (\is_array($schemaType) ? \in_array('array', $schemaType, true) : 'array' === $schemaType) {
                            $shouldSingularize = false;
                        }
                    }
                }
            }
        }

        $matches = [];
        preg_match_all('/(?<separator>[^a-zA-Z0-9_{}])+(?<part>[a-zA-Z0-9_{}]*)/', $operation->getPath(), $matches);

        $methodNameParts = [];
        $lastNonParameterPartIndex = 0;

        foreach ($matches[0] as $index => $match) {
            if ($matches['separator'][$index] === '.' && \in_array(mb_strtolower($match), self::FORBIDDEN_EXTENSIONS)) {
                continue;
            }

            $part = $matches['part'][$index];

            if (preg_match_all('/{(?P<parameter>[^{}]+)}/', $part, $parameterMatches)) {
                foreach ($parameterMatches[0] as $parameterIndex => $parameterMatch) {
                    $withoutSnakes = preg_replace_callback(
                        '/(^|_|\.)+(.)/',
                        function ($match) {
                            return ('.' === $match[1] ? '_' : '') . strtoupper($match[2]);
                        },
                        $parameterMatches['parameter'][$parameterIndex]
                    );

                    $methodNameParts[] = 'By' . ucfirst($withoutSnakes);
                }
            } else {
                $methodNameParts[] = ucfirst($part);
                $lastNonParameterPartIndex = \count($methodNameParts) - 1;
            }
        }

        if ($shouldSingularize && \count($methodNameParts) > 0) {
            $methodNameParts[$lastNonParameterPartIndex] = $this->getInflector()->singularize($methodNameParts[$lastNonParameterPartIndex]);
        }

        return $prefix . ucfirst(implode('', $methodNameParts));
    }

    public function getFunctionName(OperationGuess $operation): string
    {
        return $this->getInflector()->camelize($this->getUniqueName($operation));
    }

    public function getEndpointName(OperationGuess $operation): string
    {
        return $this->naming->fixReservedClassName($this->getInflector()->classify($this->getUniqueName($operation)));
    }
}
