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
class CommonDhcpProfileRefNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpProfileRef::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpProfileRef::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpProfileRef();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('subnetNetworkIp', $data)) {
            $object->setSubnetNetworkIp($data['subnetNetworkIp']);
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->setSubnetMask($data['subnetMask']);
        }
        if (\array_key_exists('poolStartIp', $data)) {
            $object->setPoolStartIp($data['poolStartIp']);
        }
        if (\array_key_exists('poolEndIp', $data)) {
            $object->setPoolEndIp($data['poolEndIp']);
        }
        if (\array_key_exists('primaryDnsIp', $data)) {
            $object->setPrimaryDnsIp($data['primaryDnsIp']);
        }
        if (\array_key_exists('secondaryDnsIp', $data)) {
            $object->setSecondaryDnsIp($data['secondaryDnsIp']);
        }
        if (\array_key_exists('leaseTimeHours', $data)) {
            $object->setLeaseTimeHours($data['leaseTimeHours']);
        }
        if (\array_key_exists('leaseTimeMinutes', $data)) {
            $object->setLeaseTimeMinutes($data['leaseTimeMinutes']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('subnetNetworkIp') && null !== $data->getSubnetNetworkIp()) {
            $dataArray['subnetNetworkIp'] = $data->getSubnetNetworkIp();
        }
        if ($data->isInitialized('subnetMask') && null !== $data->getSubnetMask()) {
            $dataArray['subnetMask'] = $data->getSubnetMask();
        }
        if ($data->isInitialized('poolStartIp') && null !== $data->getPoolStartIp()) {
            $dataArray['poolStartIp'] = $data->getPoolStartIp();
        }
        if ($data->isInitialized('poolEndIp') && null !== $data->getPoolEndIp()) {
            $dataArray['poolEndIp'] = $data->getPoolEndIp();
        }
        if ($data->isInitialized('primaryDnsIp') && null !== $data->getPrimaryDnsIp()) {
            $dataArray['primaryDnsIp'] = $data->getPrimaryDnsIp();
        }
        if ($data->isInitialized('secondaryDnsIp') && null !== $data->getSecondaryDnsIp()) {
            $dataArray['secondaryDnsIp'] = $data->getSecondaryDnsIp();
        }
        if ($data->isInitialized('leaseTimeHours') && null !== $data->getLeaseTimeHours()) {
            $dataArray['leaseTimeHours'] = $data->getLeaseTimeHours();
        }
        if ($data->isInitialized('leaseTimeMinutes') && null !== $data->getLeaseTimeMinutes()) {
            $dataArray['leaseTimeMinutes'] = $data->getLeaseTimeMinutes();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpProfileRef::class => false];
    }
}