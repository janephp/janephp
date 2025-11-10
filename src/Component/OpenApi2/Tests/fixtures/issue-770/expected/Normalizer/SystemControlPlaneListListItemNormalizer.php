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
class SystemControlPlaneListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('managementIp', $data)) {
            $object->setManagementIp($data['managementIp']);
        }
        if (\array_key_exists('clusterIp', $data)) {
            $object->setClusterIp($data['clusterIp']);
        }
        if (\array_key_exists('controlIp', $data)) {
            $object->setControlIp($data['controlIp']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->setSerialNumber($data['serialNumber']);
        }
        if (\array_key_exists('numOfAps', $data)) {
            $object->setNumOfAps($data['numOfAps']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('firmware', $data)) {
            $object->setFirmware($data['firmware']);
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->setClusterRole($data['clusterRole']);
        }
        if (\array_key_exists('upTime', $data)) {
            $object->setUpTime($data['upTime']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('managementIp') && null !== $data->getManagementIp()) {
            $dataArray['managementIp'] = $data->getManagementIp();
        }
        if ($data->isInitialized('clusterIp') && null !== $data->getClusterIp()) {
            $dataArray['clusterIp'] = $data->getClusterIp();
        }
        if ($data->isInitialized('controlIp') && null !== $data->getControlIp()) {
            $dataArray['controlIp'] = $data->getControlIp();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('serialNumber') && null !== $data->getSerialNumber()) {
            $dataArray['serialNumber'] = $data->getSerialNumber();
        }
        if ($data->isInitialized('numOfAps') && null !== $data->getNumOfAps()) {
            $dataArray['numOfAps'] = $data->getNumOfAps();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('firmware') && null !== $data->getFirmware()) {
            $dataArray['firmware'] = $data->getFirmware();
        }
        if ($data->isInitialized('clusterRole') && null !== $data->getClusterRole()) {
            $dataArray['clusterRole'] = $data->getClusterRole();
        }
        if ($data->isInitialized('upTime') && null !== $data->getUpTime()) {
            $dataArray['upTime'] = $data->getUpTime();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemControlPlaneListListItem::class => false];
    }
}