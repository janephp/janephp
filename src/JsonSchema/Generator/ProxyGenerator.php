<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Proxy\ClassGenerator;
use Jane\JsonSchema\Generator\Proxy\ConstructGenerator;
use Jane\JsonSchema\Generator\Proxy\PropertiesGenerator;
use Jane\JsonSchema\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class ProxyGenerator implements GeneratorInterface
{
    use ClassGenerator;
    use ConstructGenerator;
    use PropertiesGenerator;
    use PropertyCheckTrait;

    const FILE_TYPE_PROXY = 'proxy';

    /**
     * @var Naming Naming Service
     */
    protected $naming;

    /**
     * @param Naming $naming Naming Service
     */
    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    /**
     * The naming service.
     *
     * @return Naming
     */
    protected function getNaming()
    {
        return $this->naming;
    }

    /**
     * Generate a proxy given a schema.
     */
    public function generate(Schema $schema, string $className, Context $context)
    {
        foreach ($schema->getClasses() as $class) {
            if ($this->hasReadOnlyProperty($class)) {
                $methods = [];
                $methods[] = $this->createConstruct(
                    sprintf('\\%s\\Model\\%s', $schema->getNamespace(), $this->getNaming()->getClassName($class->getName())),
                    $class,
                    $context
                );
                $methods[] = $this->createProperties($class->getProperties());

                $proxy = $this->createProxy($class->getName(), $schema->getNamespace(), $methods);
                $namespace = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Proxy'), [$proxy]);

                $className = $this->getNaming()->getProxyName($class->getName());
                $schema->addFile(new File(sprintf('%s/Proxy/%s.php', $schema->getDirectory(), $className), $namespace, self::FILE_TYPE_PROXY));
            }
        }
    }
}
