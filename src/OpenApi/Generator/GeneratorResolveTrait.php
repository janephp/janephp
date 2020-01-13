<?php

namespace Jane\OpenApi\Generator;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

trait GeneratorResolveTrait
{
    /** @var DenormalizerInterface */
    protected $denormalizer;

    protected function resolve(Reference $reference, string $class): array
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

    protected function resolveParameter(Reference $parameter)
    {
        $result = $parameter;

        return $parameter->resolve(function ($value) use ($result) {
            if (\is_object($value)) {
                return $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Model\\Parameter', 'json', [
                    'document-origin' => (string) $result->getMergedUri()->withFragment(''),
                ]);
            }

            return $value;
        });
    }
}
