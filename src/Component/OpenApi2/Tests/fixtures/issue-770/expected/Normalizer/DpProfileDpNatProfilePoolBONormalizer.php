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
class DpProfileDpNatProfilePoolBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('publicPrefix', $data)) {
            $object->publicPrefix = $data['publicPrefix'];
        }
        if (\array_key_exists('profileId', $data)) {
            $object->profileId = $data['profileId'];
        }
        if (\array_key_exists('poolId', $data)) {
            $object->poolId = $data['poolId'];
        }
        if (\array_key_exists('natPortRange', $data)) {
            $object->natPortRange = $data['natPortRange'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('vlanType', $data)) {
            $object->vlanType = $data['vlanType'];
        }
        if (\array_key_exists('publicVlan', $data)) {
            $object->publicVlan = $data['publicVlan'];
        }
        if (\array_key_exists('privateVlanRange', $data)) {
            $values = [];
            foreach ($data['privateVlanRange'] as $value) {
                $values[] = $value;
            }
            $object->privateVlanRange = $values;
        }
        if (\array_key_exists('privateQinqVlanRange', $data)) {
            $values_1 = [];
            foreach ($data['privateQinqVlanRange'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePrivateQinqVlanRangeBO::class, 'json', $context);
            }
            $object->privateQinqVlanRange = $values_1;
        }
        if (\array_key_exists('publicAddressRange', $data)) {
            $values_2 = [];
            foreach ($data['publicAddressRange'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->publicAddressRange = $values_2;
        }
        if (\array_key_exists('poolName', $data)) {
            $object->poolName = $data['poolName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('publicPrefix', get_object_vars($data)) && null !== ($data->publicPrefix ?? null)) {
            $dataArray['publicPrefix'] = $data->publicPrefix ?? null;
        }
        if (array_key_exists('profileId', get_object_vars($data)) && null !== ($data->profileId ?? null)) {
            $dataArray['profileId'] = $data->profileId ?? null;
        }
        if (array_key_exists('poolId', get_object_vars($data)) && null !== ($data->poolId ?? null)) {
            $dataArray['poolId'] = $data->poolId ?? null;
        }
        if (array_key_exists('natPortRange', get_object_vars($data)) && null !== ($data->natPortRange ?? null)) {
            $dataArray['natPortRange'] = $data->natPortRange ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('vlanType', get_object_vars($data)) && null !== ($data->vlanType ?? null)) {
            $dataArray['vlanType'] = $data->vlanType ?? null;
        }
        if (array_key_exists('publicVlan', get_object_vars($data)) && null !== ($data->publicVlan ?? null)) {
            $dataArray['publicVlan'] = $data->publicVlan ?? null;
        }
        if (array_key_exists('privateVlanRange', get_object_vars($data)) && null !== ($data->privateVlanRange ?? null)) {
            $values = [];
            foreach ($data->privateVlanRange ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['privateVlanRange'] = $values;
        }
        if (array_key_exists('privateQinqVlanRange', get_object_vars($data)) && null !== ($data->privateQinqVlanRange ?? null)) {
            $values_1 = [];
            foreach ($data->privateQinqVlanRange ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['privateQinqVlanRange'] = $values_1;
        }
        if (array_key_exists('publicAddressRange', get_object_vars($data)) && null !== ($data->publicAddressRange ?? null)) {
            $values_2 = [];
            foreach ($data->publicAddressRange ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['publicAddressRange'] = $values_2;
        }
        if (array_key_exists('poolName', get_object_vars($data)) && null !== ($data->poolName ?? null)) {
            $dataArray['poolName'] = $data->poolName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpNatProfilePoolBO::class => false];
    }
}