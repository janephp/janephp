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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermission();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('resource', $data)) {
            $object->setResource($data['resource']);
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
        }
        if (\array_key_exists('display', $data)) {
            $object->setDisplay($data['display']);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ScguserScgUserGroupPermissionItemsItem::class, 'json', $context);
            }
            $object->setItems($values);
        }
        if (\array_key_exists('itemsDescription', $data)) {
            $values_1 = [];
            foreach ($data['itemsDescription'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setItemsDescription($values_1);
        }
        if (\array_key_exists('ids', $data)) {
            $values_2 = [];
            foreach ($data['ids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setIds($values_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('resource') && null !== $data->getResource()) {
            $dataArray['resource'] = $data->getResource();
        }
        if ($data->isInitialized('access') && null !== $data->getAccess()) {
            $dataArray['access'] = $data->getAccess();
        }
        if ($data->isInitialized('display') && null !== $data->getDisplay()) {
            $dataArray['display'] = $data->getDisplay();
        }
        if ($data->isInitialized('items') && null !== $data->getItems()) {
            $values = [];
            foreach ($data->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['items'] = $values;
        }
        if ($data->isInitialized('itemsDescription') && null !== $data->getItemsDescription()) {
            $values_1 = [];
            foreach ($data->getItemsDescription() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['itemsDescription'] = $values_1;
        }
        if ($data->isInitialized('ids') && null !== $data->getIds()) {
            $values_2 = [];
            foreach ($data->getIds() as $value_2) {
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