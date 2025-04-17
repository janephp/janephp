<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Parser;

class RuntimeGenerator implements GeneratorInterface
{
    public const FILE_TYPE_RUNTIME = 'runtime';

    private $naming;
    private $parser;

    public function __construct(Naming $naming, Parser $parser)
    {
        $this->naming = $naming;
        $this->parser = $parser;
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
            $fullPath = \sprintf('%s/%s', $directory, $file);
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
