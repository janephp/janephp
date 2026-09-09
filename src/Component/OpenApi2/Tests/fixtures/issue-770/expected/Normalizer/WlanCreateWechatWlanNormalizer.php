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
class WlanCreateWechatWlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWechatWlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWechatWlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWechatWlan();
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
            $object->coreTunnelProfile = $this->denormalizer->denormalize($data['coreTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanCoreTunnel::class, 'json', $context);
        }
        if (\array_key_exists('macAuth', $data)) {
            $object->macAuth = $this->denormalizer->denormalize($data['macAuth'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanMACAuth::class, 'json', $context);
        }
        if (\array_key_exists('encryption', $data)) {
            $object->encryption = $this->denormalizer->denormalize($data['encryption'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption::class, 'json', $context);
        }
        if (\array_key_exists('authServiceOrProfile', $data)) {
            $object->authServiceOrProfile = $this->denormalizer->denormalize($data['authServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAuthentication::class, 'json', $context);
        }
        if (\array_key_exists('operatorRealm', $data)) {
            $object->operatorRealm = $data['operatorRealm'];
        }
        if (\array_key_exists('accountingServiceOrProfile', $data)) {
            $object->accountingServiceOrProfile = $this->denormalizer->denormalize($data['accountingServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting::class, 'json', $context);
        }
        if (\array_key_exists('portalServiceProfile', $data)) {
            $object->portalServiceProfile = $this->denormalizer->denormalize($data['portalServiceProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('hotspot20Profile', $data)) {
            $object->hotspot20Profile = $this->denormalizer->denormalize($data['hotspot20Profile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
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
            $object->defaultUserTrafficProfile = $this->denormalizer->denormalize($data['defaultUserTrafficProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('precedenceProfileId', $data)) {
            $object->precedenceProfileId = $data['precedenceProfileId'];
        }
        if (\array_key_exists('schedule', $data)) {
            $object->schedule = $this->denormalizer->denormalize($data['schedule'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanSchedule::class, 'json', $context);
        }
        if (\array_key_exists('vlan', $data)) {
            $object->vlan = $this->denormalizer->denormalize($data['vlan'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan::class, 'json', $context);
        }
        if (\array_key_exists('l2ACL', $data)) {
            $object->l2ACL = $this->denormalizer->denormalize($data['l2ACL'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('devicePolicy', $data)) {
            $object->devicePolicy = $this->denormalizer->denormalize($data['devicePolicy'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('radiusOptions', $data)) {
            $object->radiusOptions = $this->denormalizer->denormalize($data['radiusOptions'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanRadius::class, 'json', $context);
        }
        if (\array_key_exists('advancedOptions', $data)) {
            $object->advancedOptions = $this->denormalizer->denormalize($data['advancedOptions'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAdvanced::class, 'json', $context);
        }
        if (\array_key_exists('diffServProfile', $data)) {
            $object->diffServProfile = $this->denormalizer->denormalize($data['diffServProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('qosMaps', $data)) {
            $values = [];
            foreach ($data['qosMaps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanDSCPSetting::class, 'json', $context);
            }
            $object->qosMaps = $values;
        }
        if (\array_key_exists('dpsk', $data)) {
            $object->dpsk = $this->denormalizer->denormalize($data['dpsk'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanDpskSetting::class, 'json', $context);
        }
        if (\array_key_exists('externalDpsk', $data)) {
            $object->externalDpsk = $this->denormalizer->denormalize($data['externalDpsk'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpskWlanExternalDpsk::class, 'json', $context);
        }
        if (\array_key_exists('dnsServerProfile', $data)) {
            $object->dnsServerProfile = $this->denormalizer->denormalize($data['dnsServerProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('accessTunnelProfile', $data)) {
            $object->accessTunnelProfile = $this->denormalizer->denormalize($data['accessTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('accessIpsecProfile', $data)) {
            $object->accessIpsecProfile = $this->denormalizer->denormalize($data['accessIpsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('splitTunnelProfileId', $data)) {
            $object->splitTunnelProfileId = $data['splitTunnelProfileId'];
        }
        if (\array_key_exists('portalDetectionProfileId', $data)) {
            $object->portalDetectionProfileId = $data['portalDetectionProfileId'];
        }
        if (\array_key_exists('flexiVpnProfile', $data)) {
            $object->flexiVpnProfile = $this->denormalizer->denormalize($data['flexiVpnProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\FlexiVpnFlexiVpnSetting::class, 'json', $context);
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
        $dataArray['name'] = $data->name;
        $dataArray['ssid'] = $data->ssid;
        if (array_key_exists('hessid', get_object_vars($data)) && null !== ($data->hessid ?? null)) {
            $dataArray['hessid'] = $data->hessid;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('caleaEnabled', get_object_vars($data)) && null !== ($data->caleaEnabled ?? null)) {
            $dataArray['caleaEnabled'] = $data->caleaEnabled;
        }
        if (array_key_exists('dpTunnelNatEnabled', get_object_vars($data)) && null !== ($data->dpTunnelNatEnabled ?? null)) {
            $dataArray['dpTunnelNatEnabled'] = $data->dpTunnelNatEnabled;
        }
        if (array_key_exists('dpTunnelDhcpEnabled', get_object_vars($data)) && null !== ($data->dpTunnelDhcpEnabled ?? null)) {
            $dataArray['dpTunnelDhcpEnabled'] = $data->dpTunnelDhcpEnabled;
        }
        if (array_key_exists('awsExtNasIPEnable', get_object_vars($data)) && null !== ($data->awsExtNasIPEnable ?? null)) {
            $dataArray['awsExtNasIPEnable'] = $data->awsExtNasIPEnable;
        }
        if (array_key_exists('awsVenueEnable', get_object_vars($data)) && null !== ($data->awsVenueEnable ?? null)) {
            $dataArray['awsVenueEnable'] = $data->awsVenueEnable;
        }
        if (array_key_exists('accessTunnelType', get_object_vars($data)) && null !== ($data->accessTunnelType ?? null)) {
            $dataArray['accessTunnelType'] = $data->accessTunnelType;
        }
        if (array_key_exists('coreTunnelProfile', get_object_vars($data)) && null !== ($data->coreTunnelProfile ?? null)) {
            $normalized = $this->normalizer->normalize($data->coreTunnelProfile, 'json', $context);
            $dataArray['coreTunnelProfile'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('macAuth', get_object_vars($data)) && null !== ($data->macAuth ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->macAuth, 'json', $context);
            $dataArray['macAuth'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('encryption', get_object_vars($data)) && null !== ($data->encryption ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->encryption, 'json', $context);
            $dataArray['encryption'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('authServiceOrProfile', get_object_vars($data)) && null !== ($data->authServiceOrProfile ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->authServiceOrProfile, 'json', $context);
            $dataArray['authServiceOrProfile'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('operatorRealm', get_object_vars($data)) && null !== ($data->operatorRealm ?? null)) {
            $dataArray['operatorRealm'] = $data->operatorRealm;
        }
        if (array_key_exists('accountingServiceOrProfile', get_object_vars($data)) && null !== ($data->accountingServiceOrProfile ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->accountingServiceOrProfile, 'json', $context);
            $dataArray['accountingServiceOrProfile'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        $normalized_5 = $data->portalServiceProfile === null ? null : $this->normalizer->normalize($data->portalServiceProfile, 'json', $context);
        $dataArray['portalServiceProfile'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_5) : $normalized_5;
        if (array_key_exists('hotspot20Profile', get_object_vars($data)) && null !== ($data->hotspot20Profile ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->hotspot20Profile, 'json', $context);
            $dataArray['hotspot20Profile'] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('firewallProfileId', get_object_vars($data)) && null !== ($data->firewallProfileId ?? null)) {
            $dataArray['firewallProfileId'] = $data->firewallProfileId;
        }
        if (array_key_exists('firewallWlanSpecificEnabled', get_object_vars($data)) && null !== ($data->firewallWlanSpecificEnabled ?? null)) {
            $dataArray['firewallWlanSpecificEnabled'] = $data->firewallWlanSpecificEnabled;
        }
        if (array_key_exists('firewallUplinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->firewallUplinkRateLimitingMbps ?? null)) {
            $dataArray['firewallUplinkRateLimitingMbps'] = $data->firewallUplinkRateLimitingMbps;
        }
        if (array_key_exists('firewallDownlinkRateLimitingMbps', get_object_vars($data)) && null !== ($data->firewallDownlinkRateLimitingMbps ?? null)) {
            $dataArray['firewallDownlinkRateLimitingMbps'] = $data->firewallDownlinkRateLimitingMbps;
        }
        if (array_key_exists('firewallL3AccessControlPolicyId', get_object_vars($data)) && null !== ($data->firewallL3AccessControlPolicyId ?? null)) {
            $dataArray['firewallL3AccessControlPolicyId'] = $data->firewallL3AccessControlPolicyId;
        }
        if (array_key_exists('firewallL2AccessControlPolicyId', get_object_vars($data)) && null !== ($data->firewallL2AccessControlPolicyId ?? null)) {
            $dataArray['firewallL2AccessControlPolicyId'] = $data->firewallL2AccessControlPolicyId;
        }
        if (array_key_exists('firewallAppPolicyId', get_object_vars($data)) && null !== ($data->firewallAppPolicyId ?? null)) {
            $dataArray['firewallAppPolicyId'] = $data->firewallAppPolicyId;
        }
        if (array_key_exists('firewallUrlFilteringPolicyId', get_object_vars($data)) && null !== ($data->firewallUrlFilteringPolicyId ?? null)) {
            $dataArray['firewallUrlFilteringPolicyId'] = $data->firewallUrlFilteringPolicyId;
        }
        if (array_key_exists('firewallDevicePolicyId', get_object_vars($data)) && null !== ($data->firewallDevicePolicyId ?? null)) {
            $dataArray['firewallDevicePolicyId'] = $data->firewallDevicePolicyId;
        }
        if (array_key_exists('defaultUserTrafficProfile', get_object_vars($data)) && null !== ($data->defaultUserTrafficProfile ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->defaultUserTrafficProfile, 'json', $context);
            $dataArray['defaultUserTrafficProfile'] = \is_iterable($normalized_7) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('precedenceProfileId', get_object_vars($data)) && null !== ($data->precedenceProfileId ?? null)) {
            $dataArray['precedenceProfileId'] = $data->precedenceProfileId;
        }
        if (array_key_exists('schedule', get_object_vars($data)) && null !== ($data->schedule ?? null)) {
            $normalized_8 = $this->normalizer->normalize($data->schedule, 'json', $context);
            $dataArray['schedule'] = \is_iterable($normalized_8) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        if (array_key_exists('vlan', get_object_vars($data)) && null !== ($data->vlan ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->vlan, 'json', $context);
            $dataArray['vlan'] = \is_iterable($normalized_9) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (array_key_exists('l2ACL', get_object_vars($data)) && null !== ($data->l2ACL ?? null)) {
            $normalized_10 = $this->normalizer->normalize($data->l2ACL, 'json', $context);
            $dataArray['l2ACL'] = \is_iterable($normalized_10) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_10) : $normalized_10;
        }
        if (array_key_exists('devicePolicy', get_object_vars($data)) && null !== ($data->devicePolicy ?? null)) {
            $normalized_11 = $this->normalizer->normalize($data->devicePolicy, 'json', $context);
            $dataArray['devicePolicy'] = \is_iterable($normalized_11) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        if (array_key_exists('radiusOptions', get_object_vars($data)) && null !== ($data->radiusOptions ?? null)) {
            $normalized_12 = $this->normalizer->normalize($data->radiusOptions, 'json', $context);
            $dataArray['radiusOptions'] = \is_iterable($normalized_12) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        if (array_key_exists('advancedOptions', get_object_vars($data)) && null !== ($data->advancedOptions ?? null)) {
            $normalized_13 = $this->normalizer->normalize($data->advancedOptions, 'json', $context);
            $dataArray['advancedOptions'] = \is_iterable($normalized_13) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_13) : $normalized_13;
        }
        if (array_key_exists('diffServProfile', get_object_vars($data)) && null !== ($data->diffServProfile ?? null)) {
            $normalized_14 = $this->normalizer->normalize($data->diffServProfile, 'json', $context);
            $dataArray['diffServProfile'] = \is_iterable($normalized_14) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_14) : $normalized_14;
        }
        if (array_key_exists('qosMaps', get_object_vars($data)) && null !== ($data->qosMaps ?? null)) {
            $values = [];
            foreach ($data->qosMaps as $value) {
                $normalized_15 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_15) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_15) : $normalized_15;
            }
            $dataArray['qosMaps'] = $values;
        }
        if (array_key_exists('dpsk', get_object_vars($data)) && null !== ($data->dpsk ?? null)) {
            $normalized_16 = $this->normalizer->normalize($data->dpsk, 'json', $context);
            $dataArray['dpsk'] = \is_iterable($normalized_16) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_16) : $normalized_16;
        }
        if (array_key_exists('externalDpsk', get_object_vars($data)) && null !== ($data->externalDpsk ?? null)) {
            $normalized_17 = $this->normalizer->normalize($data->externalDpsk, 'json', $context);
            $dataArray['externalDpsk'] = \is_iterable($normalized_17) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_17) : $normalized_17;
        }
        if (array_key_exists('dnsServerProfile', get_object_vars($data)) && null !== ($data->dnsServerProfile ?? null)) {
            $normalized_18 = $this->normalizer->normalize($data->dnsServerProfile, 'json', $context);
            $dataArray['dnsServerProfile'] = \is_iterable($normalized_18) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_18) : $normalized_18;
        }
        if (array_key_exists('accessTunnelProfile', get_object_vars($data)) && null !== ($data->accessTunnelProfile ?? null)) {
            $normalized_19 = $this->normalizer->normalize($data->accessTunnelProfile, 'json', $context);
            $dataArray['accessTunnelProfile'] = \is_iterable($normalized_19) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_19) : $normalized_19;
        }
        if (array_key_exists('accessIpsecProfile', get_object_vars($data)) && null !== ($data->accessIpsecProfile ?? null)) {
            $normalized_20 = $this->normalizer->normalize($data->accessIpsecProfile, 'json', $context);
            $dataArray['accessIpsecProfile'] = \is_iterable($normalized_20) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_20) : $normalized_20;
        }
        if (array_key_exists('splitTunnelProfileId', get_object_vars($data)) && null !== ($data->splitTunnelProfileId ?? null)) {
            $dataArray['splitTunnelProfileId'] = $data->splitTunnelProfileId;
        }
        if (array_key_exists('portalDetectionProfileId', get_object_vars($data)) && null !== ($data->portalDetectionProfileId ?? null)) {
            $dataArray['portalDetectionProfileId'] = $data->portalDetectionProfileId;
        }
        if (array_key_exists('flexiVpnProfile', get_object_vars($data)) && null !== ($data->flexiVpnProfile ?? null)) {
            $normalized_21 = $this->normalizer->normalize($data->flexiVpnProfile, 'json', $context);
            $dataArray['flexiVpnProfile'] = \is_iterable($normalized_21) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_21) : $normalized_21;
        }
        if (array_key_exists('wifiAgileMultibandEnabled', get_object_vars($data)) && null !== ($data->wifiAgileMultibandEnabled ?? null)) {
            $dataArray['wifiAgileMultibandEnabled'] = $data->wifiAgileMultibandEnabled;
        }
        if (array_key_exists('apHostNameAdvertisementEnabled', get_object_vars($data)) && null !== ($data->apHostNameAdvertisementEnabled ?? null)) {
            $dataArray['apHostNameAdvertisementEnabled'] = $data->apHostNameAdvertisementEnabled;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanCreateWechatWlan::class => false];
    }
}