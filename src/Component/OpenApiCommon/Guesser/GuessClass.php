<?php

namespace Jane\Component\OpenApiCommon\Guesser;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApiCommon\Registry\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GuessClass
{
    private $schemaClass;
    protected $denormalizer;

    public function __construct(string $schemaClass, DenormalizerInterface $denormalizer)
    {
        $this->schemaClass = $schemaClass;
        $this->denormalizer = $denormalizer;
    }

    public function guessClass(&$schema, string $reference, Registry $registry, ?bool &$array = null): ?ClassGuess
    {
        $array = false;

        if ($schema instanceof Reference) {
            [$reference, $schema] = $this->resolve($schema, $this->schemaClass);
        }

        if ($schema instanceof $this->schemaClass && 'array' === $schema->getType()) {
            $array = true;
            $reference .= '/items';
            $items = $schema->getItems();

            if ($items instanceof Reference) {
                [$reference, $_] = $this->resolve($items, $this->schemaClass);
            }
        }

        return $registry->getClass($reference);
    }

    public function resolve(Reference $reference, string $class): array
    {
        $result = $reference;

        do {
            $refString = (string) $reference->getMergedUri();
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        } while ($result instanceof Reference);

        return [$refString, $result];
    }
}
