<?php

namespace Jane\Component\OpenApiCommon\Generator\Endpoint;

use Jane\Component\OpenApiCommon\Guesser\Guess\OperationGuess;
use Jane\Component\OpenApiRuntime\Client\FetchMode;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

trait GetFetchModeTrait
{
    /**
     * Emits the getFetchMode() method of an endpoint: the resolved mode for
     * GET/HEAD operations (x-fetch-mode > default-fetch-mode > lazy) and a
     * hardcoded eager for every other verb.
     */
    public function getFetchModeMethod(OperationGuess $operation): Stmt\ClassMethod
    {
        $method = strtoupper($operation->getMethod());
        $fetchMode = \in_array($method, [OperationGuess::GET, OperationGuess::HEAD], true)
            ? $operation->getFetchMode()
            : FetchMode::Eager->value;

        return new Stmt\ClassMethod('getFetchMode', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Name('string'),
            'stmts' => [new Stmt\Return_(new Expr\PropertyFetch(
                new Expr\ClassConstFetch(new Name\FullyQualified(FetchMode::class), ucfirst($fetchMode)),
                'value'
            ))],
        ]);
    }

    /**
     * Emits the getTargetClass() method of an endpoint: the generated model
     * class of the success response, usable to build a lazy ghost proxy —
     * null when the response denormalizes to anything else (arrays, scalars,
     * several distinct models across statuses, no model at all).
     *
     * @param string[] $outputTypes the docblock return types of the endpoint's
     *                              transformResponseBody() (e.g. '\Ns\Model\Foo', 'null', 'string')
     */
    public function getTargetClassMethod(OperationGuess $operation, array $outputTypes): Stmt\ClassMethod
    {
        $targetClass = $this->resolveTargetClass($operation, $outputTypes);

        $return = null !== $targetClass
            ? new Stmt\Return_(new Expr\ClassConstFetch(
                new Name\FullyQualified($targetClass),
                'class'
            ))
            : new Stmt\Return_(new Expr\ConstFetch(new Name('null')));

        return new Stmt\ClassMethod('getTargetClass', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Node\NullableType(new Name('string')),
            'stmts' => [$return],
            'comments' => [
                <<<'EOD'
/**
 * The model class faked by the lazy ghost proxy for this endpoint's success
 * response, or null when it denormalizes to anything else (arrays, scalars,
 * several distinct models...): deferred fetch modes degrade to eager then.
 */
EOD,
            ],
        ]);
    }

    /**
     * The single success model class of an operation, or null: deferred fetch
     * modes are only usable on GET/HEAD, and the runtime Client guards ghost
     * support on the running PHP version.
     */
    private function resolveTargetClass(OperationGuess $operation, array $outputTypes): ?string
    {
        $method = strtoupper($operation->getMethod());

        if (!\in_array($method, [OperationGuess::GET, OperationGuess::HEAD], true)) {
            return null;
        }

        $modelTypes = [];

        foreach ($outputTypes as $type) {
            if ('null' === $type) {
                continue;
            }

            // Scalars ('string', 'int', ...), keys 'myscalar' or explicit
            // arrays of a single class ('\Ns\Model[]') are not ghostable; a
            // single fully-qualified model class is required.
            if (!str_starts_with($type, '\\') || str_contains($type, '[]') || str_contains($type, '|')) {
                return null;
            }

            $modelTypes[] = $type;
        }

        return \count($modelTypes) === 1 ? substr($modelTypes[0], 1) : null;
    }
}
