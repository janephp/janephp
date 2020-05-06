<?php

namespace Jane\OpenApiCommon\Guesser;

use Jane\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Registry\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GuessClass
{
    private $schemaClass;

    public function __construct(string $schemaClass)
    {
        $this->schemaClass = $schemaClass;
    }

    public function guessClass($schema, string $reference, Registry $registry, DenormalizerInterface $denormalizer): ?ClassGuess
    {
        if ($schema instanceof Reference) {
            [$reference, $schema] = $this->resolve($schema, $this->schemaClass, $denormalizer);
        }

        if ($schema instanceof Schema && 'array' === $schema->getType()) {
            $reference .= '/items';
            $items = $schema->getItems();

            if ($items instanceof Reference) {
                [$reference, $_] = $this->resolve($items, $this->schemaClass, $denormalizer);
            }
        }

        return $registry->getClass($reference);
    }

    public function resolve(Reference $reference, string $class, DenormalizerInterface $denormalizer): array
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($denormalizer, $result, $class) {
                return $denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
