<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Event\FileGeneratedEvent;
use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Guesser\Guess\EnumGuess;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Comment\Doc;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

class EnumGenerator implements GeneratorInterface
{
    public const FILE_TYPE_ENUM = 'enum';

    public function __construct(
        private readonly ?Naming $naming = null,
    ) {
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $naming = $this->naming ?? new Naming();

        foreach ($schema->getClasses() as $class) {
            if (!$class instanceof EnumGuess) {
                continue;
            }

            $subNamespace = $class->getSubNamespace();
            $namespace = $naming->getModelNamespace($schema->getNamespace(), $subNamespace);
            $enum = $this->createEnum($class);

            $namespaceStmt = new Stmt\Namespace_(new Name($namespace), [$enum]);
            $file = new File($naming->getArtifactPath($schema->getDirectory(), 'Model', $subNamespace) . '/' . $class->getName() . '.php', $namespaceStmt, self::FILE_TYPE_ENUM);
            $schema->addFile($file);
            $context->dispatch(new FileGeneratedEvent($schema, $file));
        }
    }

    protected function createEnum(EnumGuess $enumGuess): Stmt\Enum_
    {
        $cases = [];
        $usedCaseNames = [];

        $varNames = $enumGuess->getVarNames();

        foreach (array_values($enumGuess->getValues()) as $index => $value) {
            $caseName = $this->buildCaseNameFromVarName($varNames[$index] ?? null)
                ?? $this->buildCaseName($value, $enumGuess->getBackingType());
            while (\array_key_exists($caseName, $usedCaseNames)) {
                $caseName .= '2';
            }
            $usedCaseNames[$caseName] = true;

            $cases[] = new Stmt\EnumCase(
                $caseName,
                'string' === $enumGuess->getBackingType()
                    ? new Scalar\String_((string) $value)
                    : new Scalar\Int_((int) $value)
            );
        }

        $attributes = [];

        if ($enumGuess->isDeprecated()) {
            $attributes['comments'] = [new Doc(<<<EOD
/**
 * @deprecated
 */
EOD
            )];
        }

        return new Stmt\Enum_(
            $enumGuess->getName(),
            [
                'scalarType' => new Identifier($enumGuess->getBackingType()),
                'stmts' => $cases,
            ],
            $attributes
        );
    }

    /**
     * Get the "x-enum-varnames" entry as a case name, or null when there is none, or it is not a valid PHP identifier or is `class`.
     */
    private function buildCaseNameFromVarName(?string $varName): ?string
    {
        // Matches a valid PHP identifier (a letter, `_` or byte \x80-\xff, then also digits); such a name is kept as written.
        if (null === $varName || 1 !== preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/D', $varName)) {
            return null;
        }

        // "class" is reserved for Enum::class
        return 'class' === strtolower($varName) ? null : $varName;
    }

    private function buildCaseName(string|int $value, string $backingType): string
    {
        $name = 'int' === $backingType ? 'Value' . $value : (string) $value;

        // Replace non-alphanumeric characters by spaces to detect word boundaries
        $name = preg_replace('/[^a-zA-Z0-9]/', ' ', $name);
        // Then convert the result to PascalCase
        $name = str_replace(' ', '', ucwords(strtolower(trim((string) $name))));

        // PHP identifiers cannot start with a number, fallback on a Value prefix
        if ('' === $name || is_numeric(substr($name, 0, 1))) {
            $name = 'Value' . $name;
        }

        return $name;
    }
}
