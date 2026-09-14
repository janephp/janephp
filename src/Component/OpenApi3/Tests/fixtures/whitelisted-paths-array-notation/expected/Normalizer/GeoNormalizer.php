<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GeoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('bbox', $data)) {
            $values = [];
            foreach ($data['bbox'] as $value) {
                $values[] = $value;
            }
            $object->bbox = $values;
            unset($data['bbox']);
        }
        if (\array_key_exists('geometry', $data)) {
            $object->geometry = $this->denormalizer->denormalize($data['geometry'], \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Point::class, 'json', $context);
            unset($data['geometry']);
        }
        if (\array_key_exists('properties', $data)) {
            $values_1 = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject();
            foreach ($data['properties'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->properties = $values_1;
            unset($data['properties']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['type'] = $data->type;
        $values = [];
        foreach ($data->bbox as $value) {
            $values[] = $value;
        }
        $dataArray['bbox'] = $values;
        if (array_key_exists('geometry', get_object_vars($data)) && null !== ($data->geometry ?? null)) {
            $normalized = $this->normalizer->normalize($data->geometry, 'json', $context);
            $dataArray['geometry'] = \is_iterable($normalized) ? new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject($normalized) : $normalized;
        }
        $values_1 = new \Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\JsonObject();
        foreach ($data->properties as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $dataArray['properties'] = $values_1;
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model\Geo::class => false];
    }
}