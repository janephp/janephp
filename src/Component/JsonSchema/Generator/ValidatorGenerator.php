<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\Constraints\Required;
use Symfony\Component\Validator\Validation;

class ValidatorGenerator implements GeneratorInterface
{
    const FILE_TYPE_VALIDATOR = 'validator';
    const VALIDATOR_INTERFACE_NAME = 'ValidatorInterface';
    const VALIDATOR_EXCEPTION_NAME = 'ValidationException';

    /** @var Naming */
    private $naming;

    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $namespace = $schema->getNamespace() . '\\Validator';

        foreach ($schema->getClasses() as $class) {
            if ($class->hasValidatorGuesses()) {
                $className = $this->naming->getValidatorName($class->getName());
                $collectionItems = [];

                foreach ($class->getPropertyValidatorGuesses() as $name => $propertyGuesses) {
                    $constraints = [];
                    foreach ($propertyGuesses as $propertyGuess) {
                        $constraints[] = new Expr\ArrayItem($this->generateConstraint($propertyGuess));
                    }

                    $collectionClass = $class->isRequired($name) ? Required::class : Optional::class;
                    $collectionItems[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified($collectionClass), [
                        new Node\Arg(new Expr\Array_($constraints)),
                    ]), new Scalar\String_($name));
                }

                $dataVariable = new Expr\Variable('data');
                $constraintsVariable = new Expr\Variable('constraints');
                $validatorVariable = new Expr\Variable('validator');
                $violationsVariable = new Expr\Variable('violations');

                $constraintsItems = [];
                foreach ($class->getValidatorGuesses() as $classGuess) {
                    $constraintsItems[] = new Expr\ArrayItem($this->generateConstraint($classGuess));
                }

                if (\count($collectionItems) > 0) {
                    $allowExtraFields = $class->getObject()->getAdditionalProperties();
                    if (null === $allowExtraFields || $allowExtraFields) {
                        $allowExtraFields = 'true';
                    } else {
                        $allowExtraFields = 'false';
                    }

                    $constraintsItems[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified(Collection::class), [
                        new Node\Arg(new Expr\Array_([
                            new Expr\ArrayItem(new Expr\Array_($collectionItems), new Scalar\String_('fields')),
                            new Expr\ArrayItem(new Expr\ConstFetch(new Node\Name($allowExtraFields)), new Scalar\String_('allowExtraFields')),
                        ])),
                    ]));
                }

                $class = new Node\Stmt\Class_(
                    $className,
                    [
                        'stmts' => [
                            new Node\Stmt\ClassMethod(
                                'validate',
                                [
                                    'type' => Node\Stmt\Class_::MODIFIER_PUBLIC,
                                    'params' => [new Node\Param($dataVariable)],
                                    'stmts' => [
                                        new Node\Stmt\Expression(new Expr\Assign($constraintsVariable, new Expr\Array_($constraintsItems))),
                                        new Node\Stmt\Expression(new Expr\Assign($validatorVariable, new Expr\StaticCall(new Node\Name\FullyQualified(Validation::class), 'createValidator'))),
                                        new Node\Stmt\Expression(new Expr\Assign($violationsVariable, new Expr\MethodCall($validatorVariable, 'validate', [
                                            new Node\Arg($dataVariable),
                                            new Node\Arg($constraintsVariable),
                                        ]))),
                                        new Node\Stmt\If_(new Expr\BinaryOp\Greater(new Expr\MethodCall($violationsVariable, 'count'), new Scalar\LNumber(0)), ['stmts' => [
                                            new Node\Stmt\Throw_(new Expr\New_(new Node\Name('\\' . $namespace . '\\' . self::VALIDATOR_EXCEPTION_NAME), [new Node\Arg($violationsVariable)])),
                                        ]]),
                                    ],
                                    'returnType' => 'void',
                                ]
                            ),
                        ],
                        'implements' => [new Node\Name('\\' . $namespace . '\\' . self::VALIDATOR_INTERFACE_NAME)],
                    ]
                );

                $namespaceStmt = new Node\Stmt\Namespace_(new Node\Name($namespace), [$class]);
                $schema->addFile(new File($schema->getDirectory() . '/Validator/' . $className . '.php', $namespaceStmt, self::FILE_TYPE_VALIDATOR));
            }
        }
    }

    private function generateConstraint(ValidatorGuess $guess): Expr
    {
        $args = [];
        foreach ($guess->getArguments() as $argName => $argument) {
            $value = null;
            if (\is_array($argument)) {
                $values = [];
                foreach ($argument as $item) {
                    $values[] = new Expr\ArrayItem(new Scalar\String_($item));
                }
                $value = new Expr\Array_($values);
            } elseif (\is_string($argument)) {
                $value = new Scalar\String_($argument);
            } elseif (\is_int($argument)) {
                $value = new Scalar\LNumber($argument);
            } elseif (\is_float($argument)) {
                $value = new Scalar\DNumber($argument);
            }

            if (null !== $value) {
                $args[] = new Expr\ArrayItem($value, new Scalar\String_($argName));
            }
        }

        return new Expr\New_(new Node\Name\FullyQualified($guess->getConstraintClass()), [
            new Node\Arg(new Expr\Array_($args)),
        ]);
    }
}
