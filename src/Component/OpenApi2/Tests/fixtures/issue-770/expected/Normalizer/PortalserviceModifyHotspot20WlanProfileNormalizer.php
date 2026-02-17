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
class PortalserviceModifyHotspot20WlanProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20WlanProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20WlanProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20WlanProfile();
        if (\array_key_exists('internetOption', $data) && \is_int($data['internetOption'])) {
            $data['internetOption'] = (bool) $data['internetOption'];
        }
        if (\array_key_exists('singleSsidEnabled', $data) && \is_int($data['singleSsidEnabled'])) {
            $data['singleSsidEnabled'] = (bool) $data['singleSsidEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('operator', $data)) {
            $object->setOperator($this->denormalizer->denormalize($data['operator'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('identityProviders', $data)) {
            $values = [];
            foreach ($data['identityProviders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
            }
            $object->setIdentityProviders($values);
        }
        if (\array_key_exists('defaultIdentityProvider', $data)) {
            $object->setDefaultIdentityProvider($this->denormalizer->denormalize($data['defaultIdentityProvider'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('signupSsid', $data)) {
            $object->setSignupSsid($this->denormalizer->denormalize($data['signupSsid'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('internetOption', $data)) {
            $object->setInternetOption($data['internetOption']);
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->setAccessNetworkType($data['accessNetworkType']);
        }
        if (\array_key_exists('ipv4AddressType', $data)) {
            $object->setIpv4AddressType($data['ipv4AddressType']);
        }
        if (\array_key_exists('ipv6AddressType', $data)) {
            $object->setIpv6AddressType($data['ipv6AddressType']);
        }
        if (\array_key_exists('connectionCapabilities', $data)) {
            $values_1 = [];
            foreach ($data['connectionCapabilities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceDefaultConnectionCapability::class, 'json', $context);
            }
            $object->setConnectionCapabilities($values_1);
        }
        if (\array_key_exists('customConnectionCapabilities', $data)) {
            $values_2 = [];
            foreach ($data['customConnectionCapabilities'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceConnectionCapability::class, 'json', $context);
            }
            $object->setCustomConnectionCapabilities($values_2);
        }
        if (\array_key_exists('singleSsidEnabled', $data)) {
            $object->setSingleSsidEnabled($data['singleSsidEnabled']);
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
        if ($data->isInitialized('operator') && null !== $data->getOperator()) {
            $dataArray['operator'] = $this->normalizer->normalize($data->getOperator(), 'json', $context);
        }
        if ($data->isInitialized('identityProviders') && null !== $data->getIdentityProviders()) {
            $values = [];
            foreach ($data->getIdentityProviders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['identityProviders'] = $values;
        }
        if ($data->isInitialized('defaultIdentityProvider') && null !== $data->getDefaultIdentityProvider()) {
            $dataArray['defaultIdentityProvider'] = $this->normalizer->normalize($data->getDefaultIdentityProvider(), 'json', $context);
        }
        if ($data->isInitialized('signupSsid') && null !== $data->getSignupSsid()) {
            $dataArray['signupSsid'] = $this->normalizer->normalize($data->getSignupSsid(), 'json', $context);
        }
        if ($data->isInitialized('internetOption') && null !== $data->getInternetOption()) {
            $dataArray['internetOption'] = $data->getInternetOption();
        }
        if ($data->isInitialized('accessNetworkType') && null !== $data->getAccessNetworkType()) {
            $dataArray['accessNetworkType'] = $data->getAccessNetworkType();
        }
        if ($data->isInitialized('ipv4AddressType') && null !== $data->getIpv4AddressType()) {
            $dataArray['ipv4AddressType'] = $data->getIpv4AddressType();
        }
        if ($data->isInitialized('ipv6AddressType') && null !== $data->getIpv6AddressType()) {
            $dataArray['ipv6AddressType'] = $data->getIpv6AddressType();
        }
        if ($data->isInitialized('connectionCapabilities') && null !== $data->getConnectionCapabilities()) {
            $values_1 = [];
            foreach ($data->getConnectionCapabilities() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['connectionCapabilities'] = $values_1;
        }
        if ($data->isInitialized('customConnectionCapabilities') && null !== $data->getCustomConnectionCapabilities()) {
            $values_2 = [];
            foreach ($data->getCustomConnectionCapabilities() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['customConnectionCapabilities'] = $values_2;
        }
        if ($data->isInitialized('singleSsidEnabled') && null !== $data->getSingleSsidEnabled()) {
            $dataArray['singleSsidEnabled'] = $data->getSingleSsidEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyHotspot20WlanProfile::class => false];
    }
}