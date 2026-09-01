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
class PortalserviceCreateHotspot20WlanProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile();
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
            $object->operator = $this->denormalizer->denormalize($data['operator'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('identityProviders', $data)) {
            $values = [];
            foreach ($data['identityProviders'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
            }
            $object->identityProviders = $values;
        }
        if (\array_key_exists('defaultIdentityProvider', $data)) {
            $object->defaultIdentityProvider = $this->denormalizer->denormalize($data['defaultIdentityProvider'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('signupSsid', $data)) {
            $object->signupSsid = $this->denormalizer->denormalize($data['signupSsid'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
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
        if (\array_key_exists('singleSsidEnabled', $data)) {
            $object->singleSsidEnabled = $data['singleSsidEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['operator'] = ($data->operator ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->operator ?? null, 'json', $context));
        if (array_key_exists('identityProviders', get_object_vars($data)) && null !== ($data->identityProviders ?? null)) {
            $values = [];
            foreach ($data->identityProviders ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['identityProviders'] = $values;
        }
        $dataArray['defaultIdentityProvider'] = ($data->defaultIdentityProvider ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->defaultIdentityProvider ?? null, 'json', $context));
        if (array_key_exists('signupSsid', get_object_vars($data)) && null !== ($data->signupSsid ?? null)) {
            $dataArray['signupSsid'] = ($data->signupSsid ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->signupSsid ?? null, 'json', $context));
        }
        $dataArray['internetOption'] = $data->internetOption ?? null;
        $dataArray['accessNetworkType'] = $data->accessNetworkType ?? null;
        $dataArray['ipv4AddressType'] = $data->ipv4AddressType ?? null;
        $dataArray['ipv6AddressType'] = $data->ipv6AddressType ?? null;
        if (array_key_exists('singleSsidEnabled', get_object_vars($data)) && null !== ($data->singleSsidEnabled ?? null)) {
            $dataArray['singleSsidEnabled'] = $data->singleSsidEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile::class => false];
    }
}