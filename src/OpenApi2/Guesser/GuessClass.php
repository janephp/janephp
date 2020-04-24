<?php

namespace Jane\OpenApi2\Guesser;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GuessClass
{
    use ResolveClass;

    private function guessClass($schema, string $reference, Registry $registry, DenormalizerInterface $denormalizer): ?ClassGuess
    {
        if ($schema instanceof Reference) {
            [$reference, $schema] = $this->resolve($schema, Schema::class, $denormalizer);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType()) {
            $reference .= '/items';
            $items = $schema->getItems();

            if ($items instanceof Reference) {
                [$reference, $_] = $this->resolve($items, Schema::class, $denormalizer);
            }
        }

        return $registry->getClass($reference);
    }
}
