<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExample;
use Jane\OpenApi\JsonSchema\Version3\Model\MediaTypeWithExamples;
use Jane\OpenApi\JsonSchema\Version3\Model\Reference;
use Jane\OpenApi\JsonSchema\Version3\Model\RequestBody;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Param;

class RequestBodyGenerator
{
    /** @var RequestBodyContentGeneratorInterface[] */
    private $generators = [];

    /** @var RequestBodyContentGeneratorInterface */
    private $defaultRequestBodyGenerator;

    public function __construct(RequestBodyContentGeneratorInterface $defaultRequestBodyGenerator)
    {
        $this->defaultRequestBodyGenerator = $defaultRequestBodyGenerator;
    }

    public function addRequestBodyGenerator(array $contentTypes, RequestBodyContentGeneratorInterface $requestBodyGenerator)
    {
        foreach ($contentTypes as $contentType) {
            $this->generators[$contentType] = $requestBodyGenerator;
        }
    }

    /**
     * @param $requestBody RequestBody|Reference
     */
    public function generateMethodParameter($requestBody, string $reference, Context $context): ?Param
    {
        if (!$requestBody->getContent()) {
            return null;
        }

        $name = 'requestBody';
        [$types, $onlyArray] = $this->getTypes($requestBody, $reference, $context);
        $paramType = \count($types) === 1 ? $types[0] : null;

        if ($onlyArray) {
            $paramType = 'array';
        }

        return new Param($name, null, $paramType);
    }

    /**
     * @param $requestBody RequestBody|Reference
     */
    public function generateMethodDocParameter($requestBody, string $reference, Context $context)
    {
        [$types, $_] = $this->getTypes($requestBody, $reference, $context);

        return sprintf(' * @param %s $%s %s', implode('|', $types), 'requestBody', '');
    }

    private function getTypes(?RequestBody $requestBody, string $reference, Context $context): array
    {
        $types = [];

        if (!$requestBody || !$requestBody->getContent()) {
            return $types;
        }

        $onlyArray = null;

        foreach ($requestBody->getContent() as $contentType => $content) {
            $generator = $this->defaultRequestBodyGenerator;

            if (isset($this->generators[$contentType])) {
                $generator = $this->generators[$contentType];
            }

            [$newTypes, $isArray] = $generator->getTypes($content, $reference . '/content/' . $contentType, $context);

            if ($onlyArray === null) {
                $onlyArray = $isArray;
            } else {
                $onlyArray = $onlyArray && $isArray;
            }

            $types = array_merge($types, $newTypes);
        }

        return [array_unique($types), $onlyArray];
    }

    public function getSerializeStatements(?RequestBody $requestBody, string $reference, Context $context): array
    {
        if (!$requestBody || !$requestBody->getContent()) {
            return [
                new Stmt\Return_(new Expr\Array_([
                    new Expr\Array_(),
                    new Expr\ConstFetch(new Name('null')),
                ])),
            ];
        }

        $statements = [];

        foreach ($requestBody->getContent() as $contentType => $content) {
            $generator = $this->defaultRequestBodyGenerator;

            if (isset($this->generators[$contentType])) {
                $generator = $this->generators[$contentType];
            }

            $statements[] = new Stmt\If_(
                $generator->getTypeCondition($content, $reference . '/content/' . $contentType, $context),
                [
                    'stmts' => $generator->getSerializeStatements($content, $contentType, $reference . '/content/' . $contentType, $context),
                ]
            );
        }

        $statements[] = new Stmt\Return_(new Expr\Array_([
            new Expr\Array_(),
            new Expr\ConstFetch(new Name('null')),
        ]));

        return $statements;
    }
}
