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
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('dpGroupId', get_object_vars($data)) && null !== ($data->dpGroupId ?? null)) {
            $dataArray['dpGroupId'] = $data->dpGroupId ?? null;
        }
        if (array_key_exists('enforcePriorityDpGroupEnable', get_object_vars($data)) && null !== ($data->enforcePriorityDpGroupEnable ?? null)) {
            $dataArray['enforcePriorityDpGroupEnable'] = $data->enforcePriorityDpGroupEnable ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode ?? null;
        }
        if (array_key_exists('timezone', get_object_vars($data)) && null !== ($data->timezone ?? null)) {
            $dataArray['timezone'] = ($data->timezone ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->timezone ?? null, 'json', $context));
        }
        if (array_key_exists('login', get_object_vars($data)) && null !== ($data->login ?? null)) {
            $dataArray['login'] = ($data->login ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->login ?? null, 'json', $context));
        }
        if (array_key_exists('mesh', get_object_vars($data)) && null !== ($data->mesh ?? null)) {
            $dataArray['mesh'] = ($data->mesh ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->mesh ?? null, 'json', $context));
        }
        if (array_key_exists('syslog', get_object_vars($data)) && null !== ($data->syslog ?? null)) {
            $dataArray['syslog'] = ($data->syslog ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->syslog ?? null, 'json', $context));
        }
        if (array_key_exists('smartMonitor', get_object_vars($data)) && null !== ($data->smartMonitor ?? null)) {
            $dataArray['smartMonitor'] = ($data->smartMonitor ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->smartMonitor ?? null, 'json', $context));
        }
        if (array_key_exists('clientAdmissionControl24', get_object_vars($data)) && null !== ($data->clientAdmissionControl24 ?? null)) {
            $dataArray['clientAdmissionControl24'] = ($data->clientAdmissionControl24 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientAdmissionControl24 ?? null, 'json', $context));
        }
        if (array_key_exists('clientAdmissionControl50', get_object_vars($data)) && null !== ($data->clientAdmissionControl50 ?? null)) {
            $dataArray['clientAdmissionControl50'] = ($data->clientAdmissionControl50 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientAdmissionControl50 ?? null, 'json', $context));
        }
        if (array_key_exists('tunnelType', get_object_vars($data)) && null !== ($data->tunnelType ?? null)) {
            $dataArray['tunnelType'] = $data->tunnelType ?? null;
        }
        if (array_key_exists('tunnelProfile', get_object_vars($data)) && null !== ($data->tunnelProfile ?? null)) {
            $dataArray['tunnelProfile'] = ($data->tunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->tunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('loadBalancing', get_object_vars($data)) && null !== ($data->loadBalancing ?? null)) {
            $dataArray['loadBalancing'] = ($data->loadBalancing ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->loadBalancing ?? null, 'json', $context));
        }
        if (array_key_exists('rogue', get_object_vars($data)) && null !== ($data->rogue ?? null)) {
            $dataArray['rogue'] = ($data->rogue ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->rogue ?? null, 'json', $context));
        }
        if (array_key_exists('dosBarringEnable', get_object_vars($data)) && null !== ($data->dosBarringEnable ?? null)) {
            $dataArray['dosBarringEnable'] = $data->dosBarringEnable ?? null;
        }
        if (array_key_exists('dosBarringPeriod', get_object_vars($data)) && null !== ($data->dosBarringPeriod ?? null)) {
            $dataArray['dosBarringPeriod'] = $data->dosBarringPeriod ?? null;
        }
        if (array_key_exists('dosBarringThreshold', get_object_vars($data)) && null !== ($data->dosBarringThreshold ?? null)) {
            $dataArray['dosBarringThreshold'] = $data->dosBarringThreshold ?? null;
        }
        if (array_key_exists('dosBarringCheckPeriod', get_object_vars($data)) && null !== ($data->dosBarringCheckPeriod ?? null)) {
            $dataArray['dosBarringCheckPeriod'] = $data->dosBarringCheckPeriod ?? null;
        }
        if (array_key_exists('locationBasedService', get_object_vars($data)) && null !== ($data->locationBasedService ?? null)) {
            $dataArray['locationBasedService'] = ($data->locationBasedService ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->locationBasedService ?? null, 'json', $context));
        }
        if (array_key_exists('apRebootTimeout', get_object_vars($data)) && null !== ($data->apRebootTimeout ?? null)) {
            $dataArray['apRebootTimeout'] = ($data->apRebootTimeout ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->apRebootTimeout ?? null, 'json', $context));
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location ?? null;
        }
        if (array_key_exists('locationAdditionalInfo', get_object_vars($data)) && null !== ($data->locationAdditionalInfo ?? null)) {
            $dataArray['locationAdditionalInfo'] = $data->locationAdditionalInfo ?? null;
        }
        if (array_key_exists('altitude', get_object_vars($data)) && null !== ($data->altitude ?? null)) {
            $dataArray['altitude'] = ($data->altitude ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->altitude ?? null, 'json', $context));
        }
        if (array_key_exists('latitude', get_object_vars($data)) && null !== ($data->latitude ?? null)) {
            $dataArray['latitude'] = $data->latitude ?? null;
        }
        if (array_key_exists('longitude', get_object_vars($data)) && null !== ($data->longitude ?? null)) {
            $dataArray['longitude'] = $data->longitude ?? null;
        }
        if (array_key_exists('vlanOverlappingEnabled', get_object_vars($data)) && null !== ($data->vlanOverlappingEnabled ?? null)) {
            $dataArray['vlanOverlappingEnabled'] = $data->vlanOverlappingEnabled ?? null;
        }
        if (array_key_exists('nodeAffinityProfile', get_object_vars($data)) && null !== ($data->nodeAffinityProfile ?? null)) {
            $dataArray['nodeAffinityProfile'] = ($data->nodeAffinityProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->nodeAffinityProfile ?? null, 'json', $context));
        }
        if (array_key_exists('venueProfile', get_object_vars($data)) && null !== ($data->venueProfile ?? null)) {
            $dataArray['venueProfile'] = ($data->venueProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->venueProfile ?? null, 'json', $context));
        }
        if (array_key_exists('channelEvaluationInterval', get_object_vars($data)) && null !== ($data->channelEvaluationInterval ?? null)) {
            $dataArray['channelEvaluationInterval'] = $data->channelEvaluationInterval ?? null;
        }
        if (array_key_exists('apMgmtVlan', get_object_vars($data)) && null !== ($data->apMgmtVlan ?? null)) {
            $dataArray['apMgmtVlan'] = ($data->apMgmtVlan ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->apMgmtVlan ?? null, 'json', $context));
        }
        if (array_key_exists('apLatencyInterval', get_object_vars($data)) && null !== ($data->apLatencyInterval ?? null)) {
            $dataArray['apLatencyInterval'] = ($data->apLatencyInterval ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->apLatencyInterval ?? null, 'json', $context));
        }
        if (array_key_exists('ipsecProfile', get_object_vars($data)) && null !== ($data->ipsecProfile ?? null)) {
            $dataArray['ipsecProfile'] = ($data->ipsecProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipsecProfile ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6TrafficFilterEnabled', get_object_vars($data)) && null !== ($data->ipv6TrafficFilterEnabled ?? null)) {
            $dataArray['ipv6TrafficFilterEnabled'] = $data->ipv6TrafficFilterEnabled ?? null;
        }
        if (array_key_exists('restrictedApAccessEnabled', get_object_vars($data)) && null !== ($data->restrictedApAccessEnabled ?? null)) {
            $dataArray['restrictedApAccessEnabled'] = $data->restrictedApAccessEnabled ?? null;
        }
        if (array_key_exists('restrictedApAccessProfileId', get_object_vars($data)) && null !== ($data->restrictedApAccessProfileId ?? null)) {
            $dataArray['restrictedApAccessProfileId'] = $data->restrictedApAccessProfileId ?? null;
        }
        if (array_key_exists('bonjourFencingPolicyEnabled', get_object_vars($data)) && null !== ($data->bonjourFencingPolicyEnabled ?? null)) {
            $dataArray['bonjourFencingPolicyEnabled'] = $data->bonjourFencingPolicyEnabled ?? null;
        }
        if (array_key_exists('bonjourFencingPolicy', get_object_vars($data)) && null !== ($data->bonjourFencingPolicy ?? null)) {
            $dataArray['bonjourFencingPolicy'] = ($data->bonjourFencingPolicy ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->bonjourFencingPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('dhcpSiteConfig', get_object_vars($data)) && null !== ($data->dhcpSiteConfig ?? null)) {
            $dataArray['dhcpSiteConfig'] = ($data->dhcpSiteConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->dhcpSiteConfig ?? null, 'json', $context));
        }
        if (array_key_exists('snmpAgent', get_object_vars($data)) && null !== ($data->snmpAgent ?? null)) {
            $dataArray['snmpAgent'] = ($data->snmpAgent ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->snmpAgent ?? null, 'json', $context));
        }
        if (array_key_exists('recoverySsid', get_object_vars($data)) && null !== ($data->recoverySsid ?? null)) {
            $dataArray['recoverySsid'] = ($data->recoverySsid ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->recoverySsid ?? null, 'json', $context));
        }
        if (array_key_exists('clusterRedundancyEnabled', get_object_vars($data)) && null !== ($data->clusterRedundancyEnabled ?? null)) {
            $dataArray['clusterRedundancyEnabled'] = $data->clusterRedundancyEnabled ?? null;
        }
        if (array_key_exists('rogueApReportThreshold', get_object_vars($data)) && null !== ($data->rogueApReportThreshold ?? null)) {
            $dataArray['rogueApReportThreshold'] = $data->rogueApReportThreshold ?? null;
        }
        if (array_key_exists('rogueApAggressivenessMode', get_object_vars($data)) && null !== ($data->rogueApAggressivenessMode ?? null)) {
            $dataArray['rogueApAggressivenessMode'] = $data->rogueApAggressivenessMode ?? null;
        }
        if (array_key_exists('rogueApJammingDetection', get_object_vars($data)) && null !== ($data->rogueApJammingDetection ?? null)) {
            $dataArray['rogueApJammingDetection'] = $data->rogueApJammingDetection ?? null;
        }
        if (array_key_exists('rogueApJammingThreshold', get_object_vars($data)) && null !== ($data->rogueApJammingThreshold ?? null)) {
            $dataArray['rogueApJammingThreshold'] = $data->rogueApJammingThreshold ?? null;
        }
        if (array_key_exists('directedMulticastFromWiredClientEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromWiredClientEnabled ?? null)) {
            $dataArray['directedMulticastFromWiredClientEnabled'] = $data->directedMulticastFromWiredClientEnabled ?? null;
        }
        if (array_key_exists('directedMulticastFromWirelessClientEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromWirelessClientEnabled ?? null)) {
            $dataArray['directedMulticastFromWirelessClientEnabled'] = $data->directedMulticastFromWirelessClientEnabled ?? null;
        }
        if (array_key_exists('directedMulticastFromNetworkEnabled', get_object_vars($data)) && null !== ($data->directedMulticastFromNetworkEnabled ?? null)) {
            $dataArray['directedMulticastFromNetworkEnabled'] = $data->directedMulticastFromNetworkEnabled ?? null;
        }
        if (array_key_exists('healthCheckSitesEnabled', get_object_vars($data)) && null !== ($data->healthCheckSitesEnabled ?? null)) {
            $dataArray['healthCheckSitesEnabled'] = $data->healthCheckSitesEnabled ?? null;
        }
        if (array_key_exists('healthCheckSites', get_object_vars($data)) && null !== ($data->healthCheckSites ?? null)) {
            $values = [];
            foreach ($data->healthCheckSites ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['healthCheckSites'] = $values;
        }
        if (array_key_exists('ruckusGreTunnelProfile', get_object_vars($data)) && null !== ($data->ruckusGreTunnelProfile ?? null)) {
            $dataArray['ruckusGreTunnelProfile'] = ($data->ruckusGreTunnelProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ruckusGreTunnelProfile ?? null, 'json', $context));
        }
        if (array_key_exists('softGreTunnelProflies', get_object_vars($data)) && null !== ($data->softGreTunnelProflies ?? null)) {
            $values_1 = [];
            foreach ($data->softGreTunnelProflies ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['softGreTunnelProflies'] = $values_1;
        }
        if (array_key_exists('ipsecProfiles', get_object_vars($data)) && null !== ($data->ipsecProfiles ?? null)) {
            $values_2 = [];
            foreach ($data->ipsecProfiles ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['ipsecProfiles'] = $values_2;
        }
        if (array_key_exists('ipsecTunnelMode', get_object_vars($data)) && null !== ($data->ipsecTunnelMode ?? null)) {
            $dataArray['ipsecTunnelMode'] = $data->ipsecTunnelMode ?? null;
        }
        if (array_key_exists('rksGreForwardBroadcast', get_object_vars($data)) && null !== ($data->rksGreForwardBroadcast ?? null)) {
            $dataArray['rksGreForwardBroadcast'] = $data->rksGreForwardBroadcast ?? null;
        }
        if (array_key_exists('sshTunnelEncryption', get_object_vars($data)) && null !== ($data->sshTunnelEncryption ?? null)) {
            $dataArray['sshTunnelEncryption'] = $data->sshTunnelEncryption ?? null;
        }
        if (array_key_exists('lteBandLockChannels', get_object_vars($data)) && null !== ($data->lteBandLockChannels ?? null)) {
            $values_3 = [];
            foreach ($data->lteBandLockChannels ?? null as $value_3) {
                $values_3[] = $value_3 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['lteBandLockChannels'] = $values_3;
        }
        if (array_key_exists('paloAltoFirewallProfileId', get_object_vars($data)) && null !== ($data->paloAltoFirewallProfileId ?? null)) {
            $dataArray['paloAltoFirewallProfileId'] = $data->paloAltoFirewallProfileId ?? null;
        }
        if (array_key_exists('apHccdEnabled', get_object_vars($data)) && null !== ($data->apHccdEnabled ?? null)) {
            $dataArray['apHccdEnabled'] = $data->apHccdEnabled ?? null;
        }
        if (array_key_exists('apHccdPersist', get_object_vars($data)) && null !== ($data->apHccdPersist ?? null)) {
            $dataArray['apHccdPersist'] = $data->apHccdPersist ?? null;
        }
        if (array_key_exists('aaaAffinityEnabled', get_object_vars($data)) && null !== ($data->aaaAffinityEnabled ?? null)) {
            $dataArray['aaaAffinityEnabled'] = $data->aaaAffinityEnabled ?? null;
        }
        if (array_key_exists('awsVenue', get_object_vars($data)) && null !== ($data->awsVenue ?? null)) {
            $dataArray['awsVenue'] = $data->awsVenue ?? null;
        }
        if (array_key_exists('myRuckusConfig', get_object_vars($data)) && null !== ($data->myRuckusConfig ?? null)) {
            $dataArray['myRuckusConfig'] = ($data->myRuckusConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->myRuckusConfig ?? null, 'json', $context));
        }
        if (array_key_exists('apHttp2CertChkEnable', get_object_vars($data)) && null !== ($data->apHttp2CertChkEnable ?? null)) {
            $dataArray['apHttp2CertChkEnable'] = $data->apHttp2CertChkEnable ?? null;
        }
        if (array_key_exists('bssColoringEnable', get_object_vars($data)) && null !== ($data->bssColoringEnable ?? null)) {
            $dataArray['bssColoringEnable'] = $data->bssColoringEnable ?? null;
        }
        if (array_key_exists('radioConfig', get_object_vars($data)) && null !== ($data->radioConfig ?? null)) {
            $dataArray['radioConfig'] = ($data->radioConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radioConfig ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneModifyZone::class => false];
    }
}