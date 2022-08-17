<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\BuilderFactory;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Parser;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class RuntimeGenerator implements GeneratorInterface
{
    const FILE_TYPE_RUNTIME = 'runtime';
    const FILE_TYPE_VALIDATOR = 'validator';
    const VALIDATOR_INTERFACE_NAME = 'ValidatorInterface';
    const VALIDATOR_EXCEPTION_NAME = 'ValidationException';

    private $naming;
    private $parser;
    private $validator;

    public function __construct(Naming $naming, Parser $parser, bool $validator)
    {
        $this->naming = $naming;
        $this->parser = $parser;
        $this->validator = $validator;
    }

    /**
     * Generate a set of files given an object and a context.
     */
    public function generate(Schema $schema, string $className, Context $context): void
    {
        foreach ($this->collectFiles() as [$directory, $file]) {
            $ast = $this->parser->parse(file_get_contents($file));

            $fileBasename = basename($file);
            $namespace = explode('/', str_replace([$fileBasename, $directory], '', $file));
            array_shift($namespace);
            array_pop($namespace);

            $prefixNamespace = '';
            if (\count($namespace) > 0) {
                $prefixNamespace = implode('/', $namespace) . '/';
            }

            $stmts = new Namespace_(new Name($this->naming->getRuntimeNamespace($schema->getNamespace(), $namespace)), $ast);
            $schema->addFile(new File($schema->getDirectory() . '/Runtime/' . $prefixNamespace . $fileBasename, $stmts, self::FILE_TYPE_RUNTIME));
        }

        if ($this->validator) {
            $this->addValidatorRuntimeFiles($schema);
        }
    }

    private function addValidatorRuntimeFiles(Schema $schema): void
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
                            new Node\Arg(new Scalar\String_('Model validation failed with %d errors: %s')),
                            new Node\Arg(new Expr\MethodCall($violationListVariable, 'count')),
                            new Expr\Cast\String_($violationListVariable),
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

    private function collectFiles(): \Generator
    {
        foreach ($this->directories() as $directory) {
            foreach ($this->files($directory) as $file) {
                yield [$directory, $file];
            }
        }
    }

    private function files(string $directory): \Generator
    {
        $files = scandir($directory);
        foreach ($files as $file) {
            $fullPath = sprintf('%s/%s', $directory, $file);
            if (\in_array($file, ['.', '..'])) {
                continue;
            }

            if (is_dir($fullPath)) {
                foreach ($this->files($fullPath) as $dirFile) {
                    yield $dirFile;
                }
            } else {
                yield $fullPath;
            }
        }
    }

    protected function directories(): \Generator
    {
        yield __DIR__ . '/Runtime/data';
    }
}
