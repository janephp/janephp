<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\DefaultAdditionalPropertiesTrait;
use Jane\Component\JsonSchema\Guesser\Guess\NonObjectGuessInterface;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Registry\Registry;
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
    use DefaultAdditionalPropertiesTrait;

    public const FILE_TYPE_VALIDATOR = 'validator';
    public const VALIDATOR_INTERFACE_NAME = 'ValidatorInterface';
    public const VALIDATOR_EXCEPTION_NAME = 'ValidationException';

    public function __construct(
        private readonly Naming $naming,
        ?bool $defaultAdditionalProperties = null,
    ) {
        $this->defaultAdditionalProperties = $defaultAdditionalProperties;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $registry = $context->getRegistry();

        foreach ($schema->getClasses() as $class) {
            if ($class instanceof NonObjectGuessInterface) {
                continue;
            }

            // The Constraint class is always generated, even without any validator guess: normalizers and
            // parent Compound constraints reference it unconditionally, so skipping it would leave a
            // reference to a class that does not exist, fataling at runtime.
            $subNamespace = $class->getSubNamespace();
            $namespace = $this->naming->getValidatorNamespace($schema->getNamespace(), $subNamespace);
            $className = $this->naming->getConstraintName($class->getName());

            $constraint = new Node\Stmt\Class_(
                $className,
                [
                    'stmts' => [
                        new Node\Stmt\ClassMethod(
                            'getConstraints',
                            [
                                'flags' => Modifiers::PROTECTED,
                                'params' => [new Node\Param(new Expr\Variable('options'))],
                                'stmts' => [
                                    new Node\Stmt\Return_(new Expr\Array_($this->createConstraints($class, $registry, $namespace))),
                                ],
                                'returnType' => new Node\Identifier('array'),
                            ]
                        ),
                    ],
                    'extends' => new Node\Name('\\Symfony\\Component\\Validator\\Constraints\\Compound'),
                ]
            );

            $namespaceStmt = new Node\Stmt\Namespace_(new Node\Name($namespace), [$constraint]);
            $schema->addFile(new File($this->naming->getArtifactPath($schema->getDirectory(), 'Validator', $subNamespace) . '/' . $className . '.php', $namespaceStmt, self::FILE_TYPE_VALIDATOR));
        }
    }

    /**
     * Build the constraint array emitted by a validator class: the class level
     * guesses, the sub-property guesses (references to other validators) and
     * the property collection.
     */
    /**
     * Build the constraint array emitted by a validator class: the class level
     * guesses, the sub-property guesses (references to other validators) and
     * the property collection.
     */
    private function createConstraints($class, Registry $registry, string $namespace): array
    {
        $collectionItemsConstraints = [];
        $collectionItems = [];
        $constraintsItems = [];

        foreach ($class->getPropertyValidatorGuesses() as $name => $propertyGuesses) {
            $constraints = [];
            foreach ($propertyGuesses as $propertyGuess) {
                $constraints[] = new Expr\ArrayItem($this->generateConstraint($propertyGuess));
            }

            $collectionItemsConstraints[$name] = $constraints;
        }

        /** @var ValidatorGuess $classGuess */
        foreach ($class->getValidatorGuesses() as $classGuess) {
            if ($classGuess->getSubProperty() === null) {
                $constraintsItems[] = new Expr\ArrayItem($this->generateConstraint($classGuess));
            } else {
                $localNamespace = $namespace;
                if (null !== $classGuess->getClassReference()) {
                    foreach ($registry->getSchemas() as $localSchema) {
                        if (null !== ($referencedClass = $localSchema->getClass($classGuess->getClassReference()))) {
                            $localNamespace = $this->naming->getValidatorNamespace($localSchema->getNamespace(), $referencedClass->getSubNamespace());
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
            // Same resolution as the model generator: the explicit
            // additionalProperties value from the specification wins, then
            // the `default-additional-properties` option, then the
            // component default. Unspecified keeps the legacy validator
            // default (extra fields allowed).
            $additionalProperties = $this->getEffectiveAdditionalProperties($class->getObject());
            $allowExtraFields = (null === $additionalProperties || $additionalProperties) ? 'true' : 'false';

            $constraintsItems[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified(Collection::class), [
                new Node\Arg(
                    new Expr\Array_($collectionItems),
                    name: new Node\Identifier('fields'),
                ),
                new Node\Arg(
                    new Expr\ConstFetch(new Node\Name($allowExtraFields)),
                    name: new Node\Identifier('allowExtraFields'),
                ),
            ]));
        }

        return $constraintsItems;
    }

    private function generateConstraint(ValidatorGuess $guess): Expr
    {
        $args = [];
        foreach ($guess->getArguments() as $argName => $argument) {
            $value = $this->generateConstraintArgument($argument);

            if (null !== $value) {
                $args[] = new Node\Arg($value, name: new Node\Identifier($argName));
            }
        }

        return new Expr\New_(new Node\Name\FullyQualified($guess->getConstraintClass()), $args);
    }

    private function generateConstraintArgument($argument): ?Expr
    {
        if ($argument instanceof ValidatorGuess) {
            return $this->generateConstraint($argument);
        }
        if (\is_array($argument)) {
            $values = [];
            foreach ($argument as $item) {
                $values[] = new Expr\ArrayItem($this->generateConstraintArgument($item));
            }

            return new Expr\Array_($values);
        }
        if (\is_string($argument)) {
            return new Scalar\String_($argument);
        }
        if (\is_int($argument)) {
            return new Scalar\LNumber($argument);
        }
        if (\is_float($argument)) {
            return new Scalar\DNumber($argument);
        }

        return null;
    }
}
