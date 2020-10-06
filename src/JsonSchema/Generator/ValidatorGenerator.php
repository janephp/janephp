<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Registry\Schema;
use PhpParser\BuilderFactory;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Scalar;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Required;
use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validation;

class ValidatorGenerator implements GeneratorInterface
{
    const FILE_TYPE_VALIDATOR = 'validator';
    const VALIDATOR_INTERFACE_NAME = 'ValidatorInterface';
    const VALIDATOR_EXCEPTION_NAME = 'ValidationException';

    /** @var Naming */
    private $naming;

    /** @var bool */
    private static $runtimeAdded = false;

    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $namespace = $schema->getNamespace() . '\\Validator';

        foreach ($schema->getClasses() as $classGuess) {
            if (\count($propertiesGuesses = $classGuess->getValidatorGuesses()) > 0) {
                if (!self::$runtimeAdded) {
                    $this->addRuntimeFiles($schema);
                    self::$runtimeAdded = true;
                }

                $className = $this->naming->getValidatorName($classGuess->getName());
                $collectionItems = [];

                foreach ($propertiesGuesses as $name => $guesses) {
                    $constraints = [];
                    foreach ($guesses as $guess) {
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
                            }

                            if (null !== $value) {
                                $args[] = new Expr\ArrayItem($value, new Scalar\String_($argName));
                            }
                        }

                        $constraints[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified($guess->getConstraintClass()), [
                            new Node\Arg(new Expr\Array_($args)),
                        ]));
                    }

                    $collectionItems[] = new Expr\ArrayItem(new Expr\New_(new Node\Name\FullyQualified(Required::class), [
                        new Node\Arg(new Expr\Array_($constraints)),
                    ]), new Scalar\String_($name));
                }

                $dataVariable = new Expr\Variable('data');
                $constraintVariable = new Expr\Variable('constraint');
                $validatorVariable = new Expr\Variable('validator');
                $violationsVariable = new Expr\Variable('violations');

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
                                        new Node\Stmt\Expression(new Expr\Assign($constraintVariable, new Expr\New_(new Node\Name\FullyQualified(Collection::class), [new Node\Arg(new Expr\Array_($collectionItems))]))),
                                        new Node\Stmt\Expression(new Expr\Assign($validatorVariable, new Expr\StaticCall(new Node\Name\FullyQualified(Validation::class), 'createValidator'))),
                                        new Node\Stmt\Expression(new Expr\Assign($violationsVariable, new Expr\MethodCall($validatorVariable, 'validate', [
                                            new Node\Arg($dataVariable),
                                            new Node\Arg($constraintVariable),
                                        ]))),
                                        new Node\Stmt\If_(new Expr\BinaryOp\Greater(new Expr\MethodCall($violationsVariable, 'count'), new Scalar\LNumber(0)), ['stmts' => [
                                            new Node\Stmt\Throw_(new Expr\New_(new Node\Name($namespace . '\\' . self::VALIDATOR_EXCEPTION_NAME), [new Node\Arg($violationsVariable)])),
                                        ]]),
                                    ],
                                    'returnType' => 'void',
                                ]
                            ),
                        ],
                        'implements' => [new Node\Name($namespace . '\\' . self::VALIDATOR_INTERFACE_NAME)],
                    ]
                );

                $namespaceStmt = new Node\Stmt\Namespace_(new Node\Name($namespace), [$class]);
                $schema->addFile(new File($schema->getDirectory() . '/Validator/' . $className . '.php', $namespaceStmt, self::FILE_TYPE_VALIDATOR));
            }
        }
    }

    private function addRuntimeFiles(Schema $schema): void
    {
        $factory = new BuilderFactory();
        $namespace = $schema->getNamespace() . '\\Validator';

        $node = $factory
            ->namespace($namespace)
            ->addStmt($factory
                ->interface(self::VALIDATOR_INTERFACE_NAME)
                ->addStmt($factory
                    ->method('validate')
                    ->makePublic()
                    ->addParam($factory->param('data'))
                    ->setReturnType('void')
                )
            )
            ->getNode();

        $schema->addFile(new File($schema->getDirectory() . '/Validator/' . self::VALIDATOR_INTERFACE_NAME . '.php', $node, self::FILE_TYPE_VALIDATOR));

        $thisVariable = new Expr\Variable('this');
        $violationListVariable = new Expr\Variable('violationList');

        $node = $factory
            ->namespace($namespace)
            ->addStmt($factory->use(ConstraintViolationListInterface::class))
            ->addStmt($factory
                ->class(self::VALIDATOR_EXCEPTION_NAME)
                ->extend('\RuntimeException')
                ->addStmt($factory
                    ->property('violationList')
                    ->makePrivate()
                    ->setDocComment('/** @var ConstraintViolationListInterface */')
                )
                ->addStmt($factory
                    ->method('__construct')
                    ->makePublic()
                    ->addParam($factory->param('violationList')->setType('ConstraintViolationListInterface'))
                    ->addStmt(new Expr\Assign(new Expr\PropertyFetch($thisVariable, 'violationList'), $violationListVariable))
                    ->addStmt(new Expr\StaticCall(new Node\Name('parent'), '__construct', [
                        new Node\Arg(new Expr\FuncCall(new Node\Name('sprintf'), [
                            new Node\Arg(new Scalar\String_('Model validation failed with %d errors.')),
                            new Node\Arg(new Expr\MethodCall($violationListVariable, 'count')),
                        ])),
                        new Node\Arg(new Expr\ConstFetch(new Node\Name('400'))),
                    ]))
                )
                ->addStmt($factory
                    ->method('getViolationList')
                    ->makePublic()
                    ->setReturnType('ConstraintViolationListInterface')
                    ->addStmt(new Node\Stmt\Return_(new Expr\PropertyFetch($thisVariable, 'violationList')))
                )
            )
            ->getNode();

        $schema->addFile(new File($schema->getDirectory() . '/Validator/' . self::VALIDATOR_EXCEPTION_NAME . '.php', $node, self::FILE_TYPE_VALIDATOR));
    }
}
