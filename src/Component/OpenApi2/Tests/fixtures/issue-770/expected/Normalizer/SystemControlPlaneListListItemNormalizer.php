<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemControlPlaneListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('managementIp', $data)) {
            $object->managementIp = $data['managementIp'];
        }
        if (\array_key_exists('clusterIp', $data)) {
            $object->clusterIp = $data['clusterIp'];
        }
        if (\array_key_exists('controlIp', $data)) {
            $object->controlIp = $data['controlIp'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->serialNumber = $data['serialNumber'];
        }
        if (\array_key_exists('numOfAps', $data)) {
            $object->numOfAps = $data['numOfAps'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('firmware', $data)) {
            $object->firmware = $data['firmware'];
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->clusterRole = $data['clusterRole'];
        }
        if (\array_key_exists('upTime', $data)) {
            $object->upTime = $data['upTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('managementIp', get_object_vars($data)) && null !== ($data->managementIp ?? null)) {
            $dataArray['managementIp'] = $data->managementIp ?? null;
        }
        if (array_key_exists('clusterIp', get_object_vars($data)) && null !== ($data->clusterIp ?? null)) {
            $dataArray['clusterIp'] = $data->clusterIp ?? null;
        }
        if (array_key_exists('controlIp', get_object_vars($data)) && null !== ($data->controlIp ?? null)) {
            $dataArray['controlIp'] = $data->controlIp ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('serialNumber', get_object_vars($data)) && null !== ($data->serialNumber ?? null)) {
            $dataArray['serialNumber'] = $data->serialNumber ?? null;
        }
        if (array_key_exists('numOfAps', get_object_vars($data)) && null !== ($data->numOfAps ?? null)) {
            $dataArray['numOfAps'] = $data->numOfAps ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('firmware', get_object_vars($data)) && null !== ($data->firmware ?? null)) {
            $dataArray['firmware'] = $data->firmware ?? null;
        }
        if (array_key_exists('clusterRole', get_object_vars($data)) && null !== ($data->clusterRole ?? null)) {
            $dataArray['clusterRole'] = $data->clusterRole ?? null;
        }
        if (array_key_exists('upTime', get_object_vars($data)) && null !== ($data->upTime ?? null)) {
            $dataArray['upTime'] = $data->upTime ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneListListItem::class => false];
    }
}