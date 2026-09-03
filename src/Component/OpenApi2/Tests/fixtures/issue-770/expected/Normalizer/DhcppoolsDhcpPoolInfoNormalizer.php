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
class DhcppoolsDhcpPoolInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('poolIndex', $data)) {
            $object->poolIndex = $data['poolIndex'];
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('poolStartIp', $data)) {
            $object->poolStartIp = $data['poolStartIp'];
        }
        if (\array_key_exists('poolEndIp', $data)) {
            $object->poolEndIp = $data['poolEndIp'];
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->subnetMask = $data['subnetMask'];
        }
        if (\array_key_exists('apIp', $data)) {
            $object->apIp = $data['apIp'];
        }
        if (\array_key_exists('totalIpCount', $data)) {
            $object->totalIpCount = $data['totalIpCount'];
        }
        if (\array_key_exists('usedIpCount', $data)) {
            $object->usedIpCount = $data['usedIpCount'];
        }
        if (\array_key_exists('availableIpCount', $data)) {
            $object->availableIpCount = $data['availableIpCount'];
        }
        if (\array_key_exists('clientInfoList', $data)) {
            $object->clientInfoList = $this->denormalizer->denormalize($data['clientInfoList'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfoClientInfoList::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('poolIndex', get_object_vars($data)) && null !== ($data->poolIndex ?? null)) {
            $dataArray['poolIndex'] = $data->poolIndex ?? null;
        }
        if (array_key_exists('vlanId', get_object_vars($data)) && null !== ($data->vlanId ?? null)) {
            $dataArray['vlanId'] = $data->vlanId ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('poolStartIp', get_object_vars($data)) && null !== ($data->poolStartIp ?? null)) {
            $dataArray['poolStartIp'] = $data->poolStartIp ?? null;
        }
        if (array_key_exists('poolEndIp', get_object_vars($data)) && null !== ($data->poolEndIp ?? null)) {
            $dataArray['poolEndIp'] = $data->poolEndIp ?? null;
        }
        if (array_key_exists('subnetMask', get_object_vars($data)) && null !== ($data->subnetMask ?? null)) {
            $dataArray['subnetMask'] = $data->subnetMask ?? null;
        }
        if (array_key_exists('apIp', get_object_vars($data)) && null !== ($data->apIp ?? null)) {
            $dataArray['apIp'] = $data->apIp ?? null;
        }
        if (array_key_exists('totalIpCount', get_object_vars($data)) && null !== ($data->totalIpCount ?? null)) {
            $dataArray['totalIpCount'] = $data->totalIpCount ?? null;
        }
        if (array_key_exists('usedIpCount', get_object_vars($data)) && null !== ($data->usedIpCount ?? null)) {
            $dataArray['usedIpCount'] = $data->usedIpCount ?? null;
        }
        if (array_key_exists('availableIpCount', get_object_vars($data)) && null !== ($data->availableIpCount ?? null)) {
            $dataArray['availableIpCount'] = $data->availableIpCount ?? null;
        }
        if (array_key_exists('clientInfoList', get_object_vars($data)) && null !== ($data->clientInfoList ?? null)) {
            $dataArray['clientInfoList'] = ($data->clientInfoList ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientInfoList ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DhcppoolsDhcpPoolInfo::class => false];
    }
}