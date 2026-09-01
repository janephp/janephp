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

    /**
     * `requires` lists builders a runtime class depends on from inside its own
     * template, invisible to require-sites: ValidatorTrait throws
     * ValidationException, so emitting the trait without the exception makes
     * generated clients fatal instead of throwing it.
     *
     * @var array<string, array{class: string, namespace: string[], source: string, file: string, requires?: string[]}>
     */
    private const BUILDERS = [
        'AdditionalAndPatternProperties' => ['class' => 'AdditionalAndPatternProperties', 'namespace' => [], 'source' => 'AdditionalAndPatternProperties.php', 'file' => 'AdditionalAndPatternProperties.php'],
        'AdditionalPropertiesInterface' => ['class' => 'AdditionalPropertiesInterface', 'namespace' => [], 'source' => 'AdditionalPropertiesInterface.php', 'file' => 'AdditionalPropertiesInterface.php'],
        'JsonObject' => ['class' => 'JsonObject', 'namespace' => [], 'source' => 'JsonObject.php', 'file' => 'JsonObject.php'],
        'CheckArray' => ['class' => 'CheckArray', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/CheckArray.php', 'file' => 'CheckArray.php'],
        'ValidatorTrait' => ['class' => 'ValidatorTrait', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/ValidatorTrait.php', 'file' => 'ValidatorTrait.php', 'requires' => ['ValidationException']],
        'ReferenceNormalizer' => ['class' => 'ReferenceNormalizer', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/ReferenceNormalizer.php', 'file' => 'ReferenceNormalizer.php'],
        'InvalidDateException' => ['class' => 'InvalidDateException', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/InvalidDateException.php', 'file' => 'InvalidDateException.php'],
        'ValidationException' => ['class' => 'ValidationException', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/ValidationException.php', 'file' => 'ValidationException.php'],
    ];

    public function __construct(
        private readonly Naming $naming,
        private readonly Parser $parser,
    ) {
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $builders = $this->getBuilders();
        $this->requireDependencies($schema, $builders);

        foreach ($builders as $config) {
            $fqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), $config['namespace'], $config['class']);
            if ($schema->isRuntimeFileRequired($fqcn)) {
                $sourceDir = $this->getSourceDir($config['namespace']);
                $ast = $this->parser->parse(file_get_contents($sourceDir . '/' . $config['source']));
                $namespaceNode = new Namespace_(new Name($this->naming->getRuntimeNamespace($schema->getNamespace(), $config['namespace'])), $ast);
                $prefixNamespace = \count($config['namespace']) > 0 ? implode('/', $config['namespace']) . '/' : '';
                $schema->addFile(new File(
                    $schema->getDirectory() . '/Runtime/' . $prefixNamespace . $config['file'],
                    $namespaceNode,
                    self::FILE_TYPE_RUNTIME
                ));
            }
        }
    }

    protected function getBuilders(): array
    {
        return self::BUILDERS;
    }

    /**
     * Marks the declared dependencies of every required runtime class as
     * required themselves, so require-sites only have to know the class they
     * use directly.
     *
     * @param array<string, array{class: string, namespace: string[], source: string, file: string, requires?: string[]}> $builders
     */
    private function requireDependencies(Schema $schema, array $builders): void
    {
        do {
            $changed = false;

            foreach ($builders as $config) {
                if (!isset($config['requires'])) {
                    continue;
                }

                if (!$schema->isRuntimeFileRequired($this->naming->getRuntimeClassFQCN($schema->getNamespace(), $config['namespace'], $config['class']))) {
                    continue;
                }

                foreach ($config['requires'] as $dependency) {
                    $dependencyConfig = $builders[$dependency];
                    $dependencyFqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), $dependencyConfig['namespace'], $dependencyConfig['class']);

                    if (!$schema->isRuntimeFileRequired($dependencyFqcn)) {
                        $schema->addRequiredRuntimeFile($dependencyFqcn);
                        $changed = true;
                    }
                }
            }
        } while ($changed);
    }

    /**
     * @param string[] $namespace
     */
    protected function getSourceDir(array $namespace): string
    {
        return __DIR__ . '/Runtime';
    }
}
