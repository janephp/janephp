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
     * @var array<string, array{class: string, namespace: string[], source: string, file: string}>
     */
    private const BUILDERS = [
        'AdditionalAndPatternProperties' => ['class' => 'AdditionalAndPatternProperties', 'namespace' => [], 'source' => 'AdditionalAndPatternProperties.php', 'file' => 'AdditionalAndPatternProperties.php'],
        'AdditionalPropertiesInterface' => ['class' => 'AdditionalPropertiesInterface', 'namespace' => [], 'source' => 'AdditionalPropertiesInterface.php', 'file' => 'AdditionalPropertiesInterface.php'],
        'JsonObject' => ['class' => 'JsonObject', 'namespace' => [], 'source' => 'JsonObject.php', 'file' => 'JsonObject.php'],
        'CheckArray' => ['class' => 'CheckArray', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/CheckArray.php', 'file' => 'CheckArray.php'],
        'ValidatorTrait' => ['class' => 'ValidatorTrait', 'namespace' => ['Normalizer'], 'source' => 'Normalizer/ValidatorTrait.php', 'file' => 'ValidatorTrait.php'],
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
        foreach ($this->getBuilders() as $config) {
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
     * @param string[] $namespace
     */
    protected function getSourceDir(array $namespace): string
    {
        return __DIR__ . '/Runtime';
    }
}
