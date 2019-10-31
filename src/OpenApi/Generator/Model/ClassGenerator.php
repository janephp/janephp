<?php

namespace Jane\OpenApi\Generator\Model;

use Jane\JsonSchema\Generator\Model\ClassGenerator as BaseClassGenerator;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Comment\Doc;

trait ClassGenerator
{
    use BaseClassGenerator {
        createModel as baseCreateModel;
    }

    /**
     * Return a model class.
     *
     * @param string $name
     * @param Node[] $properties
     * @param Node[] $methods
     * @param bool   $hasExtensions
     * @param string $extends
     *
     * @return Stmt\Class_
     */
    protected function createModel(string $name, $properties, $methods, bool $hasExtensions = false, bool $deprecated = false, $extends = null): Stmt\Class_
    {
        $classExtends = null;
        if (null !== $extends) {
            $classExtends = new Name($extends);
        } elseif ($hasExtensions) {
            $classExtends = new Name('\ArrayObject');
        }

        $attributes = [];
        if ($deprecated) {
            $attributes['comments'] = [new Doc(<<<EOD
/**
 *
 * @deprecated
 */
EOD
            )];
        }

        return new Stmt\Class_(
            new Name($this->getNaming()->getClassName($name)),
            [
                'stmts' => array_merge($properties, $methods),
                'extends' => $classExtends,
            ],
            $attributes
        );
    }
}
