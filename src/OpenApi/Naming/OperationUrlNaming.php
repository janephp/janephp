<?php

namespace Jane\OpenApi\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApi\JsonSchema\Version3\Model\Response;
use Jane\OpenApi\JsonSchema\Version3\Model\Schema;
use Jane\OpenApi\Operation\Operation;

class OperationUrlNaming implements OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string
    {
        return Inflector::camelize($this->getUniqueName($operation));
    }

    public function getEndpointName(Operation $operation): string
    {
        return Inflector::classify($this->getUniqueName($operation));
    }

    private function getUniqueName(Operation $operation): string
    {
        $prefix = strtolower($operation->getMethod());
        $shouldSingularize = true;
        $responses = $operation->getOperation()->getResponses();

        if ($responses instanceof \ArrayObject && isset($responses[200])) {
            $response = $responses[200];

            if ($response instanceof Response && $response->getContent()) {
                $firstContent = $response->getContent()->getIterator()->current();

                if ($firstContent->getSchema() instanceof Schema && 'array' === $firstContent->getSchema()->getType()) {
                    $shouldSingularize = false;
                }
            }
        }

        preg_match_all('/(?P<separator>[^a-zA-Z0-9_{}])+(?P<part>[a-zA-Z0-9_{}]*)/', $operation->getPath(), $matches);

        $methodNameParts = [];
        $lastNonParameterPartIndex = 0;

        foreach ($matches[0] as $index => $match) {
            if ($matches['separator'][$index] === '.') {
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
            $methodNameParts[$lastNonParameterPartIndex] = Inflector::singularize($methodNameParts[$lastNonParameterPartIndex]);
        }

        return $prefix . ucfirst(implode('', $methodNameParts));
    }
}
