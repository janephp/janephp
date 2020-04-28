<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\File;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Registry\Schema as BaseSchema;
use Jane\OpenApiCommon\Generator\Authentication\ClassGenerator;
use Jane\OpenApiCommon\Generator\Authentication\ConstructGenerator;
use Jane\OpenApiCommon\Guesser\Guess\SecuritySchemeGuess;
use Jane\OpenApiCommon\Registry\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

abstract class AuthenticationGenerator implements GeneratorInterface
{
    use ClassGenerator;
    use ConstructGenerator;

    protected const REFERENCE = 'Authentication';
    protected const FILE_TYPE_AUTH = 'auth';

    protected $naming;

    public function __construct(Naming $naming)
    {
        $this->naming = $naming;
    }

    protected function getNaming(): Naming
    {
        return $this->naming;
    }

    public function generate(BaseSchema $schema, string $className, Context $context): void
    {
        if ($schema instanceof Schema) {
            $baseNamespace = sprintf('%s\\%s', $schema->getNamespace(), self::REFERENCE);

            $securitySchemes = $schema->getSecuritySchemes();
            foreach ($securitySchemes as $securityScheme) {
                $className = $this->getNaming()->getAuthName($securityScheme->getName());

                $statements = $this->createConstruct($securityScheme);
                $statements[] = $this->createHandleRequest($securityScheme);
                $authentication = $this->createAuthentication($className, $statements);

                $namespace = new Stmt\Namespace_(new Name($baseNamespace), [$authentication]);

                $schema->addFile(new File(sprintf('%s/%s/%s.php', $schema->getDirectory(), self::REFERENCE, $className), $namespace, self::FILE_TYPE_AUTH));
            }
        }
    }

    abstract protected function createHandleRequest(SecuritySchemeGuess $securityScheme): Stmt\ClassMethod;
}
