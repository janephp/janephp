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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile();
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
        if (\array_key_exists('singleSsidEnabled', $data)) {
            $object->setSingleSsidEnabled($data['singleSsidEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $dataArray['operator'] = $this->normalizer->normalize($data->getOperator(), 'json', $context);
        if ($data->isInitialized('identityProviders') && null !== $data->getIdentityProviders()) {
            $values = [];
            foreach ($data->getIdentityProviders() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['identityProviders'] = $values;
        }
        $dataArray['defaultIdentityProvider'] = $this->normalizer->normalize($data->getDefaultIdentityProvider(), 'json', $context);
        if ($data->isInitialized('signupSsid') && null !== $data->getSignupSsid()) {
            $dataArray['signupSsid'] = $this->normalizer->normalize($data->getSignupSsid(), 'json', $context);
        }
        $dataArray['internetOption'] = $data->getInternetOption();
        $dataArray['accessNetworkType'] = $data->getAccessNetworkType();
        $dataArray['ipv4AddressType'] = $data->getIpv4AddressType();
        $dataArray['ipv6AddressType'] = $data->getIpv6AddressType();
        if ($data->isInitialized('singleSsidEnabled') && null !== $data->getSingleSsidEnabled()) {
            $dataArray['singleSsidEnabled'] = $data->getSingleSsidEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspot20WlanProfile::class => false];
    }
}