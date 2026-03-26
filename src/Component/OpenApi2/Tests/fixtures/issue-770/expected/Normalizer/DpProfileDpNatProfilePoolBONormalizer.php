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
class DpProfileDpNatProfilePoolBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('publicPrefix', $data)) {
            $object->setPublicPrefix($data['publicPrefix']);
        }
        if (\array_key_exists('profileId', $data)) {
            $object->setProfileId($data['profileId']);
        }
        if (\array_key_exists('poolId', $data)) {
            $object->setPoolId($data['poolId']);
        }
        if (\array_key_exists('natPortRange', $data)) {
            $object->setNatPortRange($data['natPortRange']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('vlanType', $data)) {
            $object->setVlanType($data['vlanType']);
        }
        if (\array_key_exists('publicVlan', $data)) {
            $object->setPublicVlan($data['publicVlan']);
        }
        if (\array_key_exists('privateVlanRange', $data)) {
            $values = [];
            foreach ($data['privateVlanRange'] as $value) {
                $values[] = $value;
            }
            $object->setPrivateVlanRange($values);
        }
        if (\array_key_exists('privateQinqVlanRange', $data)) {
            $values_1 = [];
            foreach ($data['privateQinqVlanRange'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePrivateQinqVlanRangeBO::class, 'json', $context);
            }
            $object->setPrivateQinqVlanRange($values_1);
        }
        if (\array_key_exists('publicAddressRange', $data)) {
            $values_2 = [];
            foreach ($data['publicAddressRange'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPublicAddressRange($values_2);
        }
        if (\array_key_exists('poolName', $data)) {
            $object->setPoolName($data['poolName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('publicPrefix') && null !== $data->getPublicPrefix()) {
            $dataArray['publicPrefix'] = $data->getPublicPrefix();
        }
        if ($data->isInitialized('profileId') && null !== $data->getProfileId()) {
            $dataArray['profileId'] = $data->getProfileId();
        }
        if ($data->isInitialized('poolId') && null !== $data->getPoolId()) {
            $dataArray['poolId'] = $data->getPoolId();
        }
        if ($data->isInitialized('natPortRange') && null !== $data->getNatPortRange()) {
            $dataArray['natPortRange'] = $data->getNatPortRange();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('vlanType') && null !== $data->getVlanType()) {
            $dataArray['vlanType'] = $data->getVlanType();
        }
        if ($data->isInitialized('publicVlan') && null !== $data->getPublicVlan()) {
            $dataArray['publicVlan'] = $data->getPublicVlan();
        }
        if ($data->isInitialized('privateVlanRange') && null !== $data->getPrivateVlanRange()) {
            $values = [];
            foreach ($data->getPrivateVlanRange() as $value) {
                $values[] = $value;
            }
            $dataArray['privateVlanRange'] = $values;
        }
        if ($data->isInitialized('privateQinqVlanRange') && null !== $data->getPrivateQinqVlanRange()) {
            $values_1 = [];
            foreach ($data->getPrivateQinqVlanRange() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['privateQinqVlanRange'] = $values_1;
        }
        if ($data->isInitialized('publicAddressRange') && null !== $data->getPublicAddressRange()) {
            $values_2 = [];
            foreach ($data->getPublicAddressRange() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['publicAddressRange'] = $values_2;
        }
        if ($data->isInitialized('poolName') && null !== $data->getPoolName()) {
            $dataArray['poolName'] = $data->getPoolName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePoolBO::class => false];
    }
}