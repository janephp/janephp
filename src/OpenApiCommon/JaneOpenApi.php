<?php

namespace Jane\OpenApiCommon;

use Jane\JsonSchema\Generator\ChainGenerator;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\MultipleClass;

abstract class JaneOpenApi extends ChainGenerator
{
    protected function hydrateDiscriminatedClasses(Schema $schema, Registry $registry)
    {
        foreach ($schema->getClasses() as $class) {
            if ($class instanceof MultipleClass) { // is parent class
                foreach ($class->getReferences() as $reference) {
                    $guess = $registry->getClass($reference);
                    if ($guess instanceof ClassGuess) { // is child class
                        $guess->setMultipleClass($class);
                    }
                }
            }
        }
    }
}
