<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Schema as BaseSchema;
use Jane\OpenApi\Generator\Authentication\ClassGenerator;
use Jane\OpenApi\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class AuthenticationGenerator implements GeneratorInterface
{
    use ClassGenerator;

    protected const REFERENCE = 'Authentication';
    protected const FILE_TYPE_AUTH = 'auth';

    /**
     * @var Naming Naming Service
     */
    protected $naming;

    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    protected function getNaming(): Naming
    {
        return $this->naming;
    }

    public function generate(BaseSchema $schema, string $className, Context $context)
    {
        if ($schema instanceof Schema) {
            $namespace = sprintf('%s\\%s', $schema->getNamespace(), self::REFERENCE);

            $securitySchemes = $schema->getSecuritySchemes();
            foreach ($securitySchemes as $securityScheme) {
                $className = $this->getNaming()->getAuthName($securityScheme->getName());

                $authentication = $this->createAuthentication($className, []);
                $namespace = new Stmt\Namespace_(new Name($namespace), [$authentication]);

                $schema->addFile(new File(sprintf('%s/%s/%s.php', $schema->getDirectory(), self::REFERENCE, $className), $namespace, self::FILE_TYPE_AUTH));
            }
        }
    }
}
