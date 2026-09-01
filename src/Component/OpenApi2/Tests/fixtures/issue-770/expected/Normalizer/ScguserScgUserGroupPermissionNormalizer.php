<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScguserScgUserGroupPermissionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('resource', $data)) {
            $object->resource = $data['resource'];
        }
        if (\array_key_exists('access', $data)) {
            $object->access = $data['access'];
        }
        if (\array_key_exists('display', $data)) {
            $object->display = $data['display'];
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionItemsItem::class, 'json', $context);
            }
            $object->items = $values;
        }
        if (\array_key_exists('itemsDescription', $data)) {
            $values_1 = [];
            foreach ($data['itemsDescription'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->itemsDescription = $values_1;
        }
        if (\array_key_exists('ids', $data)) {
            $values_2 = [];
            foreach ($data['ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->ids = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('resource', get_object_vars($data)) && null !== ($data->resource ?? null)) {
            $dataArray['resource'] = $data->resource ?? null;
        }
        if (array_key_exists('access', get_object_vars($data)) && null !== ($data->access ?? null)) {
            $dataArray['access'] = $data->access ?? null;
        }
        if (array_key_exists('display', get_object_vars($data)) && null !== ($data->display ?? null)) {
            $dataArray['display'] = $data->display ?? null;
        }
        if (array_key_exists('items', get_object_vars($data)) && null !== ($data->items ?? null)) {
            $values = [];
            foreach ($data->items ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['items'] = $values;
        }
        if (array_key_exists('itemsDescription', get_object_vars($data)) && null !== ($data->itemsDescription ?? null)) {
            $values_1 = [];
            foreach ($data->itemsDescription ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['itemsDescription'] = $values_1;
        }
        if (array_key_exists('ids', get_object_vars($data)) && null !== ($data->ids ?? null)) {
            $values_2 = [];
            foreach ($data->ids ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['ids'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission::class => false];
    }
}