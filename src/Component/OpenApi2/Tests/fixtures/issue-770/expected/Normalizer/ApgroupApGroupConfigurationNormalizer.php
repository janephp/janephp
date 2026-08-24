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
class ApgroupApGroupConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupConfiguration();
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
        if (\array_key_exists('directedMulticastFromWiredClientEnabled', $data) && \is_int($data['directedMulticastFromWiredClientEnabled'])) {
            $data['directedMulticastFromWiredClientEnabled'] = (bool) $data['directedMulticastFromWiredClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromWirelessClientEnabled', $data) && \is_int($data['directedMulticastFromWirelessClientEnabled'])) {
            $data['directedMulticastFromWirelessClientEnabled'] = (bool) $data['directedMulticastFromWirelessClientEnabled'];
        }
        if (\array_key_exists('directedMulticastFromNetworkEnabled', $data) && \is_int($data['directedMulticastFromNetworkEnabled'])) {
            $data['directedMulticastFromNetworkEnabled'] = (bool) $data['directedMulticastFromNetworkEnabled'];
        }
        if (\array_key_exists('monitoringEnabled', $data) && \is_int($data['monitoringEnabled'])) {
            $data['monitoringEnabled'] = (bool) $data['monitoringEnabled'];
        }
        if (\array_key_exists('paloAltoFirewallProfileOverrided', $data) && \is_int($data['paloAltoFirewallProfileOverrided'])) {
            $data['paloAltoFirewallProfileOverrided'] = (bool) $data['paloAltoFirewallProfileOverrided'];
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data) && \is_int($data['rksGreForwardBroadcast'])) {
            $data['rksGreForwardBroadcast'] = (bool) $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
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
        if (\array_key_exists('locationBasedService', $data)) {
            $object->setLocationBasedService($this->denormalizer->denormalize($data['locationBasedService'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('clientAdmissionControl24', $data)) {
            $object->setClientAdmissionControl24($this->denormalizer->denormalize($data['clientAdmissionControl24'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class, 'json', $context));
        }
        if (\array_key_exists('clientAdmissionControl50', $data)) {
            $object->setClientAdmissionControl50($this->denormalizer->denormalize($data['clientAdmissionControl50'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class, 'json', $context));
        }
        if (\array_key_exists('snmpAgent', $data)) {
            $object->setSnmpAgent($this->denormalizer->denormalize($data['snmpAgent'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneApSnmpOptions::class, 'json', $context));
        }
        if (\array_key_exists('venueProfile', $data)) {
            $object->setVenueProfile($this->denormalizer->denormalize($data['venueProfile'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        if (\array_key_exists('members', $data)) {
            $values = [];
            foreach ($data['members'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupMember::class, 'json', $context);
            }
            $object->setMembers($values);
        }
        if (\array_key_exists('channelEvaluationInterval', $data)) {
            $object->setChannelEvaluationInterval($data['channelEvaluationInterval']);
        }
        if (\array_key_exists('apMgmtVlan', $data)) {
            $object->setApMgmtVlan($this->denormalizer->denormalize($data['apMgmtVlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApManagementVlan::class, 'json', $context));
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->setAwsVenue($data['awsVenue']);
        }
        if (\array_key_exists('recoverySsid', $data)) {
            $object->setRecoverySsid($this->denormalizer->denormalize($data['recoverySsid'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonRecoverySsid::class, 'json', $context));
        }
        if (\array_key_exists('rogueApReportThreshold', $data)) {
            $object->setRogueApReportThreshold($data['rogueApReportThreshold']);
        }
        if (\array_key_exists('rogueApAggressivenessMode', $data)) {
            $object->setRogueApAggressivenessMode($data['rogueApAggressivenessMode']);
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
        if (\array_key_exists('lteBandLockChannels', $data)) {
            $values_1 = [];
            foreach ($data['lteBandLockChannels'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->setLteBandLockChannels($values_1);
        }
        if (\array_key_exists('monitoringEnabled', $data)) {
            $object->setMonitoringEnabled($data['monitoringEnabled']);
        }
        if (\array_key_exists('apGroupRoguePolicy', $data)) {
            $object->setApGroupRoguePolicy($data['apGroupRoguePolicy']);
        }
        if (\array_key_exists('rogueScanFreq', $data)) {
            $object->setRogueScanFreq($data['rogueScanFreq']);
        }
        if (\array_key_exists('paloAltoFirewallProfileOverrided', $data)) {
            $object->setPaloAltoFirewallProfileOverrided($data['paloAltoFirewallProfileOverrided']);
        }
        if (\array_key_exists('paloAltoFirewallProfileId', $data)) {
            $object->setPaloAltoFirewallProfileId($data['paloAltoFirewallProfileId']);
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->setRksGreForwardBroadcast($data['rksGreForwardBroadcast']);
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->setBssColoringEnable($data['bssColoringEnable']);
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->setRadioConfig($this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigResponse::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('locationAdditionalInfo') && null !== $data->getLocationAdditionalInfo()) {
            $dataArray['locationAdditionalInfo'] = $data->getLocationAdditionalInfo();
        }
        if ($data->isInitialized('altitude') && null !== $data->getAltitude()) {
            $dataArray['altitude'] = $data->getAltitude() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getAltitude(), 'json', $context));
        }
        if ($data->isInitialized('latitude') && null !== $data->getLatitude()) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('longitude') && null !== $data->getLongitude()) {
            $dataArray['longitude'] = $data->getLongitude();
        }
        if ($data->isInitialized('locationBasedService') && null !== $data->getLocationBasedService()) {
            $dataArray['locationBasedService'] = $data->getLocationBasedService() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getLocationBasedService(), 'json', $context));
        }
        if ($data->isInitialized('clientAdmissionControl24') && null !== $data->getClientAdmissionControl24()) {
            $dataArray['clientAdmissionControl24'] = $data->getClientAdmissionControl24() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getClientAdmissionControl24(), 'json', $context));
        }
        if ($data->isInitialized('clientAdmissionControl50') && null !== $data->getClientAdmissionControl50()) {
            $dataArray['clientAdmissionControl50'] = $data->getClientAdmissionControl50() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getClientAdmissionControl50(), 'json', $context));
        }
        if ($data->isInitialized('snmpAgent') && null !== $data->getSnmpAgent()) {
            $dataArray['snmpAgent'] = $data->getSnmpAgent() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getSnmpAgent(), 'json', $context));
        }
        if ($data->isInitialized('venueProfile') && null !== $data->getVenueProfile()) {
            $dataArray['venueProfile'] = $data->getVenueProfile() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getVenueProfile(), 'json', $context));
        }
        if ($data->isInitialized('members') && null !== $data->getMembers()) {
            $values = [];
            foreach ($data->getMembers() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['members'] = $values;
        }
        if ($data->isInitialized('channelEvaluationInterval') && null !== $data->getChannelEvaluationInterval()) {
            $dataArray['channelEvaluationInterval'] = $data->getChannelEvaluationInterval();
        }
        if ($data->isInitialized('apMgmtVlan') && null !== $data->getApMgmtVlan()) {
            $dataArray['apMgmtVlan'] = $data->getApMgmtVlan() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getApMgmtVlan(), 'json', $context));
        }
        if ($data->isInitialized('awsVenue') && null !== $data->getAwsVenue()) {
            $dataArray['awsVenue'] = $data->getAwsVenue();
        }
        if ($data->isInitialized('recoverySsid') && null !== $data->getRecoverySsid()) {
            $dataArray['recoverySsid'] = $data->getRecoverySsid() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getRecoverySsid(), 'json', $context));
        }
        if ($data->isInitialized('rogueApReportThreshold') && null !== $data->getRogueApReportThreshold()) {
            $dataArray['rogueApReportThreshold'] = $data->getRogueApReportThreshold();
        }
        if ($data->isInitialized('rogueApAggressivenessMode') && null !== $data->getRogueApAggressivenessMode()) {
            $dataArray['rogueApAggressivenessMode'] = $data->getRogueApAggressivenessMode();
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
        if ($data->isInitialized('lteBandLockChannels') && null !== $data->getLteBandLockChannels()) {
            $values_1 = [];
            foreach ($data->getLteBandLockChannels() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['lteBandLockChannels'] = $values_1;
        }
        if ($data->isInitialized('monitoringEnabled') && null !== $data->getMonitoringEnabled()) {
            $dataArray['monitoringEnabled'] = $data->getMonitoringEnabled();
        }
        if ($data->isInitialized('apGroupRoguePolicy') && null !== $data->getApGroupRoguePolicy()) {
            $dataArray['apGroupRoguePolicy'] = $data->getApGroupRoguePolicy();
        }
        if ($data->isInitialized('rogueScanFreq') && null !== $data->getRogueScanFreq()) {
            $dataArray['rogueScanFreq'] = $data->getRogueScanFreq();
        }
        if ($data->isInitialized('paloAltoFirewallProfileOverrided') && null !== $data->getPaloAltoFirewallProfileOverrided()) {
            $dataArray['paloAltoFirewallProfileOverrided'] = $data->getPaloAltoFirewallProfileOverrided();
        }
        if ($data->isInitialized('paloAltoFirewallProfileId') && null !== $data->getPaloAltoFirewallProfileId()) {
            $dataArray['paloAltoFirewallProfileId'] = $data->getPaloAltoFirewallProfileId();
        }
        if ($data->isInitialized('rksGreForwardBroadcast') && null !== $data->getRksGreForwardBroadcast()) {
            $dataArray['rksGreForwardBroadcast'] = $data->getRksGreForwardBroadcast();
        }
        if ($data->isInitialized('bssColoringEnable') && null !== $data->getBssColoringEnable()) {
            $dataArray['bssColoringEnable'] = $data->getBssColoringEnable();
        }
        if ($data->isInitialized('radioConfig') && null !== $data->getRadioConfig()) {
            $dataArray['radioConfig'] = $data->getRadioConfig() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getRadioConfig(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApgroupApGroupConfiguration::class => false];
    }
}