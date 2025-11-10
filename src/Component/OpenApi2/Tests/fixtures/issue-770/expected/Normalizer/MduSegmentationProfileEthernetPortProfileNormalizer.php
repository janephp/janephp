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
class MduSegmentationProfileEthernetPortProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile();
        if (\array_key_exists('tunnelEnabled', $data) && \is_int($data['tunnelEnabled'])) {
            $data['tunnelEnabled'] = (bool) $data['tunnelEnabled'];
        }
        if (\array_key_exists('userSidePortEnabled', $data) && \is_int($data['userSidePortEnabled'])) {
            $data['userSidePortEnabled'] = (bool) $data['userSidePortEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('tunnelEnabled', $data)) {
            $object->setTunnelEnabled($data['tunnelEnabled']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('mduProfileId', $data)) {
            $object->setMduProfileId($data['mduProfileId']);
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->setAccessNetworkType($data['accessNetworkType']);
        }
        if (\array_key_exists('untagId', $data)) {
            $object->setUntagId($data['untagId']);
        }
        if (\array_key_exists('arpRequestRateLimit', $data)) {
            $object->setArpRequestRateLimit($data['arpRequestRateLimit']);
        }
        if (\array_key_exists('dhcpRequestRateLimit', $data)) {
            $object->setDhcpRequestRateLimit($data['dhcpRequestRateLimit']);
        }
        if (\array_key_exists('userSidePortEnabled', $data)) {
            $object->setUserSidePortEnabled($data['userSidePortEnabled']);
        }
        if (\array_key_exists('userSidePortMaxClient', $data)) {
            $object->setUserSidePortMaxClient($data['userSidePortMaxClient']);
        }
        if (\array_key_exists('userSidePortUplinkLimit', $data)) {
            $object->setUserSidePortUplinkLimit($data['userSidePortUplinkLimit']);
        }
        if (\array_key_exists('userSidePortDownlinkLimit', $data)) {
            $object->setUserSidePortDownlinkLimit($data['userSidePortDownlinkLimit']);
        }
        if (\array_key_exists('_8021X', $data)) {
            $object->set8021X($this->denormalizer->denormalize($data['_8021X'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPort8021X::class, 'json', $context));
        }
        if (\array_key_exists('tunnelProfile', $data)) {
            $object->setTunnelProfile($this->denormalizer->denormalize($data['tunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('ipsecProfile', $data)) {
            $object->setIpsecProfile($this->denormalizer->denormalize($data['ipsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('tunnelEnabled') && null !== $data->getTunnelEnabled()) {
            $dataArray['tunnelEnabled'] = $data->getTunnelEnabled();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('mduProfileId') && null !== $data->getMduProfileId()) {
            $dataArray['mduProfileId'] = $data->getMduProfileId();
        }
        if ($data->isInitialized('accessNetworkType') && null !== $data->getAccessNetworkType()) {
            $dataArray['accessNetworkType'] = $data->getAccessNetworkType();
        }
        if ($data->isInitialized('untagId') && null !== $data->getUntagId()) {
            $dataArray['untagId'] = $data->getUntagId();
        }
        if ($data->isInitialized('arpRequestRateLimit') && null !== $data->getArpRequestRateLimit()) {
            $dataArray['arpRequestRateLimit'] = $data->getArpRequestRateLimit();
        }
        if ($data->isInitialized('dhcpRequestRateLimit') && null !== $data->getDhcpRequestRateLimit()) {
            $dataArray['dhcpRequestRateLimit'] = $data->getDhcpRequestRateLimit();
        }
        if ($data->isInitialized('userSidePortEnabled') && null !== $data->getUserSidePortEnabled()) {
            $dataArray['userSidePortEnabled'] = $data->getUserSidePortEnabled();
        }
        if ($data->isInitialized('userSidePortMaxClient') && null !== $data->getUserSidePortMaxClient()) {
            $dataArray['userSidePortMaxClient'] = $data->getUserSidePortMaxClient();
        }
        if ($data->isInitialized('userSidePortUplinkLimit') && null !== $data->getUserSidePortUplinkLimit()) {
            $dataArray['userSidePortUplinkLimit'] = $data->getUserSidePortUplinkLimit();
        }
        if ($data->isInitialized('userSidePortDownlinkLimit') && null !== $data->getUserSidePortDownlinkLimit()) {
            $dataArray['userSidePortDownlinkLimit'] = $data->getUserSidePortDownlinkLimit();
        }
        if ($data->isInitialized('n8021X') && null !== $data->get8021X()) {
            $dataArray['_8021X'] = $this->normalizer->normalize($data->get8021X(), 'json', $context);
        }
        if ($data->isInitialized('tunnelProfile') && null !== $data->getTunnelProfile()) {
            $dataArray['tunnelProfile'] = $this->normalizer->normalize($data->getTunnelProfile(), 'json', $context);
        }
        if ($data->isInitialized('ipsecProfile') && null !== $data->getIpsecProfile()) {
            $dataArray['ipsecProfile'] = $this->normalizer->normalize($data->getIpsecProfile(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileEthernetPortProfile::class => false];
    }
}