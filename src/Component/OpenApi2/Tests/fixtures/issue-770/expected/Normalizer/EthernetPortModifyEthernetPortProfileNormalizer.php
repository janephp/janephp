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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('tunnelEnabled', $data)) {
            $object->tunnelEnabled = $data['tunnelEnabled'];
        }
        if (\array_key_exists('accessNetworkType', $data)) {
            $object->accessNetworkType = $data['accessNetworkType'];
        }
        if (\array_key_exists('untagId', $data)) {
            $object->untagId = $data['untagId'];
        }
        if (\array_key_exists('vlanMembers', $data)) {
            $object->vlanMembers = $data['vlanMembers'];
        }
        if (\array_key_exists('dynamicVlanEnabled', $data)) {
            $object->dynamicVlanEnabled = $data['dynamicVlanEnabled'];
        }
        if (\array_key_exists('guestVlan', $data)) {
            $object->guestVlan = $data['guestVlan'];
        }
        if (\array_key_exists('qinq', $data)) {
            $object->qinq = $this->denormalizer->denormalize($data['qinq'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQinq::class, 'json', $context);
        }
        if (\array_key_exists('antiSpoofingEnabled', $data)) {
            $object->antiSpoofingEnabled = $data['antiSpoofingEnabled'];
        }
        if (\array_key_exists('arpRequestRateLimit', $data)) {
            $object->arpRequestRateLimit = $data['arpRequestRateLimit'];
        }
        if (\array_key_exists('dhcpRequestRateLimit', $data)) {
            $object->dhcpRequestRateLimit = $data['dhcpRequestRateLimit'];
        }
        if (\array_key_exists('userSidePortEnabled', $data)) {
            $object->userSidePortEnabled = $data['userSidePortEnabled'];
        }
        if (\array_key_exists('userSidePortMaxClient', $data)) {
            $object->userSidePortMaxClient = $data['userSidePortMaxClient'];
        }
        if (\array_key_exists('userSidePortUplinkLimit', $data)) {
            $object->userSidePortUplinkLimit = $data['userSidePortUplinkLimit'];
        }
        if (\array_key_exists('userSidePortDownlinkLimit', $data)) {
            $object->userSidePortDownlinkLimit = $data['userSidePortDownlinkLimit'];
        }
        if (\array_key_exists('_8021X', $data)) {
            $object->n8021X = $this->denormalizer->denormalize($data['_8021X'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLanPort8021X::class, 'json', $context);
        }
        if (\array_key_exists('tunnelProfile', $data)) {
            $object->tunnelProfile = $this->denormalizer->denormalize($data['tunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('ipsecProfile', $data)) {
            $object->ipsecProfile = $this->denormalizer->denormalize($data['ipsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->firewallProfileId = $data['firewallProfileId'];
        }
        if (\array_key_exists('firewallAVCEnabled', $data)) {
            $object->firewallAVCEnabled = $data['firewallAVCEnabled'];
        }
        if (\array_key_exists('firewallUrlFilteringPolicyEnabled', $data)) {
            $object->firewallUrlFilteringPolicyEnabled = $data['firewallUrlFilteringPolicyEnabled'];
        }
        if (\array_key_exists('l2AccessControlPolicyId', $data)) {
            $object->l2AccessControlPolicyId = $data['l2AccessControlPolicyId'];
        }
        if (\array_key_exists('clientIsolationEnabled', $data)) {
            $object->clientIsolationEnabled = $data['clientIsolationEnabled'];
        }
        if (\array_key_exists('clientIsolationUnicastEnabled', $data)) {
            $object->clientIsolationUnicastEnabled = $data['clientIsolationUnicastEnabled'];
        }
        if (\array_key_exists('clientIsolationMulticastEnabled', $data)) {
            $object->clientIsolationMulticastEnabled = $data['clientIsolationMulticastEnabled'];
        }
        if (\array_key_exists('clientIsolationAutoVrrpEnabled', $data)) {
            $object->clientIsolationAutoVrrpEnabled = $data['clientIsolationAutoVrrpEnabled'];
        }
        if (\array_key_exists('clientIsolationWhitelist', $data)) {
            $object->clientIsolationWhitelist = $this->denormalizer->denormalize($data['clientIsolationWhitelist'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
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
        if (array_key_exists('tunnelEnabled', get_object_vars($data)) && null !== ($data->tunnelEnabled ?? null)) {
            $dataArray['tunnelEnabled'] = $data->tunnelEnabled ?? null;
        }
        if (array_key_exists('accessNetworkType', get_object_vars($data)) && null !== ($data->accessNetworkType ?? null)) {
            $dataArray['accessNetworkType'] = $data->accessNetworkType ?? null;
        }
        if (array_key_exists('untagId', get_object_vars($data)) && null !== ($data->untagId ?? null)) {
            $dataArray['untagId'] = $data->untagId ?? null;
        }
        if (array_key_exists('vlanMembers', get_object_vars($data)) && null !== ($data->vlanMembers ?? null)) {
            $dataArray['vlanMembers'] = $data->vlanMembers ?? null;
        }
        if (array_key_exists('dynamicVlanEnabled', get_object_vars($data)) && null !== ($data->dynamicVlanEnabled ?? null)) {
            $dataArray['dynamicVlanEnabled'] = $data->dynamicVlanEnabled ?? null;
        }
        if (array_key_exists('guestVlan', get_object_vars($data)) && null !== ($data->guestVlan ?? null)) {
            $dataArray['guestVlan'] = $data->guestVlan ?? null;
        }
        if (array_key_exists('qinq', get_object_vars($data)) && null !== ($data->qinq ?? null)) {
            $dataArray['qinq'] = ($data->qinq ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->qinq ?? null, 'json', $context));
        }
        if (array_key_exists('antiSpoofingEnabled', get_object_vars($data)) && null !== ($data->antiSpoofingEnabled ?? null)) {
            $dataArray['antiSpoofingEnabled'] = $data->antiSpoofingEnabled ?? null;
        }
        if (array_key_exists('arpRequestRateLimit', get_object_vars($data)) && null !== ($data->arpRequestRateLimit ?? null)) {
            $dataArray['arpRequestRateLimit'] = $data->arpRequestRateLimit ?? null;
        }
        if (array_key_exists('dhcpRequestRateLimit', get_object_vars($data)) && null !== ($data->dhcpRequestRateLimit ?? null)) {
            $dataArray['dhcpRequestRateLimit'] = $data->dhcpRequestRateLimit ?? null;
        }
        if (array_key_exists('userSidePortEnabled', get_object_vars($data)) && null !== ($data->userSidePortEnabled ?? null)) {
            $dataArray['userSidePortEnabled'] = $data->userSidePortEnabled ?? null;
        }
        if (array_key_exists('userSidePortMaxClient', get_object_vars($data)) && null !== ($data->userSidePortMaxClient ?? null)) {
            $dataArray['userSidePortMaxClient'] = $data->userSidePortMaxClient ?? null;
        }
        if (array_key_exists('userSidePortUplinkLimit', get_object_vars($data)) && null !== ($data->userSidePortUplinkLimit ?? null)) {
            $dataArray['userSidePortUplinkLimit'] = $data->userSidePortUplinkLimit ?? null;
        }
        if (array_key_exists('userSidePortDownlinkLimit', get_object_vars($data)) && null !== ($data->userSidePortDownlinkLimit ?? null)) {
            $dataArray['userSidePortDownlinkLimit'] = $data->userSidePortDownlinkLimit ?? null;
        }
        if (array_key_exists('n8021X', get_object_vars($data)) && null !== ($data->n8021X ?? null)) {
            $dataArray['_8021X'] = ($data->n8021X ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->n8021X ?? null, 'json', $context));
        }
        if (array_key_exists('tunnelProfile', get_object_vars($data)) && null !== ($data->tunnelProfile ?? null)) {
            $dataArray['tunnelProfile'] = ($data->tunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->tunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('ipsecProfile', get_object_vars($data)) && null !== ($data->ipsecProfile ?? null)) {
            $dataArray['ipsecProfile'] = ($data->ipsecProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->ipsecProfile ?? null, 'json', $context));
        }
        if (array_key_exists('firewallProfileId', get_object_vars($data)) && null !== ($data->firewallProfileId ?? null)) {
            $dataArray['firewallProfileId'] = $data->firewallProfileId ?? null;
        }
        if (array_key_exists('firewallAVCEnabled', get_object_vars($data)) && null !== ($data->firewallAVCEnabled ?? null)) {
            $dataArray['firewallAVCEnabled'] = $data->firewallAVCEnabled ?? null;
        }
        if (array_key_exists('firewallUrlFilteringPolicyEnabled', get_object_vars($data)) && null !== ($data->firewallUrlFilteringPolicyEnabled ?? null)) {
            $dataArray['firewallUrlFilteringPolicyEnabled'] = $data->firewallUrlFilteringPolicyEnabled ?? null;
        }
        if (array_key_exists('l2AccessControlPolicyId', get_object_vars($data)) && null !== ($data->l2AccessControlPolicyId ?? null)) {
            $dataArray['l2AccessControlPolicyId'] = $data->l2AccessControlPolicyId ?? null;
        }
        if (array_key_exists('clientIsolationEnabled', get_object_vars($data)) && null !== ($data->clientIsolationEnabled ?? null)) {
            $dataArray['clientIsolationEnabled'] = $data->clientIsolationEnabled ?? null;
        }
        if (array_key_exists('clientIsolationUnicastEnabled', get_object_vars($data)) && null !== ($data->clientIsolationUnicastEnabled ?? null)) {
            $dataArray['clientIsolationUnicastEnabled'] = $data->clientIsolationUnicastEnabled ?? null;
        }
        if (array_key_exists('clientIsolationMulticastEnabled', get_object_vars($data)) && null !== ($data->clientIsolationMulticastEnabled ?? null)) {
            $dataArray['clientIsolationMulticastEnabled'] = $data->clientIsolationMulticastEnabled ?? null;
        }
        if (array_key_exists('clientIsolationAutoVrrpEnabled', get_object_vars($data)) && null !== ($data->clientIsolationAutoVrrpEnabled ?? null)) {
            $dataArray['clientIsolationAutoVrrpEnabled'] = $data->clientIsolationAutoVrrpEnabled ?? null;
        }
        if (array_key_exists('clientIsolationWhitelist', get_object_vars($data)) && null !== ($data->clientIsolationWhitelist ?? null)) {
            $dataArray['clientIsolationWhitelist'] = ($data->clientIsolationWhitelist ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->clientIsolationWhitelist ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\EthernetPortModifyEthernetPortProfile::class => false];
    }
}