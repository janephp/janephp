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
class ZoneModifyZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (float) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (float) $data['longitude'];
        }
        if (\array_key_exists('enforcePriorityDpGroupEnable', $data) && \is_int($data['enforcePriorityDpGroupEnable'])) {
            $data['enforcePriorityDpGroupEnable'] = (bool) $data['enforcePriorityDpGroupEnable'];
        }
        if (\array_key_exists('vlanOverlappingEnabled', $data) && \is_int($data['vlanOverlappingEnabled'])) {
            $data['vlanOverlappingEnabled'] = (bool) $data['vlanOverlappingEnabled'];
        }
        if (\array_key_exists('restrictedApAccessEnabled', $data) && \is_int($data['restrictedApAccessEnabled'])) {
            $data['restrictedApAccessEnabled'] = (bool) $data['restrictedApAccessEnabled'];
        }
        if (\array_key_exists('bonjourFencingPolicyEnabled', $data) && \is_int($data['bonjourFencingPolicyEnabled'])) {
            $data['bonjourFencingPolicyEnabled'] = (bool) $data['bonjourFencingPolicyEnabled'];
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data) && \is_int($data['clusterRedundancyEnabled'])) {
            $data['clusterRedundancyEnabled'] = (bool) $data['clusterRedundancyEnabled'];
        }
        if (\array_key_exists('rogueApJammingDetection', $data) && \is_int($data['rogueApJammingDetection'])) {
            $data['rogueApJammingDetection'] = (bool) $data['rogueApJammingDetection'];
        }
        if (\array_key_exists('directedMulticastFromWiredClientEnabled', $data) && \is_int($data['directedMulticastFromWiredClientEnabled'])) {
            $data['directedMulticastFromWiredClientEnabled'] = (bool) $data['directedMulticastFromWiredClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromWirelessClientEnabled', $data) && \is_int($data['directedMulticastFromWirelessClientEnabled'])) {
            $data['directedMulticastFromWirelessClientEnabled'] = (bool) $data['directedMulticastFromWirelessClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromNetworkEnabled', $data) && \is_int($data['directedMulticastFromNetworkEnabled'])) {
            $data['directedMulticastFromNetworkEnabled'] = (bool) $data['directedMulticastFromNetworkEnabled'];
        }
        if (\array_key_exists('healthCheckSitesEnabled', $data) && \is_int($data['healthCheckSitesEnabled'])) {
            $data['healthCheckSitesEnabled'] = (bool) $data['healthCheckSitesEnabled'];
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data) && \is_int($data['rksGreForwardBroadcast'])) {
            $data['rksGreForwardBroadcast'] = (bool) $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('apHccdEnabled', $data) && \is_int($data['apHccdEnabled'])) {
            $data['apHccdEnabled'] = (bool) $data['apHccdEnabled'];
        }
        if (\array_key_exists('apHccdPersist', $data) && \is_int($data['apHccdPersist'])) {
            $data['apHccdPersist'] = (bool) $data['apHccdPersist'];
        }
        if (\array_key_exists('aaaAffinityEnabled', $data) && \is_int($data['aaaAffinityEnabled'])) {
            $data['aaaAffinityEnabled'] = (bool) $data['aaaAffinityEnabled'];
        }
        if (\array_key_exists('apHttp2CertChkEnable', $data) && \is_int($data['apHttp2CertChkEnable'])) {
            $data['apHttp2CertChkEnable'] = (bool) $data['apHttp2CertChkEnable'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('dpGroupId', $data)) {
            $object->dpGroupId = $data['dpGroupId'];
        }
        if (\array_key_exists('enforcePriorityDpGroupEnable', $data)) {
            $object->enforcePriorityDpGroupEnable = $data['enforcePriorityDpGroupEnable'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
        }
        if (\array_key_exists('timezone', $data)) {
            $object->timezone = $this->denormalizer->denormalize($data['timezone'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneTimezoneSetting::class, 'json', $context);
        }
        if (\array_key_exists('login', $data)) {
            $object->login = $this->denormalizer->denormalize($data['login'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApLogin::class, 'json', $context);
        }
        if (\array_key_exists('mesh', $data)) {
            $object->mesh = $this->denormalizer->denormalize($data['mesh'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneMeshConfiguration::class, 'json', $context);
        }
        if (\array_key_exists('syslog', $data)) {
            $object->syslog = $this->denormalizer->denormalize($data['syslog'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSyslog::class, 'json', $context);
        }
        if (\array_key_exists('smartMonitor', $data)) {
            $object->smartMonitor = $this->denormalizer->denormalize($data['smartMonitor'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSmartMonitor::class, 'json', $context);
        }
        if (\array_key_exists('clientAdmissionControl24', $data)) {
            $object->clientAdmissionControl24 = $this->denormalizer->denormalize($data['clientAdmissionControl24'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonClientAdmissionControl::class, 'json', $context);
        }
        if (\array_key_exists('clientAdmissionControl50', $data)) {
            $object->clientAdmissionControl50 = $this->denormalizer->denormalize($data['clientAdmissionControl50'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonClientAdmissionControl::class, 'json', $context);
        }
        if (\array_key_exists('tunnelType', $data)) {
            $object->tunnelType = $data['tunnelType'];
        }
        if (\array_key_exists('tunnelProfile', $data)) {
            $object->tunnelProfile = $this->denormalizer->denormalize($data['tunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('loadBalancing', $data)) {
            $object->loadBalancing = $this->denormalizer->denormalize($data['loadBalancing'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneLoadBalancing::class, 'json', $context);
        }
        if (\array_key_exists('rogue', $data)) {
            $object->rogue = $this->denormalizer->denormalize($data['rogue'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRogue::class, 'json', $context);
        }
        if (\array_key_exists('dosBarringEnable', $data)) {
            $object->dosBarringEnable = $data['dosBarringEnable'];
        }
        if (\array_key_exists('dosBarringPeriod', $data)) {
            $object->dosBarringPeriod = $data['dosBarringPeriod'];
        }
        if (\array_key_exists('dosBarringThreshold', $data)) {
            $object->dosBarringThreshold = $data['dosBarringThreshold'];
        }
        if (\array_key_exists('dosBarringCheckPeriod', $data)) {
            $object->dosBarringCheckPeriod = $data['dosBarringCheckPeriod'];
        }
        if (\array_key_exists('locationBasedService', $data)) {
            $object->locationBasedService = $this->denormalizer->denormalize($data['locationBasedService'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('apRebootTimeout', $data)) {
            $object->apRebootTimeout = $this->denormalizer->denormalize($data['apRebootTimeout'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApRebootTimeout::class, 'json', $context);
        }
        if (\array_key_exists('location', $data)) {
            $object->location = $data['location'];
        }
        if (\array_key_exists('locationAdditionalInfo', $data)) {
            $object->locationAdditionalInfo = $data['locationAdditionalInfo'];
        }
        if (\array_key_exists('altitude', $data)) {
            $object->altitude = $this->denormalizer->denormalize($data['altitude'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonAltitude::class, 'json', $context);
        }
        if (\array_key_exists('latitude', $data)) {
            $object->latitude = $data['latitude'];
        }
        if (\array_key_exists('longitude', $data)) {
            $object->longitude = $data['longitude'];
        }
        if (\array_key_exists('vlanOverlappingEnabled', $data)) {
            $object->vlanOverlappingEnabled = $data['vlanOverlappingEnabled'];
        }
        if (\array_key_exists('nodeAffinityProfile', $data)) {
            $object->nodeAffinityProfile = $this->denormalizer->denormalize($data['nodeAffinityProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('venueProfile', $data)) {
            $object->venueProfile = $this->denormalizer->denormalize($data['venueProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('channelEvaluationInterval', $data)) {
            $object->channelEvaluationInterval = $data['channelEvaluationInterval'];
        }
        if (\array_key_exists('apMgmtVlan', $data)) {
            $object->apMgmtVlan = $this->denormalizer->denormalize($data['apMgmtVlan'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApManagementVlan::class, 'json', $context);
        }
        if (\array_key_exists('apLatencyInterval', $data)) {
            $object->apLatencyInterval = $this->denormalizer->denormalize($data['apLatencyInterval'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApLatencyInterval::class, 'json', $context);
        }
        if (\array_key_exists('ipsecProfile', $data)) {
            $object->ipsecProfile = $this->denormalizer->denormalize($data['ipsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('ipv6TrafficFilterEnabled', $data)) {
            $object->ipv6TrafficFilterEnabled = $data['ipv6TrafficFilterEnabled'];
        }
        if (\array_key_exists('restrictedApAccessEnabled', $data)) {
            $object->restrictedApAccessEnabled = $data['restrictedApAccessEnabled'];
        }
        if (\array_key_exists('restrictedApAccessProfileId', $data)) {
            $object->restrictedApAccessProfileId = $data['restrictedApAccessProfileId'];
        }
        if (\array_key_exists('bonjourFencingPolicyEnabled', $data)) {
            $object->bonjourFencingPolicyEnabled = $data['bonjourFencingPolicyEnabled'];
        }
        if (\array_key_exists('bonjourFencingPolicy', $data)) {
            $object->bonjourFencingPolicy = $this->denormalizer->denormalize($data['bonjourFencingPolicy'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('dhcpSiteConfig', $data)) {
            $object->dhcpSiteConfig = $this->denormalizer->denormalize($data['dhcpSiteConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef::class, 'json', $context);
        }
        if (\array_key_exists('snmpAgent', $data)) {
            $object->snmpAgent = $this->denormalizer->denormalize($data['snmpAgent'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApSnmpOptions::class, 'json', $context);
        }
        if (\array_key_exists('recoverySsid', $data)) {
            $object->recoverySsid = $this->denormalizer->denormalize($data['recoverySsid'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneRecoverySsidSet::class, 'json', $context);
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data)) {
            $object->clusterRedundancyEnabled = $data['clusterRedundancyEnabled'];
        }
        if (\array_key_exists('rogueApReportThreshold', $data)) {
            $object->rogueApReportThreshold = $data['rogueApReportThreshold'];
        }
        if (\array_key_exists('rogueApAggressivenessMode', $data)) {
            $object->rogueApAggressivenessMode = $data['rogueApAggressivenessMode'];
        }
        if (\array_key_exists('rogueApJammingDetection', $data)) {
            $object->rogueApJammingDetection = $data['rogueApJammingDetection'];
        }
        if (\array_key_exists('rogueApJammingThreshold', $data)) {
            $object->rogueApJammingThreshold = $data['rogueApJammingThreshold'];
        }
        if (\array_key_exists('directedMulticastFromWiredClientEnabled', $data)) {
            $object->directedMulticastFromWiredClientEnabled = $data['directedMulticastFromWiredClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromWirelessClientEnabled', $data)) {
            $object->directedMulticastFromWirelessClientEnabled = $data['directedMulticastFromWirelessClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromNetworkEnabled', $data)) {
            $object->directedMulticastFromNetworkEnabled = $data['directedMulticastFromNetworkEnabled'];
        }
        if (\array_key_exists('healthCheckSitesEnabled', $data)) {
            $object->healthCheckSitesEnabled = $data['healthCheckSitesEnabled'];
        }
        if (\array_key_exists('healthCheckSites', $data)) {
            $values = [];
            foreach ($data['healthCheckSites'] as $value) {
                $values[] = $value;
            }
            $object->healthCheckSites = $values;
        }
        if (\array_key_exists('ruckusGreTunnelProfile', $data)) {
            $object->ruckusGreTunnelProfile = $this->denormalizer->denormalize($data['ruckusGreTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('softGreTunnelProflies', $data)) {
            $values_1 = [];
            foreach ($data['softGreTunnelProflies'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneSoftGreRef::class, 'json', $context);
            }
            $object->softGreTunnelProflies = $values_1;
        }
        if (\array_key_exists('ipsecProfiles', $data)) {
            $values_2 = [];
            foreach ($data['ipsecProfiles'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
            }
            $object->ipsecProfiles = $values_2;
        }
        if (\array_key_exists('ipsecTunnelMode', $data)) {
            $object->ipsecTunnelMode = $data['ipsecTunnelMode'];
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->rksGreForwardBroadcast = $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('sshTunnelEncryption', $data)) {
            $object->sshTunnelEncryption = $data['sshTunnelEncryption'];
        }
        if (\array_key_exists('lteBandLockChannels', $data)) {
            $values_3 = [];
            foreach ($data['lteBandLockChannels'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->lteBandLockChannels = $values_3;
        }
        if (\array_key_exists('paloAltoFirewallProfileId', $data)) {
            $object->paloAltoFirewallProfileId = $data['paloAltoFirewallProfileId'];
        }
        if (\array_key_exists('apHccdEnabled', $data)) {
            $object->apHccdEnabled = $data['apHccdEnabled'];
        }
        if (\array_key_exists('apHccdPersist', $data)) {
            $object->apHccdPersist = $data['apHccdPersist'];
        }
        if (\array_key_exists('aaaAffinityEnabled', $data)) {
            $object->aaaAffinityEnabled = $data['aaaAffinityEnabled'];
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->awsVenue = $data['awsVenue'];
        }
        if (\array_key_exists('myRuckusConfig', $data)) {
            $object->myRuckusConfig = $this->denormalizer->denormalize($data['myRuckusConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonMyRuckusConfig::class, 'json', $context);
        }
        if (\array_key_exists('apHttp2CertChkEnable', $data)) {
            $object->apHttp2CertChkEnable = $data['apHttp2CertChkEnable'];
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->bssColoringEnable = $data['bssColoringEnable'];
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->radioConfig = $this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigZone::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId;
        }
        if (array_key_exists('dpGroupId', get_object_vars($data)) && null !== ($data->dpGroupId ?? null)) {
            $dataArray['dpGroupId'] = $data->dpGroupId;
        }
        if (array_key_exists('enforcePriorityDpGroupEnable', get_object_vars($data)) && null !== ($data->enforcePriorityDpGroupEnable ?? null)) {
            $dataArray['enforcePriorityDpGroupEnable'] = $data->enforcePriorityDpGroupEnable;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode;
        }
        if (array_key_exists('timezone', get_object_vars($data)) && null !== ($data->timezone ?? null)) {
            $normalized = $this->normalizer->normalize($data->timezone, 'json', $context);
            $dataArray['timezone'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('login', get_object_vars($data)) && null !== ($data->login ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->login, 'json', $context);
            $dataArray['login'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('mesh', get_object_vars($data)) && null !== ($data->mesh ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->mesh, 'json', $context);
            $dataArray['mesh'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('syslog', get_object_vars($data)) && null !== ($data->syslog ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->syslog, 'json', $context);
            $dataArray['syslog'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('smartMonitor', get_object_vars($data)) && null !== ($data->smartMonitor ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->smartMonitor, 'json', $context);
            $dataArray['smartMonitor'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('clientAdmissionControl24', get_object_vars($data)) && null !== ($data->clientAdmissionControl24 ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->clientAdmissionControl24, 'json', $context);
            $dataArray['clientAdmissionControl24'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('clientAdmissionControl50', get_object_vars($data)) && null !== ($data->clientAdmissionControl50 ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->clientAdmissionControl50, 'json', $context);
            $dataArray['clientAdmissionControl50'] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('tunnelType', get_object_vars($data)) && null !== ($data->tunnelType ?? null)) {
            $dataArray['tunnelType'] = $data->tunnelType;
        }
        if (array_key_exists('tunnelProfile', get_object_vars($data)) && null !== ($data->tunnelProfile ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->tunnelProfile, 'json', $context);
            $dataArray['tunnelProfile'] = \is_iterable($normalized_7) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('loadBalancing', get_object_vars($data)) && null !== ($data->loadBalancing ?? null)) {
            $normalized_8 = $this->normalizer->normalize($data->loadBalancing, 'json', $context);
            $dataArray['loadBalancing'] = \is_iterable($normalized_8) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        if (array_key_exists('rogue', get_object_vars($data)) && null !== ($data->rogue ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->rogue, 'json', $context);
            $dataArray['rogue'] = \is_iterable($normalized_9) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (array_key_exists('dosBarringEnable', get_object_vars($data)) && null !== ($data->dosBarringEnable ?? null)) {
            $dataArray['dosBarringEnable'] = $data->dosBarringEnable;
        }
        if (array_key_exists('dosBarringPeriod', get_object_vars($data)) && null !== ($data->dosBarringPeriod ?? null)) {
            $dataArray['dosBarringPeriod'] = $data->dosBarringPeriod;
        }
        if (array_key_exists('dosBarringThreshold', get_object_vars($data)) && null !== ($data->dosBarringThreshold ?? null)) {
            $dataArray['dosBarringThreshold'] = $data->dosBarringThreshold;
        }
        if (array_key_exists('dosBarringCheckPeriod', get_object_vars($data)) && null !== ($data->dosBarringCheckPeriod ?? null)) {
            $dataArray['dosBarringCheckPeriod'] = $data->dosBarringCheckPeriod;
        }
        if (array_key_exists('locationBasedService', get_object_vars($data)) && null !== ($data->locationBasedService ?? null)) {
            $normalized_10 = $this->normalizer->normalize($data->locationBasedService, 'json', $context);
            $dataArray['locationBasedService'] = \is_iterable($normalized_10) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_10) : $normalized_10;
        }
        if (array_key_exists('apRebootTimeout', get_object_vars($data)) && null !== ($data->apRebootTimeout ?? null)) {
            $normalized_11 = $this->normalizer->normalize($data->apRebootTimeout, 'json', $context);
            $dataArray['apRebootTimeout'] = \is_iterable($normalized_11) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        if (array_key_exists('locationAdditionalInfo', get_object_vars($data)) && null !== ($data->locationAdditionalInfo ?? null)) {
            $dataArray['locationAdditionalInfo'] = $data->locationAdditionalInfo;
        }
        if (array_key_exists('altitude', get_object_vars($data)) && null !== ($data->altitude ?? null)) {
            $normalized_12 = $this->normalizer->normalize($data->altitude, 'json', $context);
            $dataArray['altitude'] = \is_iterable($normalized_12) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        if (array_key_exists('latitude', get_object_vars($data)) && null !== ($data->latitude ?? null)) {
            $dataArray['latitude'] = $data->latitude;
        }
        if (array_key_exists('longitude', get_object_vars($data)) && null !== ($data->longitude ?? null)) {
            $dataArray['longitude'] = $data->longitude;
        }
        if (array_key_exists('vlanOverlappingEnabled', get_object_vars($data)) && null !== ($data->vlanOverlappingEnabled ?? null)) {
            $dataArray['vlanOverlappingEnabled'] = $data->vlanOverlappingEnabled;
        }
        if (array_key_exists('nodeAffinityProfile', get_object_vars($data)) && null !== ($data->nodeAffinityProfile ?? null)) {
            $normalized_13 = $this->normalizer->normalize($data->nodeAffinityProfile, 'json', $context);
            $dataArray['nodeAffinityProfile'] = \is_iterable($normalized_13) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_13) : $normalized_13;
        }
        if (array_key_exists('venueProfile', get_object_vars($data)) && null !== ($data->venueProfile ?? null)) {
            $normalized_14 = $this->normalizer->normalize($data->venueProfile, 'json', $context);
            $dataArray['venueProfile'] = \is_iterable($normalized_14) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_14) : $normalized_14;
        }
        if (array_key_exists('channelEvaluationInterval', get_object_vars($data)) && null !== ($data->channelEvaluationInterval ?? null)) {
            $dataArray['channelEvaluationInterval'] = $data->channelEvaluationInterval;
        }
        if (array_key_exists('apMgmtVlan', get_object_vars($data)) && null !== ($data->apMgmtVlan ?? null)) {
            $normalized_15 = $this->normalizer->normalize($data->apMgmtVlan, 'json', $context);
            $dataArray['apMgmtVlan'] = \is_iterable($normalized_15) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_15) : $normalized_15;
        }
        if (array_key_exists('apLatencyInterval', get_object_vars($data)) && null !== ($data->apLatencyInterval ?? null)) {
            $normalized_16 = $this->normalizer->normalize($data->apLatencyInterval, 'json', $context);
            $dataArray['apLatencyInterval'] = \is_iterable($normalized_16) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_16) : $normalized_16;
        }
        if (array_key_exists('ipsecProfile', get_object_vars($data)) && null !== ($data->ipsecProfile ?? null)) {
            $normalized_17 = $this->normalizer->normalize($data->ipsecProfile, 'json', $context);
            $dataArray['ipsecProfile'] = \is_iterable($normalized_17) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_17) : $normalized_17;
        }
        if (array_key_exists('ipv6TrafficFilterEnabled', get_object_vars($data)) && null !== ($data->ipv6TrafficFilterEnabled ?? null)) {
            $dataArray['ipv6TrafficFilterEnabled'] = $data->ipv6TrafficFilterEnabled;
        }
        if (array_key_exists('restrictedApAccessEnabled', get_object_vars($data)) && null !== ($data->restrictedApAccessEnabled ?? null)) {
            $dataArray['restrictedApAccessEnabled'] = $data->restrictedApAccessEnabled;
        }
        if (array_key_exists('restrictedApAccessProfileId', get_object_vars($data)) && null !== ($data->restrictedApAccessProfileId ?? null)) {
            $dataArray['restrictedApAccessProfileId'] = $data->restrictedApAccessProfileId;
        }
        if (array_key_exists('bonjourFencingPolicyEnabled', get_object_vars($data)) && null !== ($data->bonjourFencingPolicyEnabled ?? null)) {
            $dataArray['bonjourFencingPolicyEnabled'] = $data->bonjourFencingPolicyEnabled;
        }
        if (array_key_exists('bonjourFencingPolicy', get_object_vars($data)) && null !== ($data->bonjourFencingPolicy ?? null)) {
            $normalized_18 = $this->normalizer->normalize($data->bonjourFencingPolicy, 'json', $context);
            $dataArray['bonjourFencingPolicy'] = \is_iterable($normalized_18) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_18) : $normalized_18;
        }
        if (array_key_exists('dhcpSiteConfig', get_object_vars($data)) && null !== ($data->dhcpSiteConfig ?? null)) {
            $normalized_19 = $this->normalizer->normalize($data->dhcpSiteConfig, 'json', $context);
            $dataArray['dhcpSiteConfig'] = \is_iterable($normalized_19) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_19) : $normalized_19;
        }
        if (array_key_exists('snmpAgent', get_object_vars($data)) && null !== ($data->snmpAgent ?? null)) {
            $normalized_20 = $this->normalizer->normalize($data->snmpAgent, 'json', $context);
            $dataArray['snmpAgent'] = \is_iterable($normalized_20) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_20) : $normalized_20;
        }
        if (array_key_exists('recoverySsid', get_object_vars($data)) && null !== ($data->recoverySsid ?? null)) {
            $normalized_21 = $this->normalizer->normalize($data->recoverySsid, 'json', $context);
            $dataArray['recoverySsid'] = \is_iterable($normalized_21) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_21) : $normalized_21;
        }
        if (array_key_exists('clusterRedundancyEnabled', get_object_vars($data)) && null !== ($data->clusterRedundancyEnabled ?? null)) {
            $dataArray['clusterRedundancyEnabled'] = $data->clusterRedundancyEnabled;
        }
        if (array_key_exists('rogueApReportThreshold', get_object_vars($data)) && null !== ($data->rogueApReportThreshold ?? null)) {
            $dataArray['rogueApReportThreshold'] = $data->rogueApReportThreshold;
        }
        if (array_key_exists('rogueApAggressivenessMode', get_object_vars($data)) && null !== ($data->rogueApAggressivenessMode ?? null)) {
            $dataArray['rogueApAggressivenessMode'] = $data->rogueApAggressivenessMode;
        }
        if (array_key_exists('rogueApJammingDetection', get_object_vars($data)) && null !== ($data->rogueApJammingDetection ?? null)) {
            $dataArray['rogueApJammingDetection'] = $data->rogueApJammingDetection;
        }
        if (array_key_exists('rogueApJammingThreshold', get_object_vars($data)) && null !== ($data->rogueApJammingThreshold ?? null)) {
            $dataArray['rogueApJammingThreshold'] = $data->rogueApJammingThreshold;
        }
        if (array_key_exists('directedMulticastFromWiredClientEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromWiredClientEnabled ?? null)) {
            $dataArray['directedMulticastFromWiredClientEnabled'] = $data->directedMulticastFromWiredClientEnabled;
        }
        if (array_key_exists('directedMulticastFromWirelessClientEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromWirelessClientEnabled ?? null)) {
            $dataArray['directedMulticastFromWirelessClientEnabled'] = $data->directedMulticastFromWirelessClientEnabled;
        }
        if (array_key_exists('directedMulticastFromNetworkEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromNetworkEnabled ?? null)) {
            $dataArray['directedMulticastFromNetworkEnabled'] = $data->directedMulticastFromNetworkEnabled;
        }
        if (array_key_exists('healthCheckSitesEnabled', get_object_vars($data)) && null !== ($data->healthCheckSitesEnabled ?? null)) {
            $dataArray['healthCheckSitesEnabled'] = $data->healthCheckSitesEnabled;
        }
        if (array_key_exists('healthCheckSites', get_object_vars($data)) && null !== ($data->healthCheckSites ?? null)) {
            $values = [];
            foreach ($data->healthCheckSites as $value) {
                $values[] = $value;
            }
            $dataArray['healthCheckSites'] = $values;
        }
        if (array_key_exists('ruckusGreTunnelProfile', get_object_vars($data)) && null !== ($data->ruckusGreTunnelProfile ?? null)) {
            $normalized_22 = $this->normalizer->normalize($data->ruckusGreTunnelProfile, 'json', $context);
            $dataArray['ruckusGreTunnelProfile'] = \is_iterable($normalized_22) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_22) : $normalized_22;
        }
        if (array_key_exists('softGreTunnelProflies', get_object_vars($data)) && null !== ($data->softGreTunnelProflies ?? null)) {
            $values_1 = [];
            foreach ($data->softGreTunnelProflies as $value_1) {
                $normalized_23 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_23) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_23) : $normalized_23;
            }
            $dataArray['softGreTunnelProflies'] = $values_1;
        }
        if (array_key_exists('ipsecProfiles', get_object_vars($data)) && null !== ($data->ipsecProfiles ?? null)) {
            $values_2 = [];
            foreach ($data->ipsecProfiles as $value_2) {
                $normalized_24 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_24) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_24) : $normalized_24;
            }
            $dataArray['ipsecProfiles'] = $values_2;
        }
        if (array_key_exists('ipsecTunnelMode', get_object_vars($data)) && null !== ($data->ipsecTunnelMode ?? null)) {
            $dataArray['ipsecTunnelMode'] = $data->ipsecTunnelMode;
        }
        if (array_key_exists('rksGreForwardBroadcast', get_object_vars($data)) && null !== ($data->rksGreForwardBroadcast ?? null)) {
            $dataArray['rksGreForwardBroadcast'] = $data->rksGreForwardBroadcast;
        }
        if (array_key_exists('sshTunnelEncryption', get_object_vars($data)) && null !== ($data->sshTunnelEncryption ?? null)) {
            $dataArray['sshTunnelEncryption'] = $data->sshTunnelEncryption;
        }
        if (array_key_exists('lteBandLockChannels', get_object_vars($data)) && null !== ($data->lteBandLockChannels ?? null)) {
            $values_3 = [];
            foreach ($data->lteBandLockChannels as $value_3) {
                $normalized_25 = $value_3 === null ? null : $this->normalizer->normalize($value_3, 'json', $context);
                $values_3[] = \is_iterable($normalized_25) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_25) : $normalized_25;
            }
            $dataArray['lteBandLockChannels'] = $values_3;
        }
        if (array_key_exists('paloAltoFirewallProfileId', get_object_vars($data)) && null !== ($data->paloAltoFirewallProfileId ?? null)) {
            $dataArray['paloAltoFirewallProfileId'] = $data->paloAltoFirewallProfileId;
        }
        if (array_key_exists('apHccdEnabled', get_object_vars($data)) && null !== ($data->apHccdEnabled ?? null)) {
            $dataArray['apHccdEnabled'] = $data->apHccdEnabled;
        }
        if (array_key_exists('apHccdPersist', get_object_vars($data)) && null !== ($data->apHccdPersist ?? null)) {
            $dataArray['apHccdPersist'] = $data->apHccdPersist;
        }
        if (array_key_exists('aaaAffinityEnabled', get_object_vars($data)) && null !== ($data->aaaAffinityEnabled ?? null)) {
            $dataArray['aaaAffinityEnabled'] = $data->aaaAffinityEnabled;
        }
        if (array_key_exists('awsVenue', get_object_vars($data)) && null !== ($data->awsVenue ?? null)) {
            $dataArray['awsVenue'] = $data->awsVenue;
        }
        if (array_key_exists('myRuckusConfig', get_object_vars($data)) && null !== ($data->myRuckusConfig ?? null)) {
            $normalized_26 = $this->normalizer->normalize($data->myRuckusConfig, 'json', $context);
            $dataArray['myRuckusConfig'] = \is_iterable($normalized_26) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_26) : $normalized_26;
        }
        if (array_key_exists('apHttp2CertChkEnable', get_object_vars($data)) && null !== ($data->apHttp2CertChkEnable ?? null)) {
            $dataArray['apHttp2CertChkEnable'] = $data->apHttp2CertChkEnable;
        }
        if (array_key_exists('bssColoringEnable', get_object_vars($data)) && null !== ($data->bssColoringEnable ?? null)) {
            $dataArray['bssColoringEnable'] = $data->bssColoringEnable;
        }
        if (array_key_exists('radioConfig', get_object_vars($data)) && null !== ($data->radioConfig ?? null)) {
            $normalized_27 = $this->normalizer->normalize($data->radioConfig, 'json', $context);
            $dataArray['radioConfig'] = \is_iterable($normalized_27) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_27) : $normalized_27;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone::class => false];
    }
}