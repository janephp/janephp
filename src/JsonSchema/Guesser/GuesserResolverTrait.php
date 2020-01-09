<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GuesserResolverTrait
{
    /** @var DenormalizerInterface */
    protected $serializer;

    /**
     * Resolve a reference with a denormalizer.
     */
    public function resolve(Reference $reference, string $class): object
    {
        $result = $reference;

        while ($result instanceof Reference) {
            $result = $result->resolve(function ($data) use ($result, $class) {
                return $this->serializer->denormalize($data, $class, 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            });
        }

        return $result;
    }
}
