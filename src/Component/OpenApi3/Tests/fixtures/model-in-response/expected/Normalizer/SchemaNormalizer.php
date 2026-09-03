<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('floatProperty', $data) && \is_int($data['floatProperty'])) {
            $data['floatProperty'] = (float) $data['floatProperty'];
        }
        if (\array_key_exists('stringProperty', $data)) {
            $object->stringProperty = $data['stringProperty'];
            unset($data['stringProperty']);
        }
        if (\array_key_exists('integerProperty', $data)) {
            $object->integerProperty = $data['integerProperty'];
            unset($data['integerProperty']);
        }
        if (\array_key_exists('floatProperty', $data)) {
            $object->floatProperty = $data['floatProperty'];
            unset($data['floatProperty']);
        }
        if (\array_key_exists('arrayProperty', $data)) {
            $values = [];
            foreach ($data['arrayProperty'] as $value) {
                $values[] = $value;
            }
            $object->arrayProperty = $values;
            unset($data['arrayProperty']);
        }
        if (\array_key_exists('mapProperty', $data)) {
            $values_1 = new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\JsonObject();
            foreach ($data['mapProperty'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->mapProperty = $values_1;
            unset($data['mapProperty']);
        }
        if (\array_key_exists('objectProperty', $data)) {
            $object->objectProperty = $this->denormalizer->denormalize($data['objectProperty'], \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\SchemaObjectProperty::class, 'json', $context);
            unset($data['objectProperty']);
        }
        if (\array_key_exists('objectRefProperty', $data)) {
            $object->objectRefProperty = $this->denormalizer->denormalize($data['objectRefProperty'], \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema::class, 'json', $context);
            unset($data['objectRefProperty']);
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
        if (array_key_exists('stringProperty', get_object_vars($data)) && null !== ($data->stringProperty ?? null)) {
            $dataArray['stringProperty'] = $data->stringProperty ?? null;
        }
        if (array_key_exists('integerProperty', get_object_vars($data)) && null !== ($data->integerProperty ?? null)) {
            $dataArray['integerProperty'] = $data->integerProperty ?? null;
        }
        if (array_key_exists('floatProperty', get_object_vars($data)) && null !== ($data->floatProperty ?? null)) {
            $dataArray['floatProperty'] = $data->floatProperty ?? null;
        }
        if (array_key_exists('arrayProperty', get_object_vars($data)) && null !== ($data->arrayProperty ?? null)) {
            $values = [];
            foreach ($data->arrayProperty ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['arrayProperty'] = $values;
        }
        if (array_key_exists('mapProperty', get_object_vars($data)) && null !== ($data->mapProperty ?? null)) {
            $values_1 = new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\JsonObject();
            foreach ($data->mapProperty ?? null as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['mapProperty'] = $values_1;
        }
        if (array_key_exists('objectProperty', get_object_vars($data)) && null !== ($data->objectProperty ?? null)) {
            $dataArray['objectProperty'] = ($data->objectProperty ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\JsonObject($this->normalizer->normalize($data->objectProperty ?? null, 'json', $context));
        }
        if (array_key_exists('objectRefProperty', get_object_vars($data)) && null !== ($data->objectRefProperty ?? null)) {
            $dataArray['objectRefProperty'] = ($data->objectRefProperty ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Runtime\JsonObject($this->normalizer->normalize($data->objectRefProperty ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\ModelInResponse\Model\Schema::class => false];
    }
}