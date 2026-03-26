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
class WlanCreateHotspot20WlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20Wlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20Wlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20Wlan();
        if (\array_key_exists('firewallUplinkRateLimitingMbps', $data) && \is_int($data['firewallUplinkRateLimitingMbps'])) {
            $data['firewallUplinkRateLimitingMbps'] = (double) $data['firewallUplinkRateLimitingMbps'];
        }
        if (\array_key_exists('firewallDownlinkRateLimitingMbps', $data) && \is_int($data['firewallDownlinkRateLimitingMbps'])) {
            $data['firewallDownlinkRateLimitingMbps'] = (double) $data['firewallDownlinkRateLimitingMbps'];
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('hessid', $data)) {
            $object->setHessid($data['hessid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('caleaEnabled', $data)) {
            $object->setCaleaEnabled($data['caleaEnabled']);
        }
        if (\array_key_exists('dpTunnelNatEnabled', $data)) {
            $object->setDpTunnelNatEnabled($data['dpTunnelNatEnabled']);
        }
        if (\array_key_exists('dpTunnelDhcpEnabled', $data)) {
            $object->setDpTunnelDhcpEnabled($data['dpTunnelDhcpEnabled']);
        }
        if (\array_key_exists('awsExtNasIPEnable', $data)) {
            $object->setAwsExtNasIPEnable($data['awsExtNasIPEnable']);
        }
        if (\array_key_exists('awsVenueEnable', $data)) {
            $object->setAwsVenueEnable($data['awsVenueEnable']);
        }
        if (\array_key_exists('accessTunnelType', $data)) {
            $object->setAccessTunnelType($data['accessTunnelType']);
        }
        if (\array_key_exists('coreTunnelProfile', $data)) {
            $object->setCoreTunnelProfile($this->denormalizer->denormalize($data['coreTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanCoreTunnel::class, 'json', $context));
        }
        if (\array_key_exists('macAuth', $data)) {
            $object->setMacAuth($this->denormalizer->denormalize($data['macAuth'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanMACAuth::class, 'json', $context));
        }
        if (\array_key_exists('encryption', $data)) {
            $object->setEncryption($this->denormalizer->denormalize($data['encryption'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class, 'json', $context));
        }
        if (\array_key_exists('authServiceOrProfile', $data)) {
            $object->setAuthServiceOrProfile($this->denormalizer->denormalize($data['authServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAuthentication::class, 'json', $context));
        }
        if (\array_key_exists('operatorRealm', $data)) {
            $object->setOperatorRealm($data['operatorRealm']);
        }
        if (\array_key_exists('accountingServiceOrProfile', $data)) {
            $object->setAccountingServiceOrProfile($this->denormalizer->denormalize($data['accountingServiceOrProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class, 'json', $context));
        }
        if (\array_key_exists('portalServiceProfile', $data)) {
            $object->setPortalServiceProfile($this->denormalizer->denormalize($data['portalServiceProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('hotspot20Profile', $data)) {
            $object->setHotspot20Profile($this->denormalizer->denormalize($data['hotspot20Profile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('firewallProfileId', $data)) {
            $object->setFirewallProfileId($data['firewallProfileId']);
        }
        if (\array_key_exists('firewallWlanSpecificEnabled', $data)) {
            $object->setFirewallWlanSpecificEnabled($data['firewallWlanSpecificEnabled']);
        }
        if (\array_key_exists('firewallUplinkRateLimitingMbps', $data)) {
            $object->setFirewallUplinkRateLimitingMbps($data['firewallUplinkRateLimitingMbps']);
        }
        if (\array_key_exists('firewallDownlinkRateLimitingMbps', $data)) {
            $object->setFirewallDownlinkRateLimitingMbps($data['firewallDownlinkRateLimitingMbps']);
        }
        if (\array_key_exists('firewallL3AccessControlPolicyId', $data)) {
            $object->setFirewallL3AccessControlPolicyId($data['firewallL3AccessControlPolicyId']);
        }
        if (\array_key_exists('firewallL2AccessControlPolicyId', $data)) {
            $object->setFirewallL2AccessControlPolicyId($data['firewallL2AccessControlPolicyId']);
        }
        if (\array_key_exists('firewallAppPolicyId', $data)) {
            $object->setFirewallAppPolicyId($data['firewallAppPolicyId']);
        }
        if (\array_key_exists('firewallUrlFilteringPolicyId', $data)) {
            $object->setFirewallUrlFilteringPolicyId($data['firewallUrlFilteringPolicyId']);
        }
        if (\array_key_exists('firewallDevicePolicyId', $data)) {
            $object->setFirewallDevicePolicyId($data['firewallDevicePolicyId']);
        }
        if (\array_key_exists('defaultUserTrafficProfile', $data)) {
            $object->setDefaultUserTrafficProfile($this->denormalizer->denormalize($data['defaultUserTrafficProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('precedenceProfileId', $data)) {
            $object->setPrecedenceProfileId($data['precedenceProfileId']);
        }
        if (\array_key_exists('schedule', $data)) {
            $object->setSchedule($this->denormalizer->denormalize($data['schedule'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanSchedule::class, 'json', $context));
        }
        if (\array_key_exists('vlan', $data)) {
            $object->setVlan($this->denormalizer->denormalize($data['vlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class, 'json', $context));
        }
        if (\array_key_exists('l2ACL', $data)) {
            $object->setL2ACL($this->denormalizer->denormalize($data['l2ACL'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('devicePolicy', $data)) {
            $object->setDevicePolicy($this->denormalizer->denormalize($data['devicePolicy'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('radiusOptions', $data)) {
            $object->setRadiusOptions($this->denormalizer->denormalize($data['radiusOptions'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanRadius::class, 'json', $context));
        }
        if (\array_key_exists('advancedOptions', $data)) {
            $object->setAdvancedOptions($this->denormalizer->denormalize($data['advancedOptions'], \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAdvanced::class, 'json', $context));
        }
        if (\array_key_exists('diffServProfile', $data)) {
            $object->setDiffServProfile($this->denormalizer->denormalize($data['diffServProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('qosMaps', $data)) {
            $values = [];
            foreach ($data['qosMaps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanDSCPSetting::class, 'json', $context);
            }
            $object->setQosMaps($values);
        }
        if (\array_key_exists('dpsk', $data)) {
            $object->setDpsk($this->denormalizer->denormalize($data['dpsk'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class, 'json', $context));
        }
        if (\array_key_exists('externalDpsk', $data)) {
            $object->setExternalDpsk($this->denormalizer->denormalize($data['externalDpsk'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanExternalDpsk::class, 'json', $context));
        }
        if (\array_key_exists('dnsServerProfile', $data)) {
            $object->setDnsServerProfile($this->denormalizer->denormalize($data['dnsServerProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('accessTunnelProfile', $data)) {
            $object->setAccessTunnelProfile($this->denormalizer->denormalize($data['accessTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('accessIpsecProfile', $data)) {
            $object->setAccessIpsecProfile($this->denormalizer->denormalize($data['accessIpsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('splitTunnelProfileId', $data)) {
            $object->setSplitTunnelProfileId($data['splitTunnelProfileId']);
        }
        if (\array_key_exists('portalDetectionProfileId', $data)) {
            $object->setPortalDetectionProfileId($data['portalDetectionProfileId']);
        }
        if (\array_key_exists('wifiAgileMultibandEnabled', $data)) {
            $object->setWifiAgileMultibandEnabled($data['wifiAgileMultibandEnabled']);
        }
        if (\array_key_exists('apHostNameAdvertisementEnabled', $data)) {
            $object->setApHostNameAdvertisementEnabled($data['apHostNameAdvertisementEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['ssid'] = $data->getSsid();
        if ($data->isInitialized('hessid') && null !== $data->getHessid()) {
            $dataArray['hessid'] = $data->getHessid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('caleaEnabled') && null !== $data->getCaleaEnabled()) {
            $dataArray['caleaEnabled'] = $data->getCaleaEnabled();
        }
        if ($data->isInitialized('dpTunnelNatEnabled') && null !== $data->getDpTunnelNatEnabled()) {
            $dataArray['dpTunnelNatEnabled'] = $data->getDpTunnelNatEnabled();
        }
        if ($data->isInitialized('dpTunnelDhcpEnabled') && null !== $data->getDpTunnelDhcpEnabled()) {
            $dataArray['dpTunnelDhcpEnabled'] = $data->getDpTunnelDhcpEnabled();
        }
        if ($data->isInitialized('awsExtNasIPEnable') && null !== $data->getAwsExtNasIPEnable()) {
            $dataArray['awsExtNasIPEnable'] = $data->getAwsExtNasIPEnable();
        }
        if ($data->isInitialized('awsVenueEnable') && null !== $data->getAwsVenueEnable()) {
            $dataArray['awsVenueEnable'] = $data->getAwsVenueEnable();
        }
        if ($data->isInitialized('accessTunnelType') && null !== $data->getAccessTunnelType()) {
            $dataArray['accessTunnelType'] = $data->getAccessTunnelType();
        }
        if ($data->isInitialized('coreTunnelProfile') && null !== $data->getCoreTunnelProfile()) {
            $dataArray['coreTunnelProfile'] = $this->normalizer->normalize($data->getCoreTunnelProfile(), 'json', $context);
        }
        if ($data->isInitialized('macAuth') && null !== $data->getMacAuth()) {
            $dataArray['macAuth'] = $this->normalizer->normalize($data->getMacAuth(), 'json', $context);
        }
        if ($data->isInitialized('encryption') && null !== $data->getEncryption()) {
            $dataArray['encryption'] = $this->normalizer->normalize($data->getEncryption(), 'json', $context);
        }
        if ($data->isInitialized('authServiceOrProfile') && null !== $data->getAuthServiceOrProfile()) {
            $dataArray['authServiceOrProfile'] = $this->normalizer->normalize($data->getAuthServiceOrProfile(), 'json', $context);
        }
        if ($data->isInitialized('operatorRealm') && null !== $data->getOperatorRealm()) {
            $dataArray['operatorRealm'] = $data->getOperatorRealm();
        }
        if ($data->isInitialized('accountingServiceOrProfile') && null !== $data->getAccountingServiceOrProfile()) {
            $dataArray['accountingServiceOrProfile'] = $this->normalizer->normalize($data->getAccountingServiceOrProfile(), 'json', $context);
        }
        if ($data->isInitialized('portalServiceProfile') && null !== $data->getPortalServiceProfile()) {
            $dataArray['portalServiceProfile'] = $this->normalizer->normalize($data->getPortalServiceProfile(), 'json', $context);
        }
        $dataArray['hotspot20Profile'] = $this->normalizer->normalize($data->getHotspot20Profile(), 'json', $context);
        if ($data->isInitialized('firewallProfileId') && null !== $data->getFirewallProfileId()) {
            $dataArray['firewallProfileId'] = $data->getFirewallProfileId();
        }
        if ($data->isInitialized('firewallWlanSpecificEnabled') && null !== $data->getFirewallWlanSpecificEnabled()) {
            $dataArray['firewallWlanSpecificEnabled'] = $data->getFirewallWlanSpecificEnabled();
        }
        if ($data->isInitialized('firewallUplinkRateLimitingMbps') && null !== $data->getFirewallUplinkRateLimitingMbps()) {
            $dataArray['firewallUplinkRateLimitingMbps'] = $data->getFirewallUplinkRateLimitingMbps();
        }
        if ($data->isInitialized('firewallDownlinkRateLimitingMbps') && null !== $data->getFirewallDownlinkRateLimitingMbps()) {
            $dataArray['firewallDownlinkRateLimitingMbps'] = $data->getFirewallDownlinkRateLimitingMbps();
        }
        if ($data->isInitialized('firewallL3AccessControlPolicyId') && null !== $data->getFirewallL3AccessControlPolicyId()) {
            $dataArray['firewallL3AccessControlPolicyId'] = $data->getFirewallL3AccessControlPolicyId();
        }
        if ($data->isInitialized('firewallL2AccessControlPolicyId') && null !== $data->getFirewallL2AccessControlPolicyId()) {
            $dataArray['firewallL2AccessControlPolicyId'] = $data->getFirewallL2AccessControlPolicyId();
        }
        if ($data->isInitialized('firewallAppPolicyId') && null !== $data->getFirewallAppPolicyId()) {
            $dataArray['firewallAppPolicyId'] = $data->getFirewallAppPolicyId();
        }
        if ($data->isInitialized('firewallUrlFilteringPolicyId') && null !== $data->getFirewallUrlFilteringPolicyId()) {
            $dataArray['firewallUrlFilteringPolicyId'] = $data->getFirewallUrlFilteringPolicyId();
        }
        if ($data->isInitialized('firewallDevicePolicyId') && null !== $data->getFirewallDevicePolicyId()) {
            $dataArray['firewallDevicePolicyId'] = $data->getFirewallDevicePolicyId();
        }
        if ($data->isInitialized('defaultUserTrafficProfile') && null !== $data->getDefaultUserTrafficProfile()) {
            $dataArray['defaultUserTrafficProfile'] = $this->normalizer->normalize($data->getDefaultUserTrafficProfile(), 'json', $context);
        }
        if ($data->isInitialized('precedenceProfileId') && null !== $data->getPrecedenceProfileId()) {
            $dataArray['precedenceProfileId'] = $data->getPrecedenceProfileId();
        }
        if ($data->isInitialized('schedule') && null !== $data->getSchedule()) {
            $dataArray['schedule'] = $this->normalizer->normalize($data->getSchedule(), 'json', $context);
        }
        if ($data->isInitialized('vlan') && null !== $data->getVlan()) {
            $dataArray['vlan'] = $this->normalizer->normalize($data->getVlan(), 'json', $context);
        }
        if ($data->isInitialized('l2ACL') && null !== $data->getL2ACL()) {
            $dataArray['l2ACL'] = $this->normalizer->normalize($data->getL2ACL(), 'json', $context);
        }
        if ($data->isInitialized('devicePolicy') && null !== $data->getDevicePolicy()) {
            $dataArray['devicePolicy'] = $this->normalizer->normalize($data->getDevicePolicy(), 'json', $context);
        }
        if ($data->isInitialized('radiusOptions') && null !== $data->getRadiusOptions()) {
            $dataArray['radiusOptions'] = $this->normalizer->normalize($data->getRadiusOptions(), 'json', $context);
        }
        if ($data->isInitialized('advancedOptions') && null !== $data->getAdvancedOptions()) {
            $dataArray['advancedOptions'] = $this->normalizer->normalize($data->getAdvancedOptions(), 'json', $context);
        }
        if ($data->isInitialized('diffServProfile') && null !== $data->getDiffServProfile()) {
            $dataArray['diffServProfile'] = $this->normalizer->normalize($data->getDiffServProfile(), 'json', $context);
        }
        if ($data->isInitialized('qosMaps') && null !== $data->getQosMaps()) {
            $values = [];
            foreach ($data->getQosMaps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['qosMaps'] = $values;
        }
        if ($data->isInitialized('dpsk') && null !== $data->getDpsk()) {
            $dataArray['dpsk'] = $this->normalizer->normalize($data->getDpsk(), 'json', $context);
        }
        if ($data->isInitialized('externalDpsk') && null !== $data->getExternalDpsk()) {
            $dataArray['externalDpsk'] = $this->normalizer->normalize($data->getExternalDpsk(), 'json', $context);
        }
        if ($data->isInitialized('dnsServerProfile') && null !== $data->getDnsServerProfile()) {
            $dataArray['dnsServerProfile'] = $this->normalizer->normalize($data->getDnsServerProfile(), 'json', $context);
        }
        if ($data->isInitialized('accessTunnelProfile') && null !== $data->getAccessTunnelProfile()) {
            $dataArray['accessTunnelProfile'] = $this->normalizer->normalize($data->getAccessTunnelProfile(), 'json', $context);
        }
        if ($data->isInitialized('accessIpsecProfile') && null !== $data->getAccessIpsecProfile()) {
            $dataArray['accessIpsecProfile'] = $this->normalizer->normalize($data->getAccessIpsecProfile(), 'json', $context);
        }
        if ($data->isInitialized('splitTunnelProfileId') && null !== $data->getSplitTunnelProfileId()) {
            $dataArray['splitTunnelProfileId'] = $data->getSplitTunnelProfileId();
        }
        if ($data->isInitialized('portalDetectionProfileId') && null !== $data->getPortalDetectionProfileId()) {
            $dataArray['portalDetectionProfileId'] = $data->getPortalDetectionProfileId();
        }
        if ($data->isInitialized('wifiAgileMultibandEnabled') && null !== $data->getWifiAgileMultibandEnabled()) {
            $dataArray['wifiAgileMultibandEnabled'] = $data->getWifiAgileMultibandEnabled();
        }
        if ($data->isInitialized('apHostNameAdvertisementEnabled') && null !== $data->getApHostNameAdvertisementEnabled()) {
            $dataArray['apHostNameAdvertisementEnabled'] = $data->getApHostNameAdvertisementEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanCreateHotspot20Wlan::class => false];
    }
}