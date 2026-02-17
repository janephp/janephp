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
class DpProfileDpDhcpProfileHostBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hostName', $data)) {
            $object->setHostName($data['hostName']);
        }
        if (\array_key_exists('leaseTime', $data)) {
            $object->setLeaseTime($data['leaseTime']);
        }
        if (\array_key_exists('profileId', $data)) {
            $object->setProfileId($data['profileId']);
        }
        if (\array_key_exists('hardwareEthernet', $data)) {
            $object->setHardwareEthernet($data['hardwareEthernet']);
        }
        if (\array_key_exists('fixedAddress', $data)) {
            $object->setFixedAddress($data['fixedAddress']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('hostId', $data)) {
            $object->setHostId($data['hostId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('dnsServers', $data)) {
            $values = [];
            foreach ($data['dnsServers'] as $value) {
                $values[] = $value;
            }
            $object->setDnsServers($values);
        }
        if (\array_key_exists('routers', $data)) {
            $values_1 = [];
            foreach ($data['routers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRouters($values_1);
        }
        if (\array_key_exists('broadcastAddress', $data)) {
            $object->setBroadcastAddress($data['broadcastAddress']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('hostName') && null !== $data->getHostName()) {
            $dataArray['hostName'] = $data->getHostName();
        }
        if ($data->isInitialized('leaseTime') && null !== $data->getLeaseTime()) {
            $dataArray['leaseTime'] = $data->getLeaseTime();
        }
        if ($data->isInitialized('profileId') && null !== $data->getProfileId()) {
            $dataArray['profileId'] = $data->getProfileId();
        }
        if ($data->isInitialized('hardwareEthernet') && null !== $data->getHardwareEthernet()) {
            $dataArray['hardwareEthernet'] = $data->getHardwareEthernet();
        }
        if ($data->isInitialized('fixedAddress') && null !== $data->getFixedAddress()) {
            $dataArray['fixedAddress'] = $data->getFixedAddress();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('hostId') && null !== $data->getHostId()) {
            $dataArray['hostId'] = $data->getHostId();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('dnsServers') && null !== $data->getDnsServers()) {
            $values = [];
            foreach ($data->getDnsServers() as $value) {
                $values[] = $value;
            }
            $dataArray['dnsServers'] = $values;
        }
        if ($data->isInitialized('routers') && null !== $data->getRouters()) {
            $values_1 = [];
            foreach ($data->getRouters() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['routers'] = $values_1;
        }
        if ($data->isInitialized('broadcastAddress') && null !== $data->getBroadcastAddress()) {
            $dataArray['broadcastAddress'] = $data->getBroadcastAddress();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO::class => false];
    }
}