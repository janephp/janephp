<?php

namespace Jane\Component\AutoMapper\Extractor;

use Jane\Component\AutoMapper\Attribute\MapToContext;
use Jane\Component\AutoMapper\Exception\CompileException;
use Jane\Component\AutoMapper\MapperContext;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/**
 * Read accessor tell how to read from a property.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class ReadAccessor
{
    public const TYPE_METHOD = 1;
    public const TYPE_PROPERTY = 2;
    public const TYPE_ARRAY_DIMENSION = 3;
    public const TYPE_SOURCE = 4;

    private $type;

    private $name;

    private $sourceClass;

    private $private;

    public function __construct(int $type, string $name, string $sourceClass = null, $private = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->sourceClass = $sourceClass;
        $this->private = $private;

        if (self::TYPE_METHOD === $this->type && null === $this->sourceClass) {
            throw new \InvalidArgumentException('Source class must be provided when using "method" type.');
        }
    }

    /**
     * Get AST expression for reading property from an input.
     *
     * @throws CompileException
     */
    public function getExpression(Expr\Variable $input, string $fieldName): Expr
    {
        if (self::TYPE_METHOD === $this->type) {
            $methodCallArguments = [];

            if (\PHP_VERSION_ID >= 80000 && class_exists($this->sourceClass)) {
                $parameters = (new \ReflectionMethod($this->sourceClass, $this->name))->getParameters();

                foreach ($parameters as $parameter) {
                    if ($attribute = ($parameter->getAttributes(MapToContext::class)[0] ?? null)) {
                        // generates code similar to:
                        // $value->getValue(
                        //     $context['map_to_accessor_parameter']['some_key'] ?? throw new \InvalidArgumentException('error message');
                        // )

                        $methodCallArguments[] = new Arg(
                            new Expr\BinaryOp\Coalesce(
                                new Expr\ArrayDimFetch(
                                    new Expr\ArrayDimFetch(
                                        new Expr\Variable('context'),
                                        new Scalar\String_(MapperContext::MAP_TO_ACCESSOR_PARAMETER)
                                    ),
                                    new Scalar\String_($attribute->newInstance()->getContextName())
                                ),
                                new Expr\Throw_(
                                    new Expr\New_(
                                        new Name\FullyQualified(\InvalidArgumentException::class),
                                        [
                                            new Arg(
                                                new Scalar\String_(
                                                    "Parameter \"\${$parameter->getName()}\" of method \"{$this->sourceClass}\"::\"{$this->name}()\" is configured to be mapped to context but no value was found in the context."
                                                )
                                            ),
                                        ]
                                    )
                                )
                            )
                        );
                    } elseif (!$parameter->isDefaultValueAvailable()) {
                        throw new \InvalidArgumentException(
                            "Accessors method \"{$this->sourceClass}\"::\"{$this->name}()\" parameters must have either a default value or the #[MapToContext] attribute."
                        );
                    }
                }
            }

            if ($this->private) {
                return new Expr\FuncCall(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($fieldName)),
                    [
                        new Arg($input),
                    ]
                );
            }

            return new Expr\MethodCall($input, $this->name, $methodCallArguments);
        }

        if ($this->type === self::TYPE_PROPERTY) {
            if ($this->private) {
                return new Expr\FuncCall(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($this->name)),
                    [
                        new Arg($input),
                    ]
                );
            }

            return new Expr\PropertyFetch($input, $this->name);
        }

        if (self::TYPE_ARRAY_DIMENSION === $this->type) {
            return new Expr\ArrayDimFetch($input, new Scalar\String_($this->name));
        }

        if (self::TYPE_SOURCE === $this->type) {
            return $input;
        }

        throw new CompileException('Invalid accessor for read expression');
    }

    /**
     * Get AST expression for binding closure when dealing with a private property.
     */
    public function getExtractCallback($className): ?Expr
    {
        if (!in_array($this->type, [self::TYPE_PROPERTY, self::TYPE_METHOD]) || !$this->private) {
            return null;
        }

        return new Expr\StaticCall(new Name\FullyQualified(\Closure::class), 'bind', [
            new Arg(
                new Expr\Closure([
                    'params' => [
                        new Param(new Expr\Variable('object')),
                    ],
                    'stmts' => [
                        new Stmt\Return_(
                            $this->type === self::TYPE_PROPERTY
                                ? new Expr\PropertyFetch(new Expr\Variable('object'), $this->name)
                                : new Expr\MethodCall(new Expr\Variable('object'), $this->name)
                        ),
                    ],
                ])
            ),
            new Arg(new Expr\ConstFetch(new Name('null'))),
            new Arg(new Scalar\String_(new Name\FullyQualified($className))),
        ]);
    }

    public function getType(): int
    {
        return $this->type;
    }
}
