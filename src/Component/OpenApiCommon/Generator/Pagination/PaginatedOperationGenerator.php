<?php

namespace Jane\Component\OpenApiCommon\Generator\Pagination;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ArrayType;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\MapType;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\ObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\OpenApiCommon\Exception\InvalidPaginationConfigurationException;
use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use PhpParser\BuilderHelpers;
use PhpParser\Comment;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * Emits the `<operation>Paginated()` sibling of a client method: a generator
 * requesting the pages one after the other, lazily, and yielding the items
 * (or the page models) of each of them.
 *
 * Pages are requested through executeRawEndpoint() + parseResponse() instead
 * of executeEndpoint(): the latter returns lazy ghost proxies for GET, and
 * the link-header strategy needs the raw response headers anyway.
 */
class PaginatedOperationGenerator
{
    private readonly Naming $naming;

    public function __construct()
    {
        $this->naming = new Naming();
    }

    /**
     * @param array<mixed>         $endpoint the result of EndpointGeneratorInterface::createEndpointClass()
     * @param array<string, mixed> $config   a normalized entry config of {@see PaginationConfiguration}
     *
     * @throws InvalidPaginationConfigurationException when the configuration does not fit the operation
     */
    public function createPaginatedOperation(string $name, string $baseName, OperationGuess $operation, array $endpoint, array $config, string $entryDescription, Context $context): Stmt\ClassMethod
    {
        /** @var Param[] $methodParams */
        [$endpointName, $methodParams, $methodDoc, $returnTypes, $throwTypes] = $endpoint;
        $declaredQueryParameters = $endpoint[5] ?? null;
        $strategy = $config['strategy'];
        $prefix = \sprintf('%s on %s %s', $entryDescription, $operation->getMethod(), $operation->getPath());
        $errors = [];

        $hasQueryParameters = false;
        foreach ($methodParams as $param) {
            if ($param->var instanceof Expr\Variable && 'queryParameters' === $param->var->name) {
                $hasQueryParameters = true;
            }
        }

        if (!$hasQueryParameters) {
            $errors[] = \sprintf('%s: the operation declares no query parameter, the "%s" strategy has no way to request the next page.', $prefix, $strategy);
        } elseif (\in_array($strategy, [PaginationConfiguration::STRATEGY_CURSOR, PaginationConfiguration::STRATEGY_PAGE], true) && \is_array($declaredQueryParameters) && !\array_key_exists($config['param'], $declaredQueryParameters)) {
            $errors[] = \sprintf('%s: "%s" is not a query parameter of the operation, expected one of "%s".', $prefix, $config['param'], implode('", "', array_keys($declaredQueryParameters)));
        }

        $pageClass = $itemsPath = $itemDocType = $pageDocType = null;

        if (null === $config['items']) {
            // the response body is the JSON array of items itself
            $pageDocType = $this->resolveListType($returnTypes);

            if (null === $pageDocType) {
                $errors[] = \sprintf('%s: without an "items" path, the success response must be a JSON array ("%s" given).', $prefix, implode('|', $returnTypes));

                throw new InvalidPaginationConfigurationException($errors);
            }

            $itemDocType = substr($pageDocType, 0, -2);
        } else {
            $pageClass = $this->resolvePageClass($returnTypes, $context);

            if (null === $pageClass) {
                $errors[] = \sprintf('%s: the success response is not a single generated model ("%s"), the "items" path cannot be read from it.', $prefix, implode('|', $returnTypes));

                throw new InvalidPaginationConfigurationException($errors);
            }

            $pageDocType = '\\' . $this->classFqcn($pageClass, $context);
            $itemsPath = $this->resolvePath($pageClass, $config['items'], $context);

            if (null === $itemsPath) {
                $errors[] = \sprintf('%s: the "items" path "%s" does not resolve on the "%s" model.', $prefix, $config['items'], $pageClass->getName());
            } else {
                $itemsType = $this->unwrapNullable(end($itemsPath)->getType());

                if (!$itemsType instanceof ArrayType || $itemsType instanceof MapType) {
                    $errors[] = \sprintf('%s: the "items" path "%s" does not point at an array.', $prefix, $config['items']);
                } else {
                    $itemDocType = $itemsType->getItemType()->getDocTypeHint('');
                }
            }
        }

        $nextPath = null;
        $nextKey = match ($strategy) {
            PaginationConfiguration::STRATEGY_CURSOR => 'next-cursor',
            PaginationConfiguration::STRATEGY_NEXT_LINK => 'next',
            default => null,
        };

        if (null !== $nextKey && null !== $pageClass) {
            $nextPath = $this->resolvePath($pageClass, $config[$nextKey], $context);

            if (null === $nextPath) {
                $errors[] = \sprintf('%s: the "%s" path "%s" does not resolve on the "%s" model.', $prefix, $nextKey, $config[$nextKey], $pageClass->getName());
            }
        }

        if ([] !== $errors) {
            throw new InvalidPaginationConfigurationException($errors);
        }

        $schema = $context->getCurrentSchema();
        $paginationClass = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Client'], 'Pagination');

        if (\in_array($strategy, [PaginationConfiguration::STRATEGY_LINK_HEADER, PaginationConfiguration::STRATEGY_NEXT_LINK], true)) {
            $schema->addRequiredRuntimeFile($paginationClass);
        }

        $pageVariable = new Expr\Variable('page');
        // a null page never reaches the items: it stops the iteration first
        $items = null === $itemsPath ? $pageVariable : $this->accessor($pageVariable, $itemsPath, new Expr\Array_());
        $yieldPages = PaginationConfiguration::YIELD_PAGES === $config['yield'];

        $endpointArgs = [];
        foreach ($methodParams as $param) {
            $endpointArgs[] = new Arg($param->var);
        }

        $nullablePage = \in_array('null', $returnTypes, true);
        $loop = [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('endpoint'), new Expr\New_(new Name\FullyQualified($endpointName), $endpointArgs))),
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('response'), new Expr\MethodCall(new Expr\Variable('this'), 'executeRawEndpoint', [new Arg(new Expr\Variable('endpoint'))]))),
            new Stmt\Expression(new Expr\Assign($pageVariable, new Expr\MethodCall(new Expr\Variable('endpoint'), 'parseResponse', [
                new Arg(new Expr\Variable('response')),
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'serializer')),
            ])), [
                'comments' => [new Comment\Doc(\sprintf('/** @var %s $page */', implode('|', $returnTypes)))],
            ]),
        ];

        if ($nullablePage) {
            // an undeclared status parses to null when throw-unexpected-status-code is disabled: there is no next page to read
            $loop[] = new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $pageVariable), ['stmts' => [new Stmt\Return_()]]);
        }

        $beforeLoop = [];

        if (PaginationConfiguration::STRATEGY_PAGE === $strategy) {
            // the page strategy stops on the first empty page, which is not yielded
            $loop[] = new Stmt\Expression(new Expr\Assign(new Expr\Variable('items'), $items));
            $loop[] = new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\Array_(), new Expr\Variable('items')), ['stmts' => [new Stmt\Return_()]]);
            $items = new Expr\Variable('items');
        }

        $loop = array_merge($loop, $yieldPages
            ? [new Stmt\Expression(new Expr\Yield_($pageVariable))]
            : [new Stmt\Foreach_($items, new Expr\Variable('item'), ['stmts' => [new Stmt\Expression(new Expr\Yield_(new Expr\Variable('item')))]])]
        );

        if (null !== $config['max-pages']) {
            $beforeLoop[] = new Stmt\Expression(new Expr\Assign(new Expr\Variable('pageCount'), new Scalar\Int_(0)));
            $loop[] = new Stmt\If_(
                new Expr\BinaryOp\GreaterOrEqual(new Expr\PreInc(new Expr\Variable('pageCount')), new Scalar\Int_($config['max-pages'])),
                ['stmts' => [new Stmt\Return_()]]
            );
        }

        $queryParameters = new Expr\Variable('queryParameters');

        switch ($strategy) {
            case PaginationConfiguration::STRATEGY_CURSOR:
                $paramFetch = new Expr\ArrayDimFetch($queryParameters, new Scalar\String_($config['param']));
                $cursor = new Expr\Variable('cursor');
                $loop[] = new Stmt\Expression(new Expr\Assign($cursor, $this->accessor($pageVariable, $nextPath, new Expr\ConstFetch(new Name('null')))));
                $loop[] = new Stmt\If_(
                    new Expr\BinaryOp\BooleanOr(
                        new Expr\BinaryOp\BooleanOr(
                            new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $cursor),
                            new Expr\BinaryOp\Identical(new Scalar\String_(''), $cursor)
                        ),
                        // a server repeating the same cursor would loop forever
                        new Expr\BinaryOp\Identical($cursor, new Expr\BinaryOp\Coalesce($paramFetch, new Expr\ConstFetch(new Name('null'))))
                    ),
                    ['stmts' => [new Stmt\Return_()]]
                );
                $loop[] = new Stmt\Expression(new Expr\Assign($paramFetch, $cursor));
                break;
            case PaginationConfiguration::STRATEGY_PAGE:
                $paramFetch = new Expr\ArrayDimFetch($queryParameters, new Scalar\String_($config['param']));
                $beforeLoop[] = new Stmt\Expression(new Expr\AssignOp\Coalesce($paramFetch, BuilderHelpers::normalizeValue($declaredQueryParameters[$config['param']]['default'] ?? 1)));
                $loop[] = new Stmt\Expression(new Expr\PreInc($paramFetch));
                break;
            case PaginationConfiguration::STRATEGY_LINK_HEADER:
            case PaginationConfiguration::STRATEGY_NEXT_LINK:
                $nextLink = new Expr\Variable('nextLink');
                $nextQueryParameters = new Expr\Variable('nextQueryParameters');

                if (PaginationConfiguration::STRATEGY_LINK_HEADER === $strategy) {
                    $loop[] = new Stmt\Expression(new Expr\Assign($nextLink, new Expr\StaticCall(new Name\FullyQualified($paginationClass), 'nextLinkFromHeaders', [
                        new Arg(new Expr\MethodCall(new Expr\Variable('response'), 'getHeaders', [new Arg(new Expr\ConstFetch(new Name('false')))])),
                    ])));
                    $isLastPage = new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $nextLink);
                } else {
                    $loop[] = new Stmt\Expression(new Expr\Assign($nextLink, $this->accessor($pageVariable, $nextPath, new Expr\ConstFetch(new Name('null')))));
                    $isLastPage = new Expr\BinaryOp\BooleanOr(
                        new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $nextLink),
                        new Expr\BinaryOp\Identical(new Scalar\String_(''), $nextLink)
                    );
                }

                $loop[] = new Stmt\If_($isLastPage, ['stmts' => [new Stmt\Return_()]]);
                $nextQueryParametersArgs = [
                    new Arg($nextLink),
                    new Arg(new Expr\MethodCall(new Expr\Variable('endpoint'), 'getUri')),
                    new Arg($queryParameters),
                ];

                // the values of the link query string are strings: the scalar ones are cast to their declared type
                $scalarTypes = $this->getScalarTypes($declaredQueryParameters ?? []);
                if ([] !== $scalarTypes) {
                    $nextQueryParametersArgs[] = new Arg(BuilderHelpers::normalizeValue($scalarTypes));
                }

                $loop[] = new Stmt\Expression(new Expr\Assign($nextQueryParameters, new Expr\StaticCall(new Name\FullyQualified($paginationClass), 'nextQueryParameters', $nextQueryParametersArgs)));
                // a next link leading to the same query would loop forever
                $loop[] = new Stmt\If_(new Expr\BinaryOp\Identical($nextQueryParameters, $queryParameters), ['stmts' => [new Stmt\Return_()]]);
                $loop[] = new Stmt\Expression(new Expr\Assign($queryParameters, $nextQueryParameters));
                break;
        }

        $yieldedType = $yieldPages ? $pageDocType : (null === $itemDocType ? 'mixed' : (string) $itemDocType);

        return new Stmt\ClassMethod($name, [
            'flags' => Modifiers::PUBLIC,
            'params' => $methodParams,
            'returnType' => new Name\FullyQualified('Generator'),
            'stmts' => array_merge($beforeLoop, [
                new Stmt\While_(new Expr\ConstFetch(new Name('true')), $loop),
            ]),
        ], [
            'comments' => [new Comment\Doc($this->getDocumentation($baseName, $strategy, $yieldPages, $methodDoc, $throwTypes, $yieldedType))],
        ]);
    }

    /**
     * @param string[] $throwTypes
     */
    private function getDocumentation(string $baseName, string $strategy, bool $yieldPages, string $methodDoc, array $throwTypes, string $yieldedType): string
    {
        $lines = [
            '/**',
            \sprintf(' * Iterates over every page of {@see self::%s()} ("%s" pagination), yielding %s.', $baseName, $strategy, $yieldPages ? 'each page' : 'the items of each page'),
            ' * A page is only requested once the previous one has been consumed.',
        ];

        // keep the parameter documentation of the base method (multi-line array shapes included), without its description
        $inTags = false;
        foreach (explode("\n", $methodDoc) as $line) {
            $inTags = $inTags || str_starts_with(ltrim($line), '* @');

            if ($inTags && '*/' !== trim($line)) {
                $lines[] = $line;
            }
        }

        foreach ($throwTypes as $throwType) {
            $lines[] = ' * @throws ' . $throwType;
        }

        $lines[] = ' *';
        $lines[] = \sprintf(' * @return \Generator<int, %s>', $yieldedType);
        $lines[] = ' */';

        return implode("\n", $lines);
    }

    /**
     * @param array<string, array{default: mixed, types: list<string>}> $declaredQueryParameters
     *
     * @return array<string, string> the int, float or bool query parameters, with their type
     */
    private function getScalarTypes(array $declaredQueryParameters): array
    {
        $scalarTypes = [];

        foreach ($declaredQueryParameters as $name => $declaredQueryParameter) {
            if (1 === \count($declaredQueryParameter['types']) && \in_array($declaredQueryParameter['types'][0], ['int', 'float', 'bool'], true)) {
                $scalarTypes[$name] = $declaredQueryParameter['types'][0];
            }
        }

        return $scalarTypes;
    }

    /**
     * The model of the success response, if it is a single generated model.
     *
     * @param string[] $returnTypes
     */
    private function resolvePageClass(array $returnTypes, Context $context): ?ClassGuess
    {
        $modelTypes = [];

        foreach ($returnTypes as $type) {
            if ('null' === $type) {
                continue;
            }

            if (!str_starts_with($type, '\\') || str_contains($type, '[]') || str_contains($type, '|')) {
                return null;
            }

            $modelTypes[] = substr($type, 1);
        }

        if (1 !== \count($modelTypes)) {
            return null;
        }

        return $this->findClass($modelTypes[0], $context);
    }

    /**
     * The list type ("\Ns\Model\Foo[]") of the success response, if it is a
     * JSON array of a single type.
     *
     * @param string[] $returnTypes
     */
    private function resolveListType(array $returnTypes): ?string
    {
        $listTypes = array_values(array_filter($returnTypes, static fn (string $type): bool => 'null' !== $type));

        if (1 !== \count($listTypes) || !str_ends_with($listTypes[0], '[]') || str_contains($listTypes[0], '|')) {
            return null;
        }

        return $listTypes[0];
    }

    private function findClass(string $fqcn, Context $context): ?ClassGuess
    {
        foreach ($context->getRegistry()->getSchemas() as $schema) {
            foreach ($schema->getClasses() as $class) {
                if ($this->classFqcnInSchema($class, $schema->getNamespace()) === $fqcn) {
                    return $class;
                }
            }
        }

        return null;
    }

    private function classFqcn(ClassGuess $class, Context $context): string
    {
        foreach ($context->getRegistry()->getSchemas() as $schema) {
            if (null !== $schema->getClass($class->getReference())) {
                return $this->classFqcnInSchema($class, $schema->getNamespace());
            }
        }

        return $this->classFqcnInSchema($class, $context->getCurrentSchema()->getNamespace());
    }

    private function classFqcnInSchema(ClassGuess $class, string $namespace): string
    {
        return $this->naming->getModelNamespace($namespace, $class->getSubNamespace()) . '\\' . $class->getName();
    }

    /**
     * Resolves a dotted property path ("meta.nextCursor") into the chain of
     * guessed properties. Property names may contain dots themselves
     * ("@odata.nextLink"): the longest property name matching the path wins.
     *
     * @return non-empty-list<Property>|null
     */
    private function resolvePath(ClassGuess $class, string $path, Context $context): ?array
    {
        $properties = [];
        $remaining = $path;

        while (true) {
            $match = null;
            $rest = null;

            foreach ($class->getProperties() as $property) {
                $propertyName = $property->getName();

                if ($propertyName === $remaining) {
                    $match = $property;
                    $rest = null;
                    break;
                }

                if (str_starts_with($remaining, $propertyName . '.') && (null === $match || \strlen($propertyName) > \strlen($match->getName()))) {
                    $match = $property;
                    $rest = substr($remaining, \strlen($propertyName) + 1);
                }
            }

            if (null === $match) {
                return null;
            }

            $properties[] = $match;

            if (null === $rest) {
                return $properties;
            }

            $type = $this->unwrapNullable($match->getType());
            $nextClass = $type instanceof ObjectType ? $this->findClass($type->getFqdn(false), $context) : null;

            if (null === $nextClass) {
                return null;
            }

            $class = $nextClass;
            $remaining = $rest;
        }
    }

    private function unwrapNullable(Type $type): Type
    {
        if (!$type instanceof MultipleType) {
            return $type;
        }

        $types = array_values(array_filter($type->getTypes(), static fn (Type $subType): bool => Type::TYPE_NULL !== $subType->getName()));

        return 1 === \count($types) ? $types[0] : $type;
    }

    /**
     * `$page->a->b ?? <default>`: the coalescing also covers missing
     * (uninitialized) and null intermediate properties.
     *
     * @param list<Property> $path
     */
    private function accessor(Expr $page, array $path, Expr $default): Expr
    {
        $expression = $page;

        foreach ($path as $property) {
            $expression = new Expr\PropertyFetch($expression, $property->getPhpName());
        }

        return new Expr\BinaryOp\Coalesce($expression, $default);
    }
}
