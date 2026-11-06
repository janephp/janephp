<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShipmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model\Shipment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model\Shipment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model\Shipment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('shipped_items', $data) && $data['shipped_items'] !== null) {
            $values = [];
            foreach ($data['shipped_items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model\ShippedItem::class, 'json', $context);
            }
            $object->shippedItems = $values;
            unset($data['shipped_items']);
        }
        elseif (\array_key_exists('shipped_items', $data)) {
            $object->shippedItems = null;
            unset($data['shipped_items']);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data)) {
            $object->tags = null;
            unset($data['tags']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('shippedItems', get_object_vars($data))) {
            $values = null;
            if (null !== $data->shippedItems) {
                $values = [];
                foreach ($data->shippedItems as $value) {
                    $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                    $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\JsonObject($normalized) : $normalized;
                }
            }
            $dataArray['shipped_items'] = $values;
        }
        if (array_key_exists('tags', get_object_vars($data))) {
            $values_1 = null;
            if (null !== $data->tags) {
                $values_1 = [];
                foreach ($data->tags as $value_1) {
                    $values_1[] = $value_1;
                }
            }
            $dataArray['tags'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model\Shipment::class => false];
    }
}