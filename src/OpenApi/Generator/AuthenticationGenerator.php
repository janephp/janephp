<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\GeneratorInterface;
use Jane\JsonSchema\Schema as BaseSchema;
use Jane\OpenApi\Schema;

class AuthenticationGenerator implements GeneratorInterface
{
    public function generate(BaseSchema $schema, string $className, Context $context)
    {
        if ($schema instanceof Schema) {
            $namespace = $schema->getNamespace() . '\\Authentication';

            $securitySchemes = $schema->getSecuritySchemes();
            foreach ($securitySchemes as $securityScheme) {
                // @todo generate !
            }
        }
    }
}
