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
class ZoneCreateZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateZone();
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
        if (\array_key_exists('apHttp2CertChkEnable', $data) && \is_int($data['apHttp2CertChkEnable'])) {
            $data['apHttp2CertChkEnable'] = (bool) $data['apHttp2CertChkEnable'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('dpGroupId', $data)) {
            $object->setDpGroupId($data['dpGroupId']);
        }
        if (\array_key_exists('enforcePriorityDpGroupEnable', $data)) {
            $object->setEnforcePriorityDpGroupEnable($data['enforcePriorityDpGroupEnable']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($this->denormalizer->denormalize($data['login'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApLogin::class, 'json', $context));
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($this->denormalizer->denormalize($data['timezone'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneTimezoneSetting::class, 'json', $context));
        }
        if (\array_key_exists('mesh', $data)) {
            $object->setMesh($this->denormalizer->denormalize($data['mesh'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class, 'json', $context));
        }
        if (\array_key_exists('syslog', $data)) {
            $object->setSyslog($this->denormalizer->denormalize($data['syslog'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSyslog::class, 'json', $context));
        }
        if (\array_key_exists('smartMonitor', $data)) {
            $object->setSmartMonitor($this->denormalizer->denormalize($data['smartMonitor'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSmartMonitor::class, 'json', $context));
        }
        if (\array_key_exists('clientAdmissionControl24', $data)) {
            $object->setClientAdmissionControl24($this->denormalizer->denormalize($data['clientAdmissionControl24'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonClientAdmissionControl::class, 'json', $context));
        }
        if (\array_key_exists('clientAdmissionControl50', $data)) {
            $object->setClientAdmissionControl50($this->denormalizer->denormalize($data['clientAdmissionControl50'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonClientAdmissionControl::class, 'json', $context));
        }
        if (\array_key_exists('tunnelType', $data)) {
            $object->setTunnelType($data['tunnelType']);
        }
        if (\array_key_exists('tunnelProfile', $data)) {
            $object->setTunnelProfile($this->denormalizer->denormalize($data['tunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('loadBalancing', $data)) {
            $object->setLoadBalancing($this->denormalizer->denormalize($data['loadBalancing'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneLoadBalancing::class, 'json', $context));
        }
        if (\array_key_exists('rogue', $data)) {
            $object->setRogue($this->denormalizer->denormalize($data['rogue'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneRogue::class, 'json', $context));
        }
        if (\array_key_exists('dosBarringEnable', $data)) {
            $object->setDosBarringEnable($data['dosBarringEnable']);
        }
        if (\array_key_exists('dosBarringPeriod', $data)) {
            $object->setDosBarringPeriod($data['dosBarringPeriod']);
        }
        if (\array_key_exists('dosBarringThreshold', $data)) {
            $object->setDosBarringThreshold($data['dosBarringThreshold']);
        }
        if (\array_key_exists('dosBarringCheckPeriod', $data)) {
            $object->setDosBarringCheckPeriod($data['dosBarringCheckPeriod']);
        }
        if (\array_key_exists('locationBasedService', $data)) {
            $object->setLocationBasedService($this->denormalizer->denormalize($data['locationBasedService'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('apRebootTimeout', $data)) {
            $object->setApRebootTimeout($this->denormalizer->denormalize($data['apRebootTimeout'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApRebootTimeout::class, 'json', $context));
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('locationAdditionalInfo', $data)) {
            $object->setLocationAdditionalInfo($data['locationAdditionalInfo']);
        }
        if (\array_key_exists('altitude', $data)) {
            $object->setAltitude($this->denormalizer->denormalize($data['altitude'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonAltitude::class, 'json', $context));
        }
        if (\array_key_exists('latitude', $data)) {
            $object->setLatitude($data['latitude']);
        }
        if (\array_key_exists('longitude', $data)) {
            $object->setLongitude($data['longitude']);
        }
        if (\array_key_exists('vlanOverlappingEnabled', $data)) {
            $object->setVlanOverlappingEnabled($data['vlanOverlappingEnabled']);
        }
        if (\array_key_exists('nodeAffinityProfile', $data)) {
            $object->setNodeAffinityProfile($this->denormalizer->denormalize($data['nodeAffinityProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('venueProfile', $data)) {
            $object->setVenueProfile($this->denormalizer->denormalize($data['venueProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('channelEvaluationInterval', $data)) {
            $object->setChannelEvaluationInterval($data['channelEvaluationInterval']);
        }
        if (\array_key_exists('apMgmtVlan', $data)) {
            $object->setApMgmtVlan($this->denormalizer->denormalize($data['apMgmtVlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApManagementVlan::class, 'json', $context));
        }
        if (\array_key_exists('apLatencyInterval', $data)) {
            $object->setApLatencyInterval($this->denormalizer->denormalize($data['apLatencyInterval'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApLatencyInterval::class, 'json', $context));
        }
        if (\array_key_exists('ipsecProfile', $data)) {
            $object->setIpsecProfile($this->denormalizer->denormalize($data['ipsecProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('ipv6TrafficFilterEnabled', $data)) {
            $object->setIpv6TrafficFilterEnabled($data['ipv6TrafficFilterEnabled']);
        }
        if (\array_key_exists('bonjourFencingPolicyEnabled', $data)) {
            $object->setBonjourFencingPolicyEnabled($data['bonjourFencingPolicyEnabled']);
        }
        if (\array_key_exists('bonjourFencingPolicy', $data)) {
            $object->setBonjourFencingPolicy($this->denormalizer->denormalize($data['bonjourFencingPolicy'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('dhcpSiteConfig', $data)) {
            $object->setDhcpSiteConfig($this->denormalizer->denormalize($data['dhcpSiteConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef::class, 'json', $context));
        }
        if (\array_key_exists('snmpAgent', $data)) {
            $object->setSnmpAgent($this->denormalizer->denormalize($data['snmpAgent'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class, 'json', $context));
        }
        if (\array_key_exists('recoverySsid', $data)) {
            $object->setRecoverySsid($this->denormalizer->denormalize($data['recoverySsid'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneRecoverySsidSet::class, 'json', $context));
        }
        if (\array_key_exists('clusterRedundancyEnabled', $data)) {
            $object->setClusterRedundancyEnabled($data['clusterRedundancyEnabled']);
        }
        if (\array_key_exists('rogueApReportThreshold', $data)) {
            $object->setRogueApReportThreshold($data['rogueApReportThreshold']);
        }
        if (\array_key_exists('rogueApAggressivenessMode', $data)) {
            $object->setRogueApAggressivenessMode($data['rogueApAggressivenessMode']);
        }
        if (\array_key_exists('rogueApJammingDetection', $data)) {
            $object->setRogueApJammingDetection($data['rogueApJammingDetection']);
        }
        if (\array_key_exists('rogueApJammingThreshold', $data)) {
            $object->setRogueApJammingThreshold($data['rogueApJammingThreshold']);
        }
        if (\array_key_exists('directedMulticastFromWiredClientEnabled', $data)) {
            $object->setDirectedMulticastFromWiredClientEnabled($data['directedMulticastFromWiredClientEnabled']);
        }
        if (\array_key_exists('directedMulticastFromWirelessClientEnabled', $data)) {
            $object->setDirectedMulticastFromWirelessClientEnabled($data['directedMulticastFromWirelessClientEnabled']);
        }
        if (\array_key_exists('directedMulticastFromNetworkEnabled', $data)) {
            $object->setDirectedMulticastFromNetworkEnabled($data['directedMulticastFromNetworkEnabled']);
        }
        if (\array_key_exists('healthCheckSitesEnabled', $data)) {
            $object->setHealthCheckSitesEnabled($data['healthCheckSitesEnabled']);
        }
        if (\array_key_exists('healthCheckSites', $data)) {
            $values = [];
            foreach ($data['healthCheckSites'] as $value) {
                $values[] = $value;
            }
            $object->setHealthCheckSites($values);
        }
        if (\array_key_exists('ruckusGreTunnelProfile', $data)) {
            $object->setRuckusGreTunnelProfile($this->denormalizer->denormalize($data['ruckusGreTunnelProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('softGreTunnelProflies', $data)) {
            $values_1 = [];
            foreach ($data['softGreTunnelProflies'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneSoftGreRef::class, 'json', $context);
            }
            $object->setSoftGreTunnelProflies($values_1);
        }
        if (\array_key_exists('ipsecProfiles', $data)) {
            $values_2 = [];
            foreach ($data['ipsecProfiles'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context);
            }
            $object->setIpsecProfiles($values_2);
        }
        if (\array_key_exists('ipsecTunnelMode', $data)) {
            $object->setIpsecTunnelMode($data['ipsecTunnelMode']);
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->setRksGreForwardBroadcast($data['rksGreForwardBroadcast']);
        }
        if (\array_key_exists('sshTunnelEncryption', $data)) {
            $object->setSshTunnelEncryption($data['sshTunnelEncryption']);
        }
        if (\array_key_exists('lteBandLockChannels', $data)) {
            $values_3 = [];
            foreach ($data['lteBandLockChannels'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->setLteBandLockChannels($values_3);
        }
        if (\array_key_exists('paloAltoFirewallProfileId', $data)) {
            $object->setPaloAltoFirewallProfileId($data['paloAltoFirewallProfileId']);
        }
        if (\array_key_exists('apHccdEnabled', $data)) {
            $object->setApHccdEnabled($data['apHccdEnabled']);
        }
        if (\array_key_exists('apHccdPersist', $data)) {
            $object->setApHccdPersist($data['apHccdPersist']);
        }
        if (\array_key_exists('myRuckusConfig', $data)) {
            $object->setMyRuckusConfig($this->denormalizer->denormalize($data['myRuckusConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonMyRuckusConfig::class, 'json', $context));
        }
        if (\array_key_exists('apHttp2CertChkEnable', $data)) {
            $object->setApHttp2CertChkEnable($data['apHttp2CertChkEnable']);
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->setBssColoringEnable($data['bssColoringEnable']);
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->setRadioConfig($this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigZone::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('dpGroupId') && null !== $data->getDpGroupId()) {
            $dataArray['dpGroupId'] = $data->getDpGroupId();
        }
        if ($data->isInitialized('enforcePriorityDpGroupEnable') && null !== $data->getEnforcePriorityDpGroupEnable()) {
            $dataArray['enforcePriorityDpGroupEnable'] = $data->getEnforcePriorityDpGroupEnable();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
        }
        $dataArray['login'] = $this->normalizer->normalize($data->getLogin(), 'json', $context);
        if ($data->isInitialized('timezone') && null !== $data->getTimezone()) {
            $dataArray['timezone'] = $this->normalizer->normalize($data->getTimezone(), 'json', $context);
        }
        if ($data->isInitialized('mesh') && null !== $data->getMesh()) {
            $dataArray['mesh'] = $this->normalizer->normalize($data->getMesh(), 'json', $context);
        }
        if ($data->isInitialized('syslog') && null !== $data->getSyslog()) {
            $dataArray['syslog'] = $this->normalizer->normalize($data->getSyslog(), 'json', $context);
        }
        if ($data->isInitialized('smartMonitor') && null !== $data->getSmartMonitor()) {
            $dataArray['smartMonitor'] = $this->normalizer->normalize($data->getSmartMonitor(), 'json', $context);
        }
        if ($data->isInitialized('clientAdmissionControl24') && null !== $data->getClientAdmissionControl24()) {
            $dataArray['clientAdmissionControl24'] = $this->normalizer->normalize($data->getClientAdmissionControl24(), 'json', $context);
        }
        if ($data->isInitialized('clientAdmissionControl50') && null !== $data->getClientAdmissionControl50()) {
            $dataArray['clientAdmissionControl50'] = $this->normalizer->normalize($data->getClientAdmissionControl50(), 'json', $context);
        }
        if ($data->isInitialized('tunnelType') && null !== $data->getTunnelType()) {
            $dataArray['tunnelType'] = $data->getTunnelType();
        }
        if ($data->isInitialized('tunnelProfile') && null !== $data->getTunnelProfile()) {
            $dataArray['tunnelProfile'] = $this->normalizer->normalize($data->getTunnelProfile(), 'json', $context);
        }
        if ($data->isInitialized('loadBalancing') && null !== $data->getLoadBalancing()) {
            $dataArray['loadBalancing'] = $this->normalizer->normalize($data->getLoadBalancing(), 'json', $context);
        }
        if ($data->isInitialized('rogue') && null !== $data->getRogue()) {
            $dataArray['rogue'] = $this->normalizer->normalize($data->getRogue(), 'json', $context);
        }
        if ($data->isInitialized('dosBarringEnable') && null !== $data->getDosBarringEnable()) {
            $dataArray['dosBarringEnable'] = $data->getDosBarringEnable();
        }
        if ($data->isInitialized('dosBarringPeriod') && null !== $data->getDosBarringPeriod()) {
            $dataArray['dosBarringPeriod'] = $data->getDosBarringPeriod();
        }
        if ($data->isInitialized('dosBarringThreshold') && null !== $data->getDosBarringThreshold()) {
            $dataArray['dosBarringThreshold'] = $data->getDosBarringThreshold();
        }
        if ($data->isInitialized('dosBarringCheckPeriod') && null !== $data->getDosBarringCheckPeriod()) {
            $dataArray['dosBarringCheckPeriod'] = $data->getDosBarringCheckPeriod();
        }
        if ($data->isInitialized('locationBasedService') && null !== $data->getLocationBasedService()) {
            $dataArray['locationBasedService'] = $this->normalizer->normalize($data->getLocationBasedService(), 'json', $context);
        }
        if ($data->isInitialized('apRebootTimeout') && null !== $data->getApRebootTimeout()) {
            $dataArray['apRebootTimeout'] = $this->normalizer->normalize($data->getApRebootTimeout(), 'json', $context);
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('locationAdditionalInfo') && null !== $data->getLocationAdditionalInfo()) {
            $dataArray['locationAdditionalInfo'] = $data->getLocationAdditionalInfo();
        }
        if ($data->isInitialized('altitude') && null !== $data->getAltitude()) {
            $dataArray['altitude'] = $this->normalizer->normalize($data->getAltitude(), 'json', $context);
        }
        if ($data->isInitialized('latitude') && null !== $data->getLatitude()) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('longitude') && null !== $data->getLongitude()) {
            $dataArray['longitude'] = $data->getLongitude();
        }
        if ($data->isInitialized('vlanOverlappingEnabled') && null !== $data->getVlanOverlappingEnabled()) {
            $dataArray['vlanOverlappingEnabled'] = $data->getVlanOverlappingEnabled();
        }
        if ($data->isInitialized('nodeAffinityProfile') && null !== $data->getNodeAffinityProfile()) {
            $dataArray['nodeAffinityProfile'] = $this->normalizer->normalize($data->getNodeAffinityProfile(), 'json', $context);
        }
        if ($data->isInitialized('venueProfile') && null !== $data->getVenueProfile()) {
            $dataArray['venueProfile'] = $this->normalizer->normalize($data->getVenueProfile(), 'json', $context);
        }
        if ($data->isInitialized('channelEvaluationInterval') && null !== $data->getChannelEvaluationInterval()) {
            $dataArray['channelEvaluationInterval'] = $data->getChannelEvaluationInterval();
        }
        if ($data->isInitialized('apMgmtVlan') && null !== $data->getApMgmtVlan()) {
            $dataArray['apMgmtVlan'] = $this->normalizer->normalize($data->getApMgmtVlan(), 'json', $context);
        }
        if ($data->isInitialized('apLatencyInterval') && null !== $data->getApLatencyInterval()) {
            $dataArray['apLatencyInterval'] = $this->normalizer->normalize($data->getApLatencyInterval(), 'json', $context);
        }
        if ($data->isInitialized('ipsecProfile') && null !== $data->getIpsecProfile()) {
            $dataArray['ipsecProfile'] = $this->normalizer->normalize($data->getIpsecProfile(), 'json', $context);
        }
        if ($data->isInitialized('ipv6TrafficFilterEnabled') && null !== $data->getIpv6TrafficFilterEnabled()) {
            $dataArray['ipv6TrafficFilterEnabled'] = $data->getIpv6TrafficFilterEnabled();
        }
        if ($data->isInitialized('bonjourFencingPolicyEnabled') && null !== $data->getBonjourFencingPolicyEnabled()) {
            $dataArray['bonjourFencingPolicyEnabled'] = $data->getBonjourFencingPolicyEnabled();
        }
        if ($data->isInitialized('bonjourFencingPolicy') && null !== $data->getBonjourFencingPolicy()) {
            $dataArray['bonjourFencingPolicy'] = $this->normalizer->normalize($data->getBonjourFencingPolicy(), 'json', $context);
        }
        if ($data->isInitialized('dhcpSiteConfig') && null !== $data->getDhcpSiteConfig()) {
            $dataArray['dhcpSiteConfig'] = $this->normalizer->normalize($data->getDhcpSiteConfig(), 'json', $context);
        }
        if ($data->isInitialized('snmpAgent') && null !== $data->getSnmpAgent()) {
            $dataArray['snmpAgent'] = $this->normalizer->normalize($data->getSnmpAgent(), 'json', $context);
        }
        if ($data->isInitialized('recoverySsid') && null !== $data->getRecoverySsid()) {
            $dataArray['recoverySsid'] = $this->normalizer->normalize($data->getRecoverySsid(), 'json', $context);
        }
        if ($data->isInitialized('clusterRedundancyEnabled') && null !== $data->getClusterRedundancyEnabled()) {
            $dataArray['clusterRedundancyEnabled'] = $data->getClusterRedundancyEnabled();
        }
        if ($data->isInitialized('rogueApReportThreshold') && null !== $data->getRogueApReportThreshold()) {
            $dataArray['rogueApReportThreshold'] = $data->getRogueApReportThreshold();
        }
        if ($data->isInitialized('rogueApAggressivenessMode') && null !== $data->getRogueApAggressivenessMode()) {
            $dataArray['rogueApAggressivenessMode'] = $data->getRogueApAggressivenessMode();
        }
        if ($data->isInitialized('rogueApJammingDetection') && null !== $data->getRogueApJammingDetection()) {
            $dataArray['rogueApJammingDetection'] = $data->getRogueApJammingDetection();
        }
        if ($data->isInitialized('rogueApJammingThreshold') && null !== $data->getRogueApJammingThreshold()) {
            $dataArray['rogueApJammingThreshold'] = $data->getRogueApJammingThreshold();
        }
        if ($data->isInitialized('directedMulticastFromWiredClientEnabled') && null !== $data->getDirectedMulticastFromWiredClientEnabled()) {
            $dataArray['directedMulticastFromWiredClientEnabled'] = $data->getDirectedMulticastFromWiredClientEnabled();
        }
        if ($data->isInitialized('directedMulticastFromWirelessClientEnabled') && null !== $data->getDirectedMulticastFromWirelessClientEnabled()) {
            $dataArray['directedMulticastFromWirelessClientEnabled'] = $data->getDirectedMulticastFromWirelessClientEnabled();
        }
        if ($data->isInitialized('directedMulticastFromNetworkEnabled') && null !== $data->getDirectedMulticastFromNetworkEnabled()) {
            $dataArray['directedMulticastFromNetworkEnabled'] = $data->getDirectedMulticastFromNetworkEnabled();
        }
        if ($data->isInitialized('healthCheckSitesEnabled') && null !== $data->getHealthCheckSitesEnabled()) {
            $dataArray['healthCheckSitesEnabled'] = $data->getHealthCheckSitesEnabled();
        }
        if ($data->isInitialized('healthCheckSites') && null !== $data->getHealthCheckSites()) {
            $values = [];
            foreach ($data->getHealthCheckSites() as $value) {
                $values[] = $value;
            }
            $dataArray['healthCheckSites'] = $values;
        }
        if ($data->isInitialized('ruckusGreTunnelProfile') && null !== $data->getRuckusGreTunnelProfile()) {
            $dataArray['ruckusGreTunnelProfile'] = $this->normalizer->normalize($data->getRuckusGreTunnelProfile(), 'json', $context);
        }
        if ($data->isInitialized('softGreTunnelProflies') && null !== $data->getSoftGreTunnelProflies()) {
            $values_1 = [];
            foreach ($data->getSoftGreTunnelProflies() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['softGreTunnelProflies'] = $values_1;
        }
        if ($data->isInitialized('ipsecProfiles') && null !== $data->getIpsecProfiles()) {
            $values_2 = [];
            foreach ($data->getIpsecProfiles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['ipsecProfiles'] = $values_2;
        }
        if ($data->isInitialized('ipsecTunnelMode') && null !== $data->getIpsecTunnelMode()) {
            $dataArray['ipsecTunnelMode'] = $data->getIpsecTunnelMode();
        }
        if ($data->isInitialized('rksGreForwardBroadcast') && null !== $data->getRksGreForwardBroadcast()) {
            $dataArray['rksGreForwardBroadcast'] = $data->getRksGreForwardBroadcast();
        }
        if ($data->isInitialized('sshTunnelEncryption') && null !== $data->getSshTunnelEncryption()) {
            $dataArray['sshTunnelEncryption'] = $data->getSshTunnelEncryption();
        }
        if ($data->isInitialized('lteBandLockChannels') && null !== $data->getLteBandLockChannels()) {
            $values_3 = [];
            foreach ($data->getLteBandLockChannels() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['lteBandLockChannels'] = $values_3;
        }
        if ($data->isInitialized('paloAltoFirewallProfileId') && null !== $data->getPaloAltoFirewallProfileId()) {
            $dataArray['paloAltoFirewallProfileId'] = $data->getPaloAltoFirewallProfileId();
        }
        if ($data->isInitialized('apHccdEnabled') && null !== $data->getApHccdEnabled()) {
            $dataArray['apHccdEnabled'] = $data->getApHccdEnabled();
        }
        if ($data->isInitialized('apHccdPersist') && null !== $data->getApHccdPersist()) {
            $dataArray['apHccdPersist'] = $data->getApHccdPersist();
        }
        if ($data->isInitialized('myRuckusConfig') && null !== $data->getMyRuckusConfig()) {
            $dataArray['myRuckusConfig'] = $this->normalizer->normalize($data->getMyRuckusConfig(), 'json', $context);
        }
        if ($data->isInitialized('apHttp2CertChkEnable') && null !== $data->getApHttp2CertChkEnable()) {
            $dataArray['apHttp2CertChkEnable'] = $data->getApHttp2CertChkEnable();
        }
        if ($data->isInitialized('bssColoringEnable') && null !== $data->getBssColoringEnable()) {
            $dataArray['bssColoringEnable'] = $data->getBssColoringEnable();
        }
        if ($data->isInitialized('radioConfig') && null !== $data->getRadioConfig()) {
            $dataArray['radioConfig'] = $this->normalizer->normalize($data->getRadioConfig(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCreateZone::class => false];
    }
}