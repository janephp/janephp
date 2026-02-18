<?php

namespace Jane\Component\JsonSchema\Guesser;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GuesserResolverTrait
{
    protected DenormalizerInterface $denormalizer;

    /**
     * Resolve a reference with a denormalizer.
     */
    public function resolve(Reference $reference, string $class): object
    {
        $result = $reference;

        while ($result instanceof Reference) {
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->denormalizer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        }

        return $result;
    }
}
