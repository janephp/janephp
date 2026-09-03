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
class PortalserviceModifyHotspot20WlanProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20WlanProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20WlanProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20WlanProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('internetOption', $data) && \is_int($data['internetOption'])) {
            $data['internetOption'] = (bool) $data['internetOption'];
        }
        if (\array_key_exists('singleSsidEnabled', $data) && \is_int($data['singleSsidEnabled'])) {
            $data['singleSsidEnabled'] = (bool) $data['singleSsidEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('operator', $data)) {
            $object->operator = $this->denormalizer->denormalize($data['operator'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('identityProviders', $data)) {
            $values = [];
            foreach ($data['identityProviders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
            }
            $object->identityProviders = $values;
        }
        if (\array_key_exists('defaultIdentityProvider', $data)) {
            $object->defaultIdentityProvider = $this->denormalizer->denormalize($data['defaultIdentityProvider'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('signupSsid', $data)) {
            $object->signupSsid = $this->denormalizer->denormalize($data['signupSsid'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('internetOption', $data)) {
            $object->internetOption = $data['internetOption'];
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->accessNetworkType = $data['accessNetworkType'];
        }
        if (\array_key_exists('ipv4AddressType', $data)) {
            $object->ipv4AddressType = $data['ipv4AddressType'];
        }
        if (\array_key_exists('ipv6AddressType', $data)) {
            $object->ipv6AddressType = $data['ipv6AddressType'];
        }
        if (\array_key_exists('connectionCapabilities', $data)) {
            $values_1 = [];
            foreach ($data['connectionCapabilities'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceDefaultConnectionCapability::class, 'json', $context);
            }
            $object->connectionCapabilities = $values_1;
        }
        if (\array_key_exists('customConnectionCapabilities', $data)) {
            $values_2 = [];
            foreach ($data['customConnectionCapabilities'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceConnectionCapability::class, 'json', $context);
            }
            $object->customConnectionCapabilities = $values_2;
        }
        if (\array_key_exists('singleSsidEnabled', $data)) {
            $object->singleSsidEnabled = $data['singleSsidEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('operator', get_object_vars($data)) && null !== ($data->operator ?? null)) {
            $dataArray['operator'] = ($data->operator ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->operator ?? null, 'json', $context));
        }
        if (array_key_exists('identityProviders', get_object_vars($data)) && null !== ($data->identityProviders ?? null)) {
            $values = [];
            foreach ($data->identityProviders ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['identityProviders'] = $values;
        }
        if (array_key_exists('defaultIdentityProvider', get_object_vars($data)) && null !== ($data->defaultIdentityProvider ?? null)) {
            $dataArray['defaultIdentityProvider'] = ($data->defaultIdentityProvider ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->defaultIdentityProvider ?? null, 'json', $context));
        }
        if (array_key_exists('signupSsid', get_object_vars($data)) && null !== ($data->signupSsid ?? null)) {
            $dataArray['signupSsid'] = ($data->signupSsid ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->signupSsid ?? null, 'json', $context));
        }
        if (array_key_exists('internetOption', get_object_vars($data)) && null !== ($data->internetOption ?? null)) {
            $dataArray['internetOption'] = $data->internetOption ?? null;
        }
        if (array_key_exists('accessNetworkType', get_object_vars($data)) && null !== ($data->accessNetworkType ?? null)) {
            $dataArray['accessNetworkType'] = $data->accessNetworkType ?? null;
        }
        if (array_key_exists('ipv4AddressType', get_object_vars($data)) && null !== ($data->ipv4AddressType ?? null)) {
            $dataArray['ipv4AddressType'] = $data->ipv4AddressType ?? null;
        }
        if (array_key_exists('ipv6AddressType', get_object_vars($data)) && null !== ($data->ipv6AddressType ?? null)) {
            $dataArray['ipv6AddressType'] = $data->ipv6AddressType ?? null;
        }
        if (array_key_exists('connectionCapabilities', get_object_vars($data)) && null !== ($data->connectionCapabilities ?? null)) {
            $values_1 = [];
            foreach ($data->connectionCapabilities ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['connectionCapabilities'] = $values_1;
        }
        if (array_key_exists('customConnectionCapabilities', get_object_vars($data)) && null !== ($data->customConnectionCapabilities ?? null)) {
            $values_2 = [];
            foreach ($data->customConnectionCapabilities ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['customConnectionCapabilities'] = $values_2;
        }
        if (array_key_exists('singleSsidEnabled', get_object_vars($data)) && null !== ($data->singleSsidEnabled ?? null)) {
            $dataArray['singleSsidEnabled'] = $data->singleSsidEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceModifyHotspot20WlanProfile::class => false];
    }
}