<?php

namespace Jane\Component\JsonSchema\Generator\Model;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
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
        $propertyName = $this->getNaming()->getPropertyName($property->getPhpName());
        $propertyStmt = new Stmt\PropertyProperty($propertyName);

        if (null === $default) {
            $default = $property->getDefault();
        }

        if ((null !== $default && is_scalar($default)) || (Type::TYPE_ARRAY === $property->getType()->getTypeHint($namespace) && \is_array($default))) {
            $propertyStmt->default = $this->getDefaultAsExpr($default)->expr;
        }

        return new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
            $propertyStmt,
        ], [
            'comments' => [$this->createPropertyDoc($property, $namespace, $strict)],
        ]);
    }

    protected function createPropertyDoc(Property $property, $namespace, bool $strict): Doc
    {
        $docTypeHint = $property->getType()->getDocTypeHint($namespace);
        if ((!$strict || $property->isNullable()) && false === strpos($docTypeHint, 'null')) {
            $docTypeHint .= '|null';
        }

        $description = sprintf(<<<'EOD'
/**
 * %s
 *

EOD
        , $property->getDescription());

        if ($property->isDeprecated()) {
            $description .= <<<'EOD'
 * @deprecated
 *

EOD;
        }

        $description .= sprintf(<<<'EOD'
 * @var %s
 */
EOD
        , $docTypeHint);

        return new Doc($description);
    }

    private function getDefaultAsExpr($value): Stmt\Expression
    {
        return $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];
    }
}
