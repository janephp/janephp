<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\OpenApi\JsonSchema\Version3\Model\RequestBody;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

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

    public function getTypes(RequestBody $requestBody, Context $context): array
    {
        if (!$requestBody->getContent()) {
            return [];
        }

        $hasDefaultType = false;
        $types = [];

        foreach ($requestBody->getContent() as $contentType => $content) {
            if (!isset($this->generators[$contentType])) {
                $hasDefaultType = true;

                continue;
            }

            $generator = $this->generators[$contentType];
            $types = array_merge($types, $generator->getTypes());
        }

        if ($hasDefaultType) {
            $types = array_merge($types, $this->defaultRequestBodyGenerator->getTypes());
        }

        return array_unique($types);
    }

    public function getSerializeStatements(?RequestBody $requestBody, $reference, Context $context): array
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
