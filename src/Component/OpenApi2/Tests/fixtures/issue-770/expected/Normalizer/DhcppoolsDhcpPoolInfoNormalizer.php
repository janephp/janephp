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
class DhcppoolsDhcpPoolInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('poolIndex', $data)) {
            $object->setPoolIndex($data['poolIndex']);
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->setVlanId($data['vlanId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('poolStartIp', $data)) {
            $object->setPoolStartIp($data['poolStartIp']);
        }
        if (\array_key_exists('poolEndIp', $data)) {
            $object->setPoolEndIp($data['poolEndIp']);
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->setSubnetMask($data['subnetMask']);
        }
        if (\array_key_exists('apIp', $data)) {
            $object->setApIp($data['apIp']);
        }
        if (\array_key_exists('totalIpCount', $data)) {
            $object->setTotalIpCount($data['totalIpCount']);
        }
        if (\array_key_exists('usedIpCount', $data)) {
            $object->setUsedIpCount($data['usedIpCount']);
        }
        if (\array_key_exists('availableIpCount', $data)) {
            $object->setAvailableIpCount($data['availableIpCount']);
        }
        if (\array_key_exists('clientInfoList', $data)) {
            $object->setClientInfoList($this->denormalizer->denormalize($data['clientInfoList'], \Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfoClientInfoList::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('poolIndex') && null !== $data->getPoolIndex()) {
            $dataArray['poolIndex'] = $data->getPoolIndex();
        }
        if ($data->isInitialized('vlanId') && null !== $data->getVlanId()) {
            $dataArray['vlanId'] = $data->getVlanId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('poolStartIp') && null !== $data->getPoolStartIp()) {
            $dataArray['poolStartIp'] = $data->getPoolStartIp();
        }
        if ($data->isInitialized('poolEndIp') && null !== $data->getPoolEndIp()) {
            $dataArray['poolEndIp'] = $data->getPoolEndIp();
        }
        if ($data->isInitialized('subnetMask') && null !== $data->getSubnetMask()) {
            $dataArray['subnetMask'] = $data->getSubnetMask();
        }
        if ($data->isInitialized('apIp') && null !== $data->getApIp()) {
            $dataArray['apIp'] = $data->getApIp();
        }
        if ($data->isInitialized('totalIpCount') && null !== $data->getTotalIpCount()) {
            $dataArray['totalIpCount'] = $data->getTotalIpCount();
        }
        if ($data->isInitialized('usedIpCount') && null !== $data->getUsedIpCount()) {
            $dataArray['usedIpCount'] = $data->getUsedIpCount();
        }
        if ($data->isInitialized('availableIpCount') && null !== $data->getAvailableIpCount()) {
            $dataArray['availableIpCount'] = $data->getAvailableIpCount();
        }
        if ($data->isInitialized('clientInfoList') && null !== $data->getClientInfoList()) {
            $dataArray['clientInfoList'] = $this->normalizer->normalize($data->getClientInfoList(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DhcppoolsDhcpPoolInfo::class => false];
    }
}