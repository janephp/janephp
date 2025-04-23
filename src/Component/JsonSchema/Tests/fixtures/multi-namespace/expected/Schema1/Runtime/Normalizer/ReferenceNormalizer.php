<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Schema1\Runtime\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReferenceNormalizer implements NormalizerInterface
{
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $ref = [];
        $ref['$ref'] = (string) $data->getReferenceUri();
        return $ref;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof Reference;
    }
    public function getSupportedTypes(?string $format): array
    {
        return [Reference::class => false];
    }
}