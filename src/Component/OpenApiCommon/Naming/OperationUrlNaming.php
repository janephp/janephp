<?php

namespace Jane\Component\OpenApiCommon\Naming;

use Jane\Component\JsonSchema\Tools\InflectorTrait;
use Jane\Component\OpenApi2\JsonSchema\Model\Response as OA2Response;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema as OA2Schema;
use Jane\Component\OpenApi3\JsonSchema\Model\Response as OA3Response;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema as OA3Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;

class OperationUrlNaming implements OperationNamingInterface
{
    use InflectorTrait;
    public const FORBIDDEN_EXTENSIONS = [
        '.json',
        '.php',
        '.asp',
    ];

    protected function getUniqueName(OperationGuess $operation): string
    {
        $prefix = strtolower($operation->getMethod());
        $shouldSingularize = true;
        $responses = $operation->getOperation()->getResponses();

        if ($responses instanceof \ArrayObject && isset($responses[200])) {
            $response = $responses[200];

            if (class_exists(OA2Response::class) && $response instanceof OA2Response && $response->getSchema() instanceof OA2Schema && 'array' === $response->getSchema()->getType()) {
                $shouldSingularize = false;
            }
            if (class_exists(OA3Response::class) && $response instanceof OA3Response && $response->getContent()) {
                $firstContent = $response->getContent()->getIterator()->current();

                if ($firstContent->getSchema() instanceof OA3Schema && 'array' === $firstContent->getSchema()->getType()) {
                    $shouldSingularize = false;
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
        return $this->getInflector()->classify($this->getUniqueName($operation));
    }
}
