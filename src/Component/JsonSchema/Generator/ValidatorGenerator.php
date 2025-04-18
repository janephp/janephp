<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Optional;
use Symfony\Component\Validator\Constraints\Required;

class ValidatorGenerator implements GeneratorInterface
{
    public const FILE_TYPE_VALIDATOR = 'validator';
    public const VALIDATOR_INTERFACE_NAME = 'ValidatorInterface';
    public const VALIDATOR_EXCEPTION_NAME = 'ValidationException';

    /** @var Naming */
    private $naming;

    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $registry = $context->getRegistry();
        $namespace = $schema->getNamespace() . '\\Validator';

        foreach ($schema->getClasses() as $class) {
            if ($class->hasValidatorGuesses()) {
                $className = $this->naming->getConstraintName($class->getName());
                $collectionItemsConstraints = [];
                $collectionItems = [];

                foreach ($class->getPropertyValidatorGuesses() as $name => $propertyGuesses) {
                    $constraints = [];
                    foreach ($propertyGuesses as $propertyGuess) {
                        $constraints[] = new Expr\ArrayItem($this->generateConstraint($propertyGuess));
                    }

                    $collectionItemsConstraints[$name] = $constraints;
                }

                $optionsVariable = new Expr\Variable('options');

                $constraintsItems = [];
                /** @var ValidatorGuess $classGuess */
                foreach ($class->getValidatorGuesses() as $classGuess) {
                    if ($classGuess->getSubProperty() === null) {
                        $constraintsItems[] = new Expr\ArrayItem($this->generateConstraint($classGuess));
                    } else {
                        $localNamespace = $namespace;
                        if (null !== $classGuess->getClassReference()) {
                            foreach ($registry->getSchemas() as $localSchema) {
                                if (null !== $localSchema->getClass($classGuess->getClassReference())) {
                                    $localNamespace = $localSchema->getNamespace() . '\\Validator';
                                }
                            }
                        }

                        $classGuess->setConstraintClass(\sprintf('%s\%s', $localNamespace, $classGuess->getConstraintClass()));

                        if (!\array_key_exists($classGuess->getSubProperty(), $collectionItemsConstraints)) {
                            $collectionItemsConstraints[$classGuess->getSubProperty()] = [$this->generateConstraint($classGuess)];
                        } else {
                            $collectionItemsConstraints[$classGuess->getSubProperty()] = array_merge($collectionItemsConstraints[$classGuess->getSubProperty()], [$this->generateConstraint($classGuess)]);
                        }
                    }
                }

                foreach ($collectionItemsConstraints as $name => $constraints) {
                    $collectionClass = $class->isRequired($name) ? Required::class : Optional::class;
                    $collectionItems[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified($collectionClass), [
                        new Node\Arg(new Expr\Array_($constraints)),
                    ]), new Scalar\String_($name));
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
                                'getConstraints',
                                [
                                    'flags' => Modifiers::PROTECTED,
                                    'params' => [new Node\Param($optionsVariable)],
                                    'stmts' => [
                                        new Node\Stmt\Return_(new Expr\Array_($constraintsItems)),
                                    ],
                                    'returnType' => new Node\Identifier('array'),
                                ]
                            ),
                        ],
                        'extends' => new Node\Name('\\Symfony\\Component\\Validator\\Constraints\\Compound'),
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
