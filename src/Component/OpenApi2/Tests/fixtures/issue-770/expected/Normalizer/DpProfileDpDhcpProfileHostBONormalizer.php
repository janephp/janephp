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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hostName', $data)) {
            $object->hostName = $data['hostName'];
        }
        if (\array_key_exists('leaseTime', $data)) {
            $object->leaseTime = $data['leaseTime'];
        }
        if (\array_key_exists('profileId', $data)) {
            $object->profileId = $data['profileId'];
        }
        if (\array_key_exists('hardwareEthernet', $data)) {
            $object->hardwareEthernet = $data['hardwareEthernet'];
        }
        if (\array_key_exists('fixedAddress', $data)) {
            $object->fixedAddress = $data['fixedAddress'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('hostId', $data)) {
            $object->hostId = $data['hostId'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('dnsServers', $data)) {
            $values = [];
            foreach ($data['dnsServers'] as $value) {
                $values[] = $value;
            }
            $object->dnsServers = $values;
        }
        if (\array_key_exists('routers', $data)) {
            $values_1 = [];
            foreach ($data['routers'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->routers = $values_1;
        }
        if (\array_key_exists('broadcastAddress', $data)) {
            $object->broadcastAddress = $data['broadcastAddress'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('hostName', get_object_vars($data)) && null !== ($data->hostName ?? null)) {
            $dataArray['hostName'] = $data->hostName ?? null;
        }
        if (array_key_exists('leaseTime', get_object_vars($data)) && null !== ($data->leaseTime ?? null)) {
            $dataArray['leaseTime'] = $data->leaseTime ?? null;
        }
        if (array_key_exists('profileId', get_object_vars($data)) && null !== ($data->profileId ?? null)) {
            $dataArray['profileId'] = $data->profileId ?? null;
        }
        if (array_key_exists('hardwareEthernet', get_object_vars($data)) && null !== ($data->hardwareEthernet ?? null)) {
            $dataArray['hardwareEthernet'] = $data->hardwareEthernet ?? null;
        }
        if (array_key_exists('fixedAddress', get_object_vars($data)) && null !== ($data->fixedAddress ?? null)) {
            $dataArray['fixedAddress'] = $data->fixedAddress ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('hostId', get_object_vars($data)) && null !== ($data->hostId ?? null)) {
            $dataArray['hostId'] = $data->hostId ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('dnsServers', get_object_vars($data)) && null !== ($data->dnsServers ?? null)) {
            $values = [];
            foreach ($data->dnsServers ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['dnsServers'] = $values;
        }
        if (array_key_exists('routers', get_object_vars($data)) && null !== ($data->routers ?? null)) {
            $values_1 = [];
            foreach ($data->routers ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['routers'] = $values_1;
        }
        if (array_key_exists('broadcastAddress', get_object_vars($data)) && null !== ($data->broadcastAddress ?? null)) {
            $dataArray['broadcastAddress'] = $data->broadcastAddress ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileHostBO::class => false];
    }
}