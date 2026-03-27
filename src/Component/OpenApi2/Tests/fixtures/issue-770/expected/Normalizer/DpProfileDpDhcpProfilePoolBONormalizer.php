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
            $object->setLeaseTime($data['leaseTime']);
        }
        if (\array_key_exists('hostName', $data)) {
            $object->setHostName($data['hostName']);
        }
        if (\array_key_exists('primaryDnsServer', $data)) {
            $object->setPrimaryDnsServer($data['primaryDnsServer']);
        }
        if (\array_key_exists('secondaryRouter', $data)) {
            $object->setSecondaryRouter($data['secondaryRouter']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('netMask', $data)) {
            $object->setNetMask($data['netMask']);
        }
        if (\array_key_exists('ipRange', $data)) {
            $object->setIpRange($data['ipRange']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('vlanType', $data)) {
            $object->setVlanType($data['vlanType']);
        }
        if (\array_key_exists('secondaryDnsServer', $data)) {
            $object->setSecondaryDnsServer($data['secondaryDnsServer']);
        }
        if (\array_key_exists('primaryRouter', $data)) {
            $object->setPrimaryRouter($data['primaryRouter']);
        }
        if (\array_key_exists('broadcastAddress', $data)) {
            $object->setBroadcastAddress($data['broadcastAddress']);
        }
        if (\array_key_exists('profileId', $data)) {
            $object->setProfileId($data['profileId']);
        }
        if (\array_key_exists('vlanRange', $data)) {
            $object->setVlanRange($data['vlanRange']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('poolId', $data)) {
            $object->setPoolId($data['poolId']);
        }
        if (\array_key_exists('qinqVlanRanges', $data)) {
            $values = [];
            foreach ($data['qinqVlanRanges'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileQinqVlanRangeBO::class, 'json', $context);
            }
            $object->setQinqVlanRanges($values);
        }
        if (\array_key_exists('subOptionSpaces', $data)) {
            $values_1 = [];
            foreach ($data['subOptionSpaces'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileOptionSpaceInstance::class, 'json', $context);
            }
            $object->setSubOptionSpaces($values_1);
        }
        if (\array_key_exists('excludeAddressRange', $data)) {
            $object->setExcludeAddressRange($data['excludeAddressRange']);
        }
        if (\array_key_exists('poolName', $data)) {
            $object->setPoolName($data['poolName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('leaseTime') && null !== $data->getLeaseTime()) {
            $dataArray['leaseTime'] = $data->getLeaseTime();
        }
        if ($data->isInitialized('hostName') && null !== $data->getHostName()) {
            $dataArray['hostName'] = $data->getHostName();
        }
        if ($data->isInitialized('primaryDnsServer') && null !== $data->getPrimaryDnsServer()) {
            $dataArray['primaryDnsServer'] = $data->getPrimaryDnsServer();
        }
        if ($data->isInitialized('secondaryRouter') && null !== $data->getSecondaryRouter()) {
            $dataArray['secondaryRouter'] = $data->getSecondaryRouter();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('netMask') && null !== $data->getNetMask()) {
            $dataArray['netMask'] = $data->getNetMask();
        }
        if ($data->isInitialized('ipRange') && null !== $data->getIpRange()) {
            $dataArray['ipRange'] = $data->getIpRange();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('vlanType') && null !== $data->getVlanType()) {
            $dataArray['vlanType'] = $data->getVlanType();
        }
        if ($data->isInitialized('secondaryDnsServer') && null !== $data->getSecondaryDnsServer()) {
            $dataArray['secondaryDnsServer'] = $data->getSecondaryDnsServer();
        }
        if ($data->isInitialized('primaryRouter') && null !== $data->getPrimaryRouter()) {
            $dataArray['primaryRouter'] = $data->getPrimaryRouter();
        }
        if ($data->isInitialized('broadcastAddress') && null !== $data->getBroadcastAddress()) {
            $dataArray['broadcastAddress'] = $data->getBroadcastAddress();
        }
        if ($data->isInitialized('profileId') && null !== $data->getProfileId()) {
            $dataArray['profileId'] = $data->getProfileId();
        }
        if ($data->isInitialized('vlanRange') && null !== $data->getVlanRange()) {
            $dataArray['vlanRange'] = $data->getVlanRange();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('poolId') && null !== $data->getPoolId()) {
            $dataArray['poolId'] = $data->getPoolId();
        }
        if ($data->isInitialized('qinqVlanRanges') && null !== $data->getQinqVlanRanges()) {
            $values = [];
            foreach ($data->getQinqVlanRanges() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['qinqVlanRanges'] = $values;
        }
        if ($data->isInitialized('subOptionSpaces') && null !== $data->getSubOptionSpaces()) {
            $values_1 = [];
            foreach ($data->getSubOptionSpaces() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['subOptionSpaces'] = $values_1;
        }
        if ($data->isInitialized('excludeAddressRange') && null !== $data->getExcludeAddressRange()) {
            $dataArray['excludeAddressRange'] = $data->getExcludeAddressRange();
        }
        if ($data->isInitialized('poolName') && null !== $data->getPoolName()) {
            $dataArray['poolName'] = $data->getPoolName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfilePoolBO::class => false];
    }
}