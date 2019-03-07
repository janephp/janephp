<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Property;
use PhpParser\Comment\Doc;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Expr;
use PhpParser\Parser;

trait PropertyGenerator
{
    /**
     * The naming service.
     *
     * @return Naming
     */
    abstract protected function getNaming();

    /**
     * The PHP Parser.
     *
     * @return Parser
     */
    abstract protected function getParser();

    protected function createProperty(Property $property, $namespace, $default = null): Stmt
    {
        $propertyName = $property->getPhpName();
        $propertyStmt = new Stmt\PropertyProperty($propertyName);

        if (null === $default) {
            $default = $property->getDefault();
        }

        if (null !== $default && is_scalar($default)) {
            $propertyStmt->default = $this->getDefaultAsExpr($default);
        }

        return new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
            $propertyStmt,
        ], [
            'comments' => [$this->createPropertyDoc($property, $namespace)],
        ]);
    }

    protected function createPropertyDoc(Property $property, $namespace): Doc
    {
        return new Doc(sprintf(<<<EOD
/**
 * %s
 *
 * @var %s
 */
EOD
        , $property->getDescription(), $property->getType()->getDocTypeHint($namespace)));
    }

    private function getDefaultAsExpr($value)
    {
        return $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];
    }
}
