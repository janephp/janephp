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

    public function __construct(
        protected Naming $naming,
    ) {
    }

    public function generate(Schema $schema, string $className, Context $context): void
    {
        $namespace = $schema->getNamespace() . '\\Model';

        foreach ($schema->getClasses() as $class) {
            if (!$class instanceof EnumGuess) {
                continue;
            }

            $enumNode = $this->createEnum($class);

            $namespaceStmt = new Stmt\Namespace_(new Name($namespace), [$enumNode]);
            $schema->addFile(new File($schema->getDirectory() . '/Model/' . $class->getName() . '.php', $namespaceStmt, self::FILE_TYPE_ENUM));
        }
    }

    protected function createEnum(EnumGuess $enumGuess): Stmt\Enum_
    {
        $cases = [];
        foreach ($enumGuess->getValues() as $value) {
            $caseName = $this->buildCaseName($value, $enumGuess->getBackingType());
            $caseExpr = 'string' === $enumGuess->getBackingType()
                ? new Scalar\String_((string) $value)
                : new Scalar\Int_((int) $value);

            $cases[] = new Stmt\EnumCase($caseName, $caseExpr);
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
            $this->naming->getClassName($enumGuess->getName()),
            [
                'scalarType' => new Identifier($enumGuess->getBackingType()),
                'stmts' => $cases,
            ],
            $attributes
        );
    }

    protected function buildCaseName(string|int $value, string $backingType): string
    {
        if ('int' === $backingType) {
            $name = 'Value' . $value;
        } else {
            $name = (string) $value;
        }

        // Replace non-alphanumeric characters with spaces for word boundary detection
        $name = preg_replace('/[^a-zA-Z0-9]/', ' ', $name);

        // Convert to PascalCase
        $name = str_replace(' ', '', ucwords(strtolower(trim($name))));

        // Ensure it starts with a letter
        if ('' === $name || is_numeric(substr($name, 0, 1))) {
            $name = 'Value' . $name;
        }

        return $name;
    }
}
