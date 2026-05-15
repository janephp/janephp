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
class ProfileModifyFirewallProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyFirewallProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyFirewallProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyFirewallProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data) && \is_int($data['uplinkRateLimitingMbps'])) {
            $data['uplinkRateLimitingMbps'] = (float) $data['uplinkRateLimitingMbps'];
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data) && \is_int($data['downlinkRateLimitingMbps'])) {
            $data['downlinkRateLimitingMbps'] = (float) $data['downlinkRateLimitingMbps'];
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('uplinkRateLimitingMbps', $data)) {
            $object->setUplinkRateLimitingMbps($data['uplinkRateLimitingMbps']);
        }
        if (\array_key_exists('downlinkRateLimitingMbps', $data)) {
            $object->setDownlinkRateLimitingMbps($data['downlinkRateLimitingMbps']);
        }
        if (\array_key_exists('l3AccessControlPolicyId', $data)) {
            $object->setL3AccessControlPolicyId($data['l3AccessControlPolicyId']);
        }
        if (\array_key_exists('l2AccessControlPolicyId', $data)) {
            $object->setL2AccessControlPolicyId($data['l2AccessControlPolicyId']);
        }
        if (\array_key_exists('appPolicyId', $data)) {
            $object->setAppPolicyId($data['appPolicyId']);
        }
        if (\array_key_exists('urlFilteringPolicyId', $data)) {
            $object->setUrlFilteringPolicyId($data['urlFilteringPolicyId']);
        }
        if (\array_key_exists('devicePolicyId', $data)) {
            $object->setDevicePolicyId($data['devicePolicyId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('uplinkRateLimitingMbps') && null !== $data->getUplinkRateLimitingMbps()) {
            $dataArray['uplinkRateLimitingMbps'] = $data->getUplinkRateLimitingMbps();
        }
        if ($data->isInitialized('downlinkRateLimitingMbps') && null !== $data->getDownlinkRateLimitingMbps()) {
            $dataArray['downlinkRateLimitingMbps'] = $data->getDownlinkRateLimitingMbps();
        }
        if ($data->isInitialized('l3AccessControlPolicyId') && null !== $data->getL3AccessControlPolicyId()) {
            $dataArray['l3AccessControlPolicyId'] = $data->getL3AccessControlPolicyId();
        }
        if ($data->isInitialized('l2AccessControlPolicyId') && null !== $data->getL2AccessControlPolicyId()) {
            $dataArray['l2AccessControlPolicyId'] = $data->getL2AccessControlPolicyId();
        }
        if ($data->isInitialized('appPolicyId') && null !== $data->getAppPolicyId()) {
            $dataArray['appPolicyId'] = $data->getAppPolicyId();
        }
        if ($data->isInitialized('urlFilteringPolicyId') && null !== $data->getUrlFilteringPolicyId()) {
            $dataArray['urlFilteringPolicyId'] = $data->getUrlFilteringPolicyId();
        }
        if ($data->isInitialized('devicePolicyId') && null !== $data->getDevicePolicyId()) {
            $dataArray['devicePolicyId'] = $data->getDevicePolicyId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileModifyFirewallProfile::class => false];
    }
}
