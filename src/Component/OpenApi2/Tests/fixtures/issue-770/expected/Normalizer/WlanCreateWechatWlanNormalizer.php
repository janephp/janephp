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
class WlanCreateWechatWlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWechatWlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWechatWlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWechatWlan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('firewallUplinkRateLimitingMbps', $data) && \is_int($data['firewallUplinkRateLimitingMbps'])) {
            $data['firewallUplinkRateLimitingMbps'] = (float) $data['firewallUplinkRateLimitingMbps'];
        }
        if (\array_key_exists('firewallDownlinkRateLimitingMbps', $data) && \is_int($data['firewallDownlinkRateLimitingMbps'])) {
            $data['firewallDownlinkRateLimitingMbps'] = (float) $data['firewallDownlinkRateLimitingMbps'];
        }
        if (\array_key_exists('caleaEnabled', $data) && \is_int($data['caleaEnabled'])) {
            $data['caleaEnabled'] = (bool) $data['caleaEnabled'];
        }
        if (\array_key_exists('dpTunnelNatEnabled', $data) && \is_int($data['dpTunnelNatEnabled'])) {
            $data['dpTunnelNatEnabled'] = (bool) $data['dpTunnelNatEnabled'];
        }
        if (\array_key_exists('dpTunnelDhcpEnabled', $data) && \is_int($data['dpTunnelDhcpEnabled'])) {
            $data['dpTunnelDhcpEnabled'] = (bool) $data['dpTunnelDhcpEnabled'];
        }
        if (\array_key_exists('awsExtNasIPEnable', $data) && \is_int($data['awsExtNasIPEnable'])) {
            $data['awsExtNasIPEnable'] = (bool) $data['awsExtNasIPEnable'];
        }
        if (\array_key_exists('awsVenueEnable', $data) && \is_int($data['awsVenueEnable'])) {
            $data['awsVenueEnable'] = (bool) $data['awsVenueEnable'];
        }
        if (\array_key_exists('firewallWlanSpecificEnabled', $data) && \is_int($data['firewallWlanSpecificEnabled'])) {
            $data['firewallWlanSpecificEnabled'] = (bool) $data['firewallWlanSpecificEnabled'];
        }
        if (\array_key_exists('wifiAgileMultibandEnabled', $data) && \is_int($data['wifiAgileMultibandEnabled'])) {
            $data['wifiAgileMultibandEnabled'] = (bool) $data['wifiAgileMultibandEnabled'];
        }
        if (\array_key_exists('apHostNameAdvertisementEnabled', $data) && \is_int($data['apHostNameAdvertisementEnabled'])) {
            $data['apHostNameAdvertisementEnabled'] = (bool) $data['apHostNameAdvertisementEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('ssid', $data)) {
            $object->ssid = $data['ssid'];
        }
        if (\array_key_exists('hessid', $data)) {
            $object->hessid = $data['hessid'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('caleaEnabled', $data)) {
            $object->caleaEnabled = $data['caleaEnabled'];
        }
        if (\array_key_exists('dpTunnelNatEnabled', $data)) {
            $object->dpTunnelNatEnabled = $data['dpTunnelNatEnabled'];
        }
        if (\array_key_exists('dpTunnelDhcpEnabled', $data)) {
            $object->dpTunnelDhcpEnabled = $data['dpTunnelDhcpEnabled'];
        }
        if (\array_key_exists('awsExtNasIPEnable', $data)) {
            $object->awsExtNasIPEnable = $data['awsExtNasIPEnable'];
        }
        if (\array_key_exists('awsVenueEnable', $data)) {
            $object->awsVenueEnable = $data['awsVenueEnable'];
        }
        if (\array_key_exists('accessTunnelType', $data)) {
            $object->accessTunnelType = $data['accessTunnelType'];
        }
        if (\array_key_exists('coreTunnelProfile', $data)) {
            $object->coreTunnelProfile = $this->denormalizer->denormalize($data['coreTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanCoreTunnel::class, 'json', $context);
        }
        if (\array_key_exists('macAuth', $data)) {
            $object->macAuth = $this->denormalizer->denormalize($data['macAuth'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanMACAuth::class, 'json', $context);
        }
        if (\array_key_exists('encryption', $data)) {
            $object->encryption = $this->denormalizer->denormalize($data['encryption'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class, 'json', $context);
        }
        if (\array_key_exists('authServiceOrProfile', $data)) {
            $object->authServiceOrProfile = $this->denormalizer->denormalize($data['authServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class, 'json', $context);
        }
        if (\array_key_exists('operatorRealm', $data)) {
            $object->operatorRealm = $data['operatorRealm'];
        }
        if (\array_key_exists('accountingServiceOrProfile', $data)) {
            $object->accountingServiceOrProfile = $this->denormalizer->denormalize($data['accountingServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class, 'json', $context);
        }
        if (\array_key_exists('portalServiceProfile', $data)) {
            $object->portalServiceProfile = $this->denormalizer->denormalize($data['portalServiceProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('hotspot20Profile', $data)) {
            $object->hotspot20Profile = $this->denormalizer->denormalize($data['hotspot20Profile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->firewallProfileId = $data['firewallProfileId'];
        }
        if (\array_key_exists('firewallWlanSpecificEnabled', $data)) {
            $object->firewallWlanSpecificEnabled = $data['firewallWlanSpecificEnabled'];
        }
        if (\array_key_exists('firewallUplinkRateLimitingMbps', $data)) {
            $object->firewallUplinkRateLimitingMbps = $data['firewallUplinkRateLimitingMbps'];
        }
        if (\array_key_exists('firewallDownlinkRateLimitingMbps', $data)) {
            $object->firewallDownlinkRateLimitingMbps = $data['firewallDownlinkRateLimitingMbps'];
        }
        if (\array_key_exists('firewallL3AccessControlPolicyId', $data)) {
            $object->firewallL3AccessControlPolicyId = $data['firewallL3AccessControlPolicyId'];
        }
        if (\array_key_exists('firewallL2AccessControlPolicyId', $data)) {
            $object->firewallL2AccessControlPolicyId = $data['firewallL2AccessControlPolicyId'];
        }
        if (\array_key_exists('firewallAppPolicyId', $data)) {
            $object->firewallAppPolicyId = $data['firewallAppPolicyId'];
        }
        if (\array_key_exists('firewallUrlFilteringPolicyId', $data)) {
            $object->firewallUrlFilteringPolicyId = $data['firewallUrlFilteringPolicyId'];
        }
        if (\array_key_exists('firewallDevicePolicyId', $data)) {
            $object->firewallDevicePolicyId = $data['firewallDevicePolicyId'];
        }
        if (\array_key_exists('defaultUserTrafficProfile', $data)) {
            $object->defaultUserTrafficProfile = $this->denormalizer->denormalize($data['defaultUserTrafficProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('precedenceProfileId', $data)) {
            $object->precedenceProfileId = $data['precedenceProfileId'];
        }
        if (\array_key_exists('schedule', $data)) {
            $object->schedule = $this->denormalizer->denormalize($data['schedule'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanSchedule::class, 'json', $context);
        }
        if (\array_key_exists('vlan', $data)) {
            $object->vlan = $this->denormalizer->denormalize($data['vlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class, 'json', $context);
        }
        if (\array_key_exists('l2ACL', $data)) {
            $object->l2ACL = $this->denormalizer->denormalize($data['l2ACL'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('devicePolicy', $data)) {
            $object->devicePolicy = $this->denormalizer->denormalize($data['devicePolicy'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('radiusOptions', $data)) {
            $object->radiusOptions = $this->denormalizer->denormalize($data['radiusOptions'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class, 'json', $context);
        }
        if (\array_key_exists('advancedOptions', $data)) {
            $object->advancedOptions = $this->denormalizer->denormalize($data['advancedOptions'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class, 'json', $context);
        }
        if (\array_key_exists('diffServProfile', $data)) {
            $object->diffServProfile = $this->denormalizer->denormalize($data['diffServProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('qosMaps', $data)) {
            $values = [];
            foreach ($data['qosMaps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanDSCPSetting::class, 'json', $context);
            }
            $object->qosMaps = $values;
        }
        if (\array_key_exists('dpsk', $data)) {
            $object->dpsk = $this->denormalizer->denormalize($data['dpsk'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class, 'json', $context);
        }
        if (\array_key_exists('externalDpsk', $data)) {
            $object->externalDpsk = $this->denormalizer->denormalize($data['externalDpsk'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanExternalDpsk::class, 'json', $context);
        }
        if (\array_key_exists('dnsServerProfile', $data)) {
            $object->dnsServerProfile = $this->denormalizer->denormalize($data['dnsServerProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('accessTunnelProfile', $data)) {
            $object->accessTunnelProfile = $this->denormalizer->denormalize($data['accessTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('accessIpsecProfile', $data)) {
            $object->accessIpsecProfile = $this->denormalizer->denormalize($data['accessIpsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('splitTunnelProfileId', $data)) {
            $object->splitTunnelProfileId = $data['splitTunnelProfileId'];
        }
        if (\array_key_exists('portalDetectionProfileId', $data)) {
            $object->portalDetectionProfileId = $data['portalDetectionProfileId'];
        }
        if (\array_key_exists('flexiVpnProfile', $data)) {
            $object->flexiVpnProfile = $this->denormalizer->denormalize($data['flexiVpnProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\FlexiVpnFlexiVpnSetting::class, 'json', $context);
        }
        if (\array_key_exists('wifiAgileMultibandEnabled', $data)) {
            $object->wifiAgileMultibandEnabled = $data['wifiAgileMultibandEnabled'];
        }
        if (\array_key_exists('apHostNameAdvertisementEnabled', $data)) {
            $object->apHostNameAdvertisementEnabled = $data['apHostNameAdvertisementEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $dataArray['ssid'] = $data->ssid ?? null;
        if (array_key_exists('hessid', get_object_vars($data)) && null !== ($data->hessid ?? null)) {
            $dataArray['hessid'] = $data->hessid ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('caleaEnabled', get_object_vars($data)) && null !== ($data->caleaEnabled ?? null)) {
            $dataArray['caleaEnabled'] = $data->caleaEnabled ?? null;
        }
        if (array_key_exists('dpTunnelNatEnabled', get_object_vars($data)) && null !== ($data->dpTunnelNatEnabled ?? null)) {
            $dataArray['dpTunnelNatEnabled'] = $data->dpTunnelNatEnabled ?? null;
        }
        if (array_key_exists('dpTunnelDhcpEnabled', get_object_vars($data)) && null !== ($data->dpTunnelDhcpEnabled ?? null)) {
            $dataArray['dpTunnelDhcpEnabled'] = $data->dpTunnelDhcpEnabled ?? null;
        }
        if (array_key_exists('awsExtNasIPEnable', get_object_vars($data)) && null !== ($data->awsExtNasIPEnable ?? null)) {
            $dataArray['awsExtNasIPEnable'] = $data->awsExtNasIPEnable ?? null;
        }
        if (array_key_exists('awsVenueEnable', get_object_vars($data)) && null !== ($data->awsVenueEnable ?? null)) {
            $dataArray['awsVenueEnable'] = $data->awsVenueEnable ?? null;
        }
        if (array_key_exists('accessTunnelType', get_object_vars($data)) && null !== ($data->accessTunnelType ?? null)) {
            $dataArray['accessTunnelType'] = $data->accessTunnelType ?? null;
        }
        if (array_key_exists('coreTunnelProfile', get_object_vars($data)) && null !== ($data->coreTunnelProfile ?? null)) {
            $dataArray['coreTunnelProfile'] = ($data->coreTunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->coreTunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('macAuth', get_object_vars($data)) && null !== ($data->macAuth ?? null)) {
            $dataArray['macAuth'] = ($data->macAuth ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->macAuth ?? null, 'json', $context));
        }
        if (array_key_exists('encryption', get_object_vars($data)) && null !== ($data->encryption ?? null)) {
            $dataArray['encryption'] = ($data->encryption ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->encryption ?? null, 'json', $context));
        }
        if (array_key_exists('authServiceOrProfile', get_object_vars($data)) && null !== ($data->authServiceOrProfile ?? null)) {
            $dataArray['authServiceOrProfile'] = ($data->authServiceOrProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->authServiceOrProfile ?? null, 'json', $context));
        }
        if (array_key_exists('operatorRealm', get_object_vars($data)) && null !== ($data->operatorRealm ?? null)) {
            $dataArray['operatorRealm'] = $data->operatorRealm ?? null;
        }
        if (array_key_exists('accountingServiceOrProfile', get_object_vars($data)) && null !== ($data->accountingServiceOrProfile ?? null)) {
            $dataArray['accountingServiceOrProfile'] = ($data->accountingServiceOrProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->accountingServiceOrProfile ?? null, 'json', $context));
        }
        $dataArray['portalServiceProfile'] = ($data->portalServiceProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->portalServiceProfile ?? null, 'json', $context));
        if (array_key_exists('hotspot20Profile', get_object_vars($data)) && null !== ($data->hotspot20Profile ?? null)) {
            $dataArray['hotspot20Profile'] = ($data->hotspot20Profile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->hotspot20Profile ?? null, 'json', $context));
        }
        if (array_key_exists('firewallProfileId', get_object_vars($data)) && null !== ($data->firewallProfileId ?? null)) {
            $dataArray['firewallProfileId'] = $data->firewallProfileId ?? null;
        }
        if (array_key_exists('firewallWlanSpecificEnabled', get_object_vars($data)) && null !== ($data->firewallWlanSpecificEnabled ?? null)) {
            $dataArray['firewallWlanSpecificEnabled'] = $data->firewallWlanSpecificEnabled ?? null;
        }
        if (array_key_exists('firewallUplinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->firewallUplinkRateLimitingMbps ?? null)) {
            $dataArray['firewallUplinkRateLimitingMbps'] = $data->firewallUplinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('firewallDownlinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->firewallDownlinkRateLimitingMbps ?? null)) {
            $dataArray['firewallDownlinkRateLimitingMbps'] = $data->firewallDownlinkRateLimitingMbps ?? null;
        }
        if (array_key_exists('firewallL3AccessControlPolicyId', get_object_vars($data)) && null !== ($data->firewallL3AccessControlPolicyId ?? null)) {
            $dataArray['firewallL3AccessControlPolicyId'] = $data->firewallL3AccessControlPolicyId ?? null;
        }
        if (array_key_exists('firewallL2AccessControlPolicyId', get_object_vars($data)) && null !== ($data->firewallL2AccessControlPolicyId ?? null)) {
            $dataArray['firewallL2AccessControlPolicyId'] = $data->firewallL2AccessControlPolicyId ?? null;
        }
        if (array_key_exists('firewallAppPolicyId', get_object_vars($data)) && null !== ($data->firewallAppPolicyId ?? null)) {
            $dataArray['firewallAppPolicyId'] = $data->firewallAppPolicyId ?? null;
        }
        if (array_key_exists('firewallUrlFilteringPolicyId', get_object_vars($data)) && null !== ($data->firewallUrlFilteringPolicyId ?? null)) {
            $dataArray['firewallUrlFilteringPolicyId'] = $data->firewallUrlFilteringPolicyId ?? null;
        }
        if (array_key_exists('firewallDevicePolicyId', get_object_vars($data)) && null !== ($data->firewallDevicePolicyId ?? null)) {
            $dataArray['firewallDevicePolicyId'] = $data->firewallDevicePolicyId ?? null;
        }
        if (array_key_exists('defaultUserTrafficProfile', get_object_vars($data)) && null !== ($data->defaultUserTrafficProfile ?? null)) {
            $dataArray['defaultUserTrafficProfile'] = ($data->defaultUserTrafficProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->defaultUserTrafficProfile ?? null, 'json', $context));
        }
        if (array_key_exists('precedenceProfileId', get_object_vars($data)) && null !== ($data->precedenceProfileId ?? null)) {
            $dataArray['precedenceProfileId'] = $data->precedenceProfileId ?? null;
        }
        if (array_key_exists('schedule', get_object_vars($data)) && null !== ($data->schedule ?? null)) {
            $dataArray['schedule'] = ($data->schedule ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->schedule ?? null, 'json', $context));
        }
        if (array_key_exists('vlan', get_object_vars($data)) && null !== ($data->vlan ?? null)) {
            $dataArray['vlan'] = ($data->vlan ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->vlan ?? null, 'json', $context));
        }
        if (array_key_exists('l2ACL', get_object_vars($data)) && null !== ($data->l2ACL ?? null)) {
            $dataArray['l2ACL'] = ($data->l2ACL ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->l2ACL ?? null, 'json', $context));
        }
        if (array_key_exists('devicePolicy', get_object_vars($data)) && null !== ($data->devicePolicy ?? null)) {
            $dataArray['devicePolicy'] = ($data->devicePolicy ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->devicePolicy ?? null, 'json', $context));
        }
        if (array_key_exists('radiusOptions', get_object_vars($data)) && null !== ($data->radiusOptions ?? null)) {
            $dataArray['radiusOptions'] = ($data->radiusOptions ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->radiusOptions ?? null, 'json', $context));
        }
        if (array_key_exists('advancedOptions', get_object_vars($data)) && null !== ($data->advancedOptions ?? null)) {
            $dataArray['advancedOptions'] = ($data->advancedOptions ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->advancedOptions ?? null, 'json', $context));
        }
        if (array_key_exists('diffServProfile', get_object_vars($data)) && null !== ($data->diffServProfile ?? null)) {
            $dataArray['diffServProfile'] = ($data->diffServProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->diffServProfile ?? null, 'json', $context));
        }
        if (array_key_exists('qosMaps', get_object_vars($data)) && null !== ($data->qosMaps ?? null)) {
            $values = [];
            foreach ($data->qosMaps ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['qosMaps'] = $values;
        }
        if (array_key_exists('dpsk', get_object_vars($data)) && null !== ($data->dpsk ?? null)) {
            $dataArray['dpsk'] = ($data->dpsk ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->dpsk ?? null, 'json', $context));
        }
        if (array_key_exists('externalDpsk', get_object_vars($data)) && null !== ($data->externalDpsk ?? null)) {
            $dataArray['externalDpsk'] = ($data->externalDpsk ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->externalDpsk ?? null, 'json', $context));
        }
        if (array_key_exists('dnsServerProfile', get_object_vars($data)) && null !== ($data->dnsServerProfile ?? null)) {
            $dataArray['dnsServerProfile'] = ($data->dnsServerProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->dnsServerProfile ?? null, 'json', $context));
        }
        if (array_key_exists('accessTunnelProfile', get_object_vars($data)) && null !== ($data->accessTunnelProfile ?? null)) {
            $dataArray['accessTunnelProfile'] = ($data->accessTunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->accessTunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('accessIpsecProfile', get_object_vars($data)) && null !== ($data->accessIpsecProfile ?? null)) {
            $dataArray['accessIpsecProfile'] = ($data->accessIpsecProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->accessIpsecProfile ?? null, 'json', $context));
        }
        if (array_key_exists('splitTunnelProfileId', get_object_vars($data)) && null !== ($data->splitTunnelProfileId ?? null)) {
            $dataArray['splitTunnelProfileId'] = $data->splitTunnelProfileId ?? null;
        }
        if (array_key_exists('portalDetectionProfileId', get_object_vars($data)) && null !== ($data->portalDetectionProfileId ?? null)) {
            $dataArray['portalDetectionProfileId'] = $data->portalDetectionProfileId ?? null;
        }
        if (array_key_exists('flexiVpnProfile', get_object_vars($data)) && null !== ($data->flexiVpnProfile ?? null)) {
            $dataArray['flexiVpnProfile'] = ($data->flexiVpnProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->flexiVpnProfile ?? null, 'json', $context));
        }
        if (array_key_exists('wifiAgileMultibandEnabled', get_object_vars($data)) && null !== ($data->wifiAgileMultibandEnabled ?? null)) {
            $dataArray['wifiAgileMultibandEnabled'] = $data->wifiAgileMultibandEnabled ?? null;
        }
        if (array_key_exists('apHostNameAdvertisementEnabled', get_object_vars($data)) && null !== ($data->apHostNameAdvertisementEnabled ?? null)) {
            $dataArray['apHostNameAdvertisementEnabled'] = $data->apHostNameAdvertisementEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateWechatWlan::class => false];
    }
}