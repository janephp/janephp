<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

use Jane\Component\JsonSchema\Generator\Context\Context;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use Psr\Http\Message\StreamInterface;

/**
 * Represent a binary string (OpenAPI type: string + format: binary), which can
 * be provided as a plain string, a stream resource or a PSR-7 StreamInterface.
 */
class BinaryStringType extends Type
{
    public function __construct(?object $object)
    {
        parent::__construct($object, 'binary-string');
    }

    public function getTypeHint(string $namespace): ?Name
    {
        // 'resource' can not be used as a native PHP type hint, so no native
        // hint is emitted and the union is documented in the docblock instead.
        return null;
    }

    public function getDocTypeHint(string $namespace): string|Name|null
    {
        return 'string|resource|\\' . StreamInterface::class;
    }

    public function createDenormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        return [[], $input];
    }

    public function createNormalizationStatement(Context $context, Expr $input, bool $normalizerFromObject = true): array
    {
        return [[], $input];
    }

    public function createConditionStatement(Expr $input): Expr
    {
        // is_string($input) || is_resource($input) || $input instanceof \Psr\Http\Message\StreamInterface
        return new Expr\BinaryOp\LogicalOr(
            new Expr\BinaryOp\LogicalOr(
                new Expr\FuncCall(new Name('is_string'), [new Arg($input)]),
                new Expr\FuncCall(new Name('is_resource'), [new Arg($input)])
            ),
            new Expr\Instanceof_($input, new Name('\\' . StreamInterface::class))
        );
    }

    public function createNormalizationConditionStatement(Expr $input): Expr
    {
        return $this->createConditionStatement($input);
    }
}
