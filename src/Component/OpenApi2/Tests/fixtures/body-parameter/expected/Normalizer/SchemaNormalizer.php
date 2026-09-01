<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi2\Tests\Expected\Model\Schema();
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
        }
        if (\array_key_exists('dateProperty', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['dateProperty']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi2\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['dateProperty'], 'Y-m-d\TH:i:sP');
            }
            $object->dateProperty = $date;
        }
        if (\array_key_exists('integerProperty', $data)) {
            $object->integerProperty = $data['integerProperty'];
        }
        if (\array_key_exists('floatProperty', $data)) {
            $object->floatProperty = $data['floatProperty'];
        }
        if (\array_key_exists('arrayProperty', $data)) {
            $values = [];
            foreach ($data['arrayProperty'] as $value) {
                $values[] = $value;
            }
            $object->arrayProperty = $values;
        }
        if (\array_key_exists('mapProperty', $data)) {
            $values_1 = new \Jane\Component\OpenApi2\Tests\Expected\Runtime\JsonObject();
            foreach ($data['mapProperty'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->mapProperty = $values_1;
        }
        if (\array_key_exists('objectProperty', $data)) {
            $object->objectProperty = $this->denormalizer->denormalize($data['objectProperty'], \Jane\Component\OpenApi2\Tests\Expected\Model\SchemaObjectProperty::class, 'json', $context);
        }
        if (\array_key_exists('objectRefProperty', $data)) {
            $object->objectRefProperty = $this->denormalizer->denormalize($data['objectRefProperty'], \Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('stringProperty', get_object_vars($data)) && null !== ($data->stringProperty ?? null)) {
            $dataArray['stringProperty'] = $data->stringProperty ?? null;
        }
        if (array_key_exists('dateProperty', get_object_vars($data)) && null !== ($data->dateProperty ?? null)) {
            $dataArray['dateProperty'] = ($data->dateProperty ?? null)->format('Y-m-d\TH:i:sP');
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
            $values_1 = new \Jane\Component\OpenApi2\Tests\Expected\Runtime\JsonObject();
            foreach ($data->mapProperty ?? null as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['mapProperty'] = $values_1;
        }
        if (array_key_exists('objectProperty', get_object_vars($data)) && null !== ($data->objectProperty ?? null)) {
            $dataArray['objectProperty'] = ($data->objectProperty ?? null) === null ? null : new \Jane\Component\OpenApi2\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->objectProperty ?? null, 'json', $context));
        }
        if (array_key_exists('objectRefProperty', get_object_vars($data)) && null !== ($data->objectRefProperty ?? null)) {
            $dataArray['objectRefProperty'] = ($data->objectRefProperty ?? null) === null ? null : new \Jane\Component\OpenApi2\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->objectRefProperty ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi2\Tests\Expected\Model\Schema::class => false];
    }
}