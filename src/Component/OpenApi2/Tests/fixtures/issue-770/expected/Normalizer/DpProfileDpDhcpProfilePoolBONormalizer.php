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
class DpProfileDpDhcpProfilePoolBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('leaseTime', $data)) {
            $object->leaseTime = $data['leaseTime'];
        }
        if (\array_key_exists('hostName', $data)) {
            $object->hostName = $data['hostName'];
        }
        if (\array_key_exists('primaryDnsServer', $data)) {
            $object->primaryDnsServer = $data['primaryDnsServer'];
        }
        if (\array_key_exists('secondaryRouter', $data)) {
            $object->secondaryRouter = $data['secondaryRouter'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('netMask', $data)) {
            $object->netMask = $data['netMask'];
        }
        if (\array_key_exists('ipRange', $data)) {
            $object->ipRange = $data['ipRange'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('vlanType', $data)) {
            $object->vlanType = $data['vlanType'];
        }
        if (\array_key_exists('secondaryDnsServer', $data)) {
            $object->secondaryDnsServer = $data['secondaryDnsServer'];
        }
        if (\array_key_exists('primaryRouter', $data)) {
            $object->primaryRouter = $data['primaryRouter'];
        }
        if (\array_key_exists('broadcastAddress', $data)) {
            $object->broadcastAddress = $data['broadcastAddress'];
        }
        if (\array_key_exists('profileId', $data)) {
            $object->profileId = $data['profileId'];
        }
        if (\array_key_exists('vlanRange', $data)) {
            $object->vlanRange = $data['vlanRange'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('poolId', $data)) {
            $object->poolId = $data['poolId'];
        }
        if (\array_key_exists('qinqVlanRanges', $data)) {
            $values = [];
            foreach ($data['qinqVlanRanges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileQinqVlanRangeBO::class, 'json', $context);
            }
            $object->qinqVlanRanges = $values;
        }
        if (\array_key_exists('subOptionSpaces', $data)) {
            $values_1 = [];
            foreach ($data['subOptionSpaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceInstance::class, 'json', $context);
            }
            $object->subOptionSpaces = $values_1;
        }
        if (\array_key_exists('excludeAddressRange', $data)) {
            $object->excludeAddressRange = $data['excludeAddressRange'];
        }
        if (\array_key_exists('poolName', $data)) {
            $object->poolName = $data['poolName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('leaseTime', get_object_vars($data)) && null !== ($data->leaseTime ?? null)) {
            $dataArray['leaseTime'] = $data->leaseTime ?? null;
        }
        if (array_key_exists('hostName', get_object_vars($data)) && null !== ($data->hostName ?? null)) {
            $dataArray['hostName'] = $data->hostName ?? null;
        }
        if (array_key_exists('primaryDnsServer', get_object_vars($data)) && null !== ($data->primaryDnsServer ?? null)) {
            $dataArray['primaryDnsServer'] = $data->primaryDnsServer ?? null;
        }
        if (array_key_exists('secondaryRouter', get_object_vars($data)) && null !== ($data->secondaryRouter ?? null)) {
            $dataArray['secondaryRouter'] = $data->secondaryRouter ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('netMask', get_object_vars($data)) && null !== ($data->netMask ?? null)) {
            $dataArray['netMask'] = $data->netMask ?? null;
        }
        if (array_key_exists('ipRange', get_object_vars($data)) && null !== ($data->ipRange ?? null)) {
            $dataArray['ipRange'] = $data->ipRange ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('vlanType', get_object_vars($data)) && null !== ($data->vlanType ?? null)) {
            $dataArray['vlanType'] = $data->vlanType ?? null;
        }
        if (array_key_exists('secondaryDnsServer', get_object_vars($data)) && null !== ($data->secondaryDnsServer ?? null)) {
            $dataArray['secondaryDnsServer'] = $data->secondaryDnsServer ?? null;
        }
        if (array_key_exists('primaryRouter', get_object_vars($data)) && null !== ($data->primaryRouter ?? null)) {
            $dataArray['primaryRouter'] = $data->primaryRouter ?? null;
        }
        if (array_key_exists('broadcastAddress', get_object_vars($data)) && null !== ($data->broadcastAddress ?? null)) {
            $dataArray['broadcastAddress'] = $data->broadcastAddress ?? null;
        }
        if (array_key_exists('profileId', get_object_vars($data)) && null !== ($data->profileId ?? null)) {
            $dataArray['profileId'] = $data->profileId ?? null;
        }
        if (array_key_exists('vlanRange', get_object_vars($data)) && null !== ($data->vlanRange ?? null)) {
            $dataArray['vlanRange'] = $data->vlanRange ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('poolId', get_object_vars($data)) && null !== ($data->poolId ?? null)) {
            $dataArray['poolId'] = $data->poolId ?? null;
        }
        if (array_key_exists('qinqVlanRanges', get_object_vars($data)) && null !== ($data->qinqVlanRanges ?? null)) {
            $values = [];
            foreach ($data->qinqVlanRanges ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['qinqVlanRanges'] = $values;
        }
        if (array_key_exists('subOptionSpaces', get_object_vars($data)) && null !== ($data->subOptionSpaces ?? null)) {
            $values_1 = [];
            foreach ($data->subOptionSpaces ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['subOptionSpaces'] = $values_1;
        }
        if (array_key_exists('excludeAddressRange', get_object_vars($data)) && null !== ($data->excludeAddressRange ?? null)) {
            $dataArray['excludeAddressRange'] = $data->excludeAddressRange ?? null;
        }
        if (array_key_exists('poolName', get_object_vars($data)) && null !== ($data->poolName ?? null)) {
            $dataArray['poolName'] = $data->poolName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO::class => false];
    }
}