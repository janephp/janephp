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
class SystemControllerListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem();
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
            $object->setId($data['id']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('hostName', $data)) {
            $object->setHostName($data['hostName']);
        }
        if (\array_key_exists('mac', $data)) {
            $object->setMac($data['mac']);
        }
        if (\array_key_exists('serialNumber', $data)) {
            $object->setSerialNumber($data['serialNumber']);
        }
        if (\array_key_exists('clusterRole', $data)) {
            $object->setClusterRole($data['clusterRole']);
        }
        if (\array_key_exists('controlNatIp', $data)) {
            $object->setControlNatIp($data['controlNatIp']);
        }
        if (\array_key_exists('uptimeInSec', $data)) {
            $object->setUptimeInSec($data['uptimeInSec']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('apVersion', $data)) {
            $object->setApVersion($data['apVersion']);
        }
        if (\array_key_exists('controlIp', $data)) {
            $object->setControlIp($data['controlIp']);
        }
        if (\array_key_exists('clusterIp', $data)) {
            $object->setClusterIp($data['clusterIp']);
        }
        if (\array_key_exists('managementIp', $data)) {
            $object->setManagementIp($data['managementIp']);
        }
        if (\array_key_exists('controlIpv6', $data)) {
            $object->setControlIpv6($data['controlIpv6']);
        }
        if (\array_key_exists('clusterIpv6', $data)) {
            $object->setClusterIpv6($data['clusterIpv6']);
        }
        if (\array_key_exists('managementIpv6', $data)) {
            $object->setManagementIpv6($data['managementIpv6']);
        }
        if (\array_key_exists('reservedPorts', $data)) {
            $values = [];
            foreach ($data['reservedPorts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class, 'json', $context);
            }
            $object->setReservedPorts($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('hostName') && null !== $data->getHostName()) {
            $dataArray['hostName'] = $data->getHostName();
        }
        if ($data->isInitialized('mac') && null !== $data->getMac()) {
            $dataArray['mac'] = $data->getMac();
        }
        if ($data->isInitialized('serialNumber') && null !== $data->getSerialNumber()) {
            $dataArray['serialNumber'] = $data->getSerialNumber();
        }
        if ($data->isInitialized('clusterRole') && null !== $data->getClusterRole()) {
            $dataArray['clusterRole'] = $data->getClusterRole();
        }
        if ($data->isInitialized('controlNatIp') && null !== $data->getControlNatIp()) {
            $dataArray['controlNatIp'] = $data->getControlNatIp();
        }
        if ($data->isInitialized('uptimeInSec') && null !== $data->getUptimeInSec()) {
            $dataArray['uptimeInSec'] = $data->getUptimeInSec();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('apVersion') && null !== $data->getApVersion()) {
            $dataArray['apVersion'] = $data->getApVersion();
        }
        if ($data->isInitialized('controlIp') && null !== $data->getControlIp()) {
            $dataArray['controlIp'] = $data->getControlIp();
        }
        if ($data->isInitialized('clusterIp') && null !== $data->getClusterIp()) {
            $dataArray['clusterIp'] = $data->getClusterIp();
        }
        if ($data->isInitialized('managementIp') && null !== $data->getManagementIp()) {
            $dataArray['managementIp'] = $data->getManagementIp();
        }
        if ($data->isInitialized('controlIpv6') && null !== $data->getControlIpv6()) {
            $dataArray['controlIpv6'] = $data->getControlIpv6();
        }
        if ($data->isInitialized('clusterIpv6') && null !== $data->getClusterIpv6()) {
            $dataArray['clusterIpv6'] = $data->getClusterIpv6();
        }
        if ($data->isInitialized('managementIpv6') && null !== $data->getManagementIpv6()) {
            $dataArray['managementIpv6'] = $data->getManagementIpv6();
        }
        if ($data->isInitialized('reservedPorts') && null !== $data->getReservedPorts()) {
            $values = [];
            foreach ($data->getReservedPorts() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['reservedPorts'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemControllerListListItem::class => false];
    }
}