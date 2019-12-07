<?php

namespace Jane\JsonSchema\Generator\Model;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\Guesser\Guess\Type;
use PhpParser\Comment\Doc;
use PhpParser\Node\Stmt;
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

    protected function createProperty(Property $property, $namespace, $default = null, bool $required = false): Stmt
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
            'comments' => [$this->createPropertyDoc($property, $namespace, $required)],
        ]);
    }

    protected function createPropertyDoc(Property $property, $namespace, bool $required): Doc
    {
        $docTypeHint = $property->getType()->getDocTypeHint($namespace);
        if (!$required && strpos($docTypeHint, 'null') === false) {
            $docTypeHint .= '|null';
        }

        $description = sprintf(<<<EOD
/**
 * %s
 *

EOD
        , $property->getDescription());

        if ($property->isDeprecated()) {
            $description .= <<<EOD
 * @deprecated
 *

EOD;
        }

        $description .= sprintf(<<<EOD
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
