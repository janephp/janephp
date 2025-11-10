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
class EthernetPortModifyEthernetPortProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile();
        if (\array_key_exists('tunnelEnabled', $data) && \is_int($data['tunnelEnabled'])) {
            $data['tunnelEnabled'] = (bool) $data['tunnelEnabled'];
        }
        if (\array_key_exists('dynamicVlanEnabled', $data) && \is_int($data['dynamicVlanEnabled'])) {
            $data['dynamicVlanEnabled'] = (bool) $data['dynamicVlanEnabled'];
        }
        if (\array_key_exists('antiSpoofingEnabled', $data) && \is_int($data['antiSpoofingEnabled'])) {
            $data['antiSpoofingEnabled'] = (bool) $data['antiSpoofingEnabled'];
        }
        if (\array_key_exists('userSidePortEnabled', $data) && \is_int($data['userSidePortEnabled'])) {
            $data['userSidePortEnabled'] = (bool) $data['userSidePortEnabled'];
        }
        if (\array_key_exists('firewallAVCEnabled', $data) && \is_int($data['firewallAVCEnabled'])) {
            $data['firewallAVCEnabled'] = (bool) $data['firewallAVCEnabled'];
        }
        if (\array_key_exists('firewallUrlFilteringPolicyEnabled', $data) && \is_int($data['firewallUrlFilteringPolicyEnabled'])) {
            $data['firewallUrlFilteringPolicyEnabled'] = (bool) $data['firewallUrlFilteringPolicyEnabled'];
        }
        if (\array_key_exists('clientIsolationEnabled', $data) && \is_int($data['clientIsolationEnabled'])) {
            $data['clientIsolationEnabled'] = (bool) $data['clientIsolationEnabled'];
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data) && \is_int($data['clientIsolationUnicastEnabled'])) {
            $data['clientIsolationUnicastEnabled'] = (bool) $data['clientIsolationUnicastEnabled'];
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data) && \is_int($data['clientIsolationMulticastEnabled'])) {
            $data['clientIsolationMulticastEnabled'] = (bool) $data['clientIsolationMulticastEnabled'];
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data) && \is_int($data['clientIsolationAutoVrrpEnabled'])) {
            $data['clientIsolationAutoVrrpEnabled'] = (bool) $data['clientIsolationAutoVrrpEnabled'];
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
        if (\array_key_exists('tunnelEnabled', $data)) {
            $object->setTunnelEnabled($data['tunnelEnabled']);
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->setAccessNetworkType($data['accessNetworkType']);
        }
        if (\array_key_exists('untagId', $data)) {
            $object->setUntagId($data['untagId']);
        }
        if (\array_key_exists('vlanMembers', $data)) {
            $object->setVlanMembers($data['vlanMembers']);
        }
        if (\array_key_exists('dynamicVlanEnabled', $data)) {
            $object->setDynamicVlanEnabled($data['dynamicVlanEnabled']);
        }
        if (\array_key_exists('guestVlan', $data)) {
            $object->setGuestVlan($data['guestVlan']);
        }
        if (\array_key_exists('qinq', $data)) {
            $object->setQinq($this->denormalizer->denormalize($data['qinq'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQinq::class, 'json', $context));
        }
        if (\array_key_exists('antiSpoofingEnabled', $data)) {
            $object->setAntiSpoofingEnabled($data['antiSpoofingEnabled']);
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
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->setFirewallProfileId($data['firewallProfileId']);
        }
        if (\array_key_exists('firewallAVCEnabled', $data)) {
            $object->setFirewallAVCEnabled($data['firewallAVCEnabled']);
        }
        if (\array_key_exists('firewallUrlFilteringPolicyEnabled', $data)) {
            $object->setFirewallUrlFilteringPolicyEnabled($data['firewallUrlFilteringPolicyEnabled']);
        }
        if (\array_key_exists('l2AccessControlPolicyId', $data)) {
            $object->setL2AccessControlPolicyId($data['l2AccessControlPolicyId']);
        }
        if (\array_key_exists('clientIsolationEnabled', $data)) {
            $object->setClientIsolationEnabled($data['clientIsolationEnabled']);
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data)) {
            $object->setClientIsolationUnicastEnabled($data['clientIsolationUnicastEnabled']);
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data)) {
            $object->setClientIsolationMulticastEnabled($data['clientIsolationMulticastEnabled']);
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data)) {
            $object->setClientIsolationAutoVrrpEnabled($data['clientIsolationAutoVrrpEnabled']);
        }
        if (\array_key_exists('clientIsolationWhitelist', $data)) {
            $object->setClientIsolationWhitelist($this->denormalizer->denormalize($data['clientIsolationWhitelist'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
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
        if ($data->isInitialized('tunnelEnabled') && null !== $data->getTunnelEnabled()) {
            $dataArray['tunnelEnabled'] = $data->getTunnelEnabled();
        }
        if ($data->isInitialized('accessNetworkType') && null !== $data->getAccessNetworkType()) {
            $dataArray['accessNetworkType'] = $data->getAccessNetworkType();
        }
        if ($data->isInitialized('untagId') && null !== $data->getUntagId()) {
            $dataArray['untagId'] = $data->getUntagId();
        }
        if ($data->isInitialized('vlanMembers') && null !== $data->getVlanMembers()) {
            $dataArray['vlanMembers'] = $data->getVlanMembers();
        }
        if ($data->isInitialized('dynamicVlanEnabled') && null !== $data->getDynamicVlanEnabled()) {
            $dataArray['dynamicVlanEnabled'] = $data->getDynamicVlanEnabled();
        }
        if ($data->isInitialized('guestVlan') && null !== $data->getGuestVlan()) {
            $dataArray['guestVlan'] = $data->getGuestVlan();
        }
        if ($data->isInitialized('qinq') && null !== $data->getQinq()) {
            $dataArray['qinq'] = $this->normalizer->normalize($data->getQinq(), 'json', $context);
        }
        if ($data->isInitialized('antiSpoofingEnabled') && null !== $data->getAntiSpoofingEnabled()) {
            $dataArray['antiSpoofingEnabled'] = $data->getAntiSpoofingEnabled();
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
        if ($data->isInitialized('firewallProfileId') && null !== $data->getFirewallProfileId()) {
            $dataArray['firewallProfileId'] = $data->getFirewallProfileId();
        }
        if ($data->isInitialized('firewallAVCEnabled') && null !== $data->getFirewallAVCEnabled()) {
            $dataArray['firewallAVCEnabled'] = $data->getFirewallAVCEnabled();
        }
        if ($data->isInitialized('firewallUrlFilteringPolicyEnabled') && null !== $data->getFirewallUrlFilteringPolicyEnabled()) {
            $dataArray['firewallUrlFilteringPolicyEnabled'] = $data->getFirewallUrlFilteringPolicyEnabled();
        }
        if ($data->isInitialized('l2AccessControlPolicyId') && null !== $data->getL2AccessControlPolicyId()) {
            $dataArray['l2AccessControlPolicyId'] = $data->getL2AccessControlPolicyId();
        }
        if ($data->isInitialized('clientIsolationEnabled') && null !== $data->getClientIsolationEnabled()) {
            $dataArray['clientIsolationEnabled'] = $data->getClientIsolationEnabled();
        }
        if ($data->isInitialized('clientIsolationUnicastEnabled') && null !== $data->getClientIsolationUnicastEnabled()) {
            $dataArray['clientIsolationUnicastEnabled'] = $data->getClientIsolationUnicastEnabled();
        }
        if ($data->isInitialized('clientIsolationMulticastEnabled') && null !== $data->getClientIsolationMulticastEnabled()) {
            $dataArray['clientIsolationMulticastEnabled'] = $data->getClientIsolationMulticastEnabled();
        }
        if ($data->isInitialized('clientIsolationAutoVrrpEnabled') && null !== $data->getClientIsolationAutoVrrpEnabled()) {
            $dataArray['clientIsolationAutoVrrpEnabled'] = $data->getClientIsolationAutoVrrpEnabled();
        }
        if ($data->isInitialized('clientIsolationWhitelist') && null !== $data->getClientIsolationWhitelist()) {
            $dataArray['clientIsolationWhitelist'] = $this->normalizer->normalize($data->getClientIsolationWhitelist(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile::class => false];
    }
}