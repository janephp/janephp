<?php

namespace Jane\Component\JsonSchema\Generator;

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

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $namespace = $schema->getNamespace() . '\\Model';

        foreach ($schema->getClasses() as $class) {
            if (!$class instanceof EnumGuess) {
                continue;
            }

            $enum = $this->createEnum($class);

            $namespaceStmt = new Stmt\Namespace_(new Name($namespace), [$enum]);
            $schema->addFile(new File($schema->getDirectory() . '/Model/' . $class->getName() . '.php', $namespaceStmt, self::FILE_TYPE_ENUM));
        }
    }

    protected function createEnum(EnumGuess $enumGuess): Stmt\Enum_
    {
        $cases = [];
        $usedCaseNames = [];

        foreach ($enumGuess->getValues() as $value) {
            $caseName = $this->buildCaseName($value, $enumGuess->getBackingType());
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
