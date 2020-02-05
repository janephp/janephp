<?php

namespace Jane\OpenApi\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApi\JsonSchema\Model\Response;
use Jane\OpenApi\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Naming\OperationUrlNaming as CommonOperationUrlNaming;
use Jane\OpenApiCommon\Operation\Operation;

class OperationUrlNaming extends CommonOperationUrlNaming
{
    const FORBIDDEN_EXTENSIONS = [
        '.json',
        '.php',
        '.asp',
    ];

    protected function getUniqueName(Operation $operation): string
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
            $methodNameParts[$lastNonParameterPartIndex] = Inflector::singularize($methodNameParts[$lastNonParameterPartIndex]);
        }

        return $prefix . ucfirst(implode('', $methodNameParts));
    }
}
