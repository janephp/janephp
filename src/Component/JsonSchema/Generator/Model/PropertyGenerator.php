<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Modifiers;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

trait PropertyGenerator
{
    /**
     * The naming service.
     */
    abstract protected function getNaming(): Naming;

    /**
     * The PHP Parser.
     */
    abstract protected function getParser(): Parser;

    protected function createProperty(Property $property, string $namespace, $default = null, bool $strict = true): Stmt
    {
        $propertyName = $property->getPhpName();
        $propertyStmt = new Stmt\PropertyProperty($propertyName);

        if (null === $default) {
            $default = $property->getDefault();
        }

        if (\is_scalar($default) || (Type::TYPE_ARRAY === $property->getType()->getTypeHint($namespace)?->toString() && \is_array($default))) {
            $propertyStmt->default = $this->getDefaultAsExpr($default)->expr;
        }

        return new Stmt\Property(Modifiers::PROTECTED, [
            $propertyStmt,
        ], [
            'comments' => [$this->createPropertyDoc($property, $namespace, $strict)],
        ]);
    }

    protected function createPropertyDoc(Property $property, $namespace, bool $strict): Doc
    {
        $docTypeHint = $property->getType()->getDocTypeHint($namespace);
        if ((!$strict || $property->isNullable()) && !str_contains($docTypeHint, 'null')) {
            $docTypeHint .= '|null';
        }

        $description = ['/**'];
        if ($property->getDescription()) {
            foreach (array_map(rtrim(...), explode("\n", $property->getDescription())) as $line) {
                $description[] = ' * ' . $line;
            }
            $description[] = ' *';
        }

        if ($property->isDeprecated()) {
            $description[] = ' * @deprecated';
            $description[] = ' *';
        }
        $description[] = \sprintf(' * @var %s', $docTypeHint);
        $description[] = ' */';

        return new Doc(implode("\n", $description));
    }

    private function getDefaultAsExpr($value): Stmt\Expression
    {
        /** @var Stmt\Expression $expression */
        $expression = $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];

        return $expression;
    }
}
