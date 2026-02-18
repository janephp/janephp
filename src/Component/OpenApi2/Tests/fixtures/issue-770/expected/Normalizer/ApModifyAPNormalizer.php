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
class ApModifyAPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyAP::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyAP::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyAP();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (double) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (double) $data['longitude'];
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
        if (\array_key_exists('rksGreForwardBroadcast', $data) && \is_int($data['rksGreForwardBroadcast'])) {
            $data['rksGreForwardBroadcast'] = (bool) $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('testSpeedEnabled', $data) && \is_int($data['testSpeedEnabled'])) {
            $data['testSpeedEnabled'] = (bool) $data['testSpeedEnabled'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('apGroupId', $data)) {
            $object->setApGroupId($data['apGroupId']);
        }
        if (\array_key_exists('serial', $data)) {
            $object->setSerial($data['serial']);
        }
        if (\array_key_exists('model', $data)) {
            $object->setModel($data['model']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('gpsSource', $data)) {
            $object->setGpsSource($data['gpsSource']);
        }
        if (\array_key_exists('latitude', $data)) {
            $object->setLatitude($data['latitude']);
        }
        if (\array_key_exists('longitude', $data)) {
            $object->setLongitude($data['longitude']);
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->setAdministrativeState($data['administrativeState']);
        }
        if (\array_key_exists('provisionChecklist', $data)) {
            $object->setProvisionChecklist($data['provisionChecklist']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($this->denormalizer->denormalize($data['login'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApLogin::class, 'json', $context));
        }
        if (\array_key_exists('syslog', $data)) {
            $object->setSyslog($this->denormalizer->denormalize($data['syslog'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApSyslog::class, 'json', $context));
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->setRadioConfig($this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\RadioRadioConfigAp::class, 'json', $context));
        }
        if (\array_key_exists('network', $data)) {
            $object->setNetwork($this->denormalizer->denormalize($data['network'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetwork::class, 'json', $context));
        }
        if (\array_key_exists('networkIpv6', $data)) {
            $object->setNetworkIpv6($this->denormalizer->denormalize($data['networkIpv6'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApNetworkIpv6::class, 'json', $context));
        }
        if (\array_key_exists('smartMonitor', $data)) {
            $object->setSmartMonitor($this->denormalizer->denormalize($data['smartMonitor'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideSmartMonitor::class, 'json', $context));
        }
        if (\array_key_exists('bonjourGateway', $data)) {
            $object->setBonjourGateway($this->denormalizer->denormalize($data['bonjourGateway'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
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
        if (\array_key_exists('channelEvaluationInterval', $data)) {
            $object->setChannelEvaluationInterval($data['channelEvaluationInterval']);
        }
        if (\array_key_exists('apMgmtVlan', $data)) {
            $object->setApMgmtVlan($this->denormalizer->denormalize($data['apMgmtVlan'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonApManagementVlan::class, 'json', $context));
        }
        if (\array_key_exists('meshOptions', $data)) {
            $object->setMeshOptions($this->denormalizer->denormalize($data['meshOptions'], \Jane\Component\OpenApi3\Tests\Expected\Model\ApMesh::class, 'json', $context));
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
            $values = [];
            foreach ($data['lteBandLockChannels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->setLteBandLockChannels($values);
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->setAwsVenue($data['awsVenue']);
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->setRksGreForwardBroadcast($data['rksGreForwardBroadcast']);
        }
        if (\array_key_exists('testSpeedEnabled', $data)) {
            $object->setTestSpeedEnabled($data['testSpeedEnabled']);
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->setBssColoringEnable($data['bssColoringEnable']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('apGroupId') && null !== $data->getApGroupId()) {
            $dataArray['apGroupId'] = $data->getApGroupId();
        }
        if ($data->isInitialized('serial') && null !== $data->getSerial()) {
            $dataArray['serial'] = $data->getSerial();
        }
        if ($data->isInitialized('model') && null !== $data->getModel()) {
            $dataArray['model'] = $data->getModel();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('gpsSource') && null !== $data->getGpsSource()) {
            $dataArray['gpsSource'] = $data->getGpsSource();
        }
        if ($data->isInitialized('latitude') && null !== $data->getLatitude()) {
            $dataArray['latitude'] = $data->getLatitude();
        }
        if ($data->isInitialized('longitude') && null !== $data->getLongitude()) {
            $dataArray['longitude'] = $data->getLongitude();
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
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('administrativeState') && null !== $data->getAdministrativeState()) {
            $dataArray['administrativeState'] = $data->getAdministrativeState();
        }
        if ($data->isInitialized('provisionChecklist') && null !== $data->getProvisionChecklist()) {
            $dataArray['provisionChecklist'] = $data->getProvisionChecklist();
        }
        if ($data->isInitialized('login') && null !== $data->getLogin()) {
            $dataArray['login'] = $this->normalizer->normalize($data->getLogin(), 'json', $context);
        }
        if ($data->isInitialized('syslog') && null !== $data->getSyslog()) {
            $dataArray['syslog'] = $this->normalizer->normalize($data->getSyslog(), 'json', $context);
        }
        if ($data->isInitialized('radioConfig') && null !== $data->getRadioConfig()) {
            $dataArray['radioConfig'] = $this->normalizer->normalize($data->getRadioConfig(), 'json', $context);
        }
        if ($data->isInitialized('network') && null !== $data->getNetwork()) {
            $dataArray['network'] = $this->normalizer->normalize($data->getNetwork(), 'json', $context);
        }
        if ($data->isInitialized('networkIpv6') && null !== $data->getNetworkIpv6()) {
            $dataArray['networkIpv6'] = $this->normalizer->normalize($data->getNetworkIpv6(), 'json', $context);
        }
        if ($data->isInitialized('smartMonitor') && null !== $data->getSmartMonitor()) {
            $dataArray['smartMonitor'] = $this->normalizer->normalize($data->getSmartMonitor(), 'json', $context);
        }
        if ($data->isInitialized('bonjourGateway') && null !== $data->getBonjourGateway()) {
            $dataArray['bonjourGateway'] = $this->normalizer->normalize($data->getBonjourGateway(), 'json', $context);
        }
        if ($data->isInitialized('clientAdmissionControl24') && null !== $data->getClientAdmissionControl24()) {
            $dataArray['clientAdmissionControl24'] = $this->normalizer->normalize($data->getClientAdmissionControl24(), 'json', $context);
        }
        if ($data->isInitialized('clientAdmissionControl50') && null !== $data->getClientAdmissionControl50()) {
            $dataArray['clientAdmissionControl50'] = $this->normalizer->normalize($data->getClientAdmissionControl50(), 'json', $context);
        }
        if ($data->isInitialized('snmpAgent') && null !== $data->getSnmpAgent()) {
            $dataArray['snmpAgent'] = $this->normalizer->normalize($data->getSnmpAgent(), 'json', $context);
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
        if ($data->isInitialized('meshOptions') && null !== $data->getMeshOptions()) {
            $dataArray['meshOptions'] = $this->normalizer->normalize($data->getMeshOptions(), 'json', $context);
        }
        if ($data->isInitialized('recoverySsid') && null !== $data->getRecoverySsid()) {
            $dataArray['recoverySsid'] = $this->normalizer->normalize($data->getRecoverySsid(), 'json', $context);
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
            $values = [];
            foreach ($data->getLteBandLockChannels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['lteBandLockChannels'] = $values;
        }
        if ($data->isInitialized('awsVenue') && null !== $data->getAwsVenue()) {
            $dataArray['awsVenue'] = $data->getAwsVenue();
        }
        if ($data->isInitialized('rksGreForwardBroadcast') && null !== $data->getRksGreForwardBroadcast()) {
            $dataArray['rksGreForwardBroadcast'] = $data->getRksGreForwardBroadcast();
        }
        if ($data->isInitialized('testSpeedEnabled') && null !== $data->getTestSpeedEnabled()) {
            $dataArray['testSpeedEnabled'] = $data->getTestSpeedEnabled();
        }
        if ($data->isInitialized('bssColoringEnable') && null !== $data->getBssColoringEnable()) {
            $dataArray['bssColoringEnable'] = $data->getBssColoringEnable();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApModifyAP::class => false];
    }
}