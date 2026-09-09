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
class ApModifyAPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyAP::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyAP::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyAP();
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
        if (\array_key_exists('rksGreForwardBroadcast', $data) && \is_int($data['rksGreForwardBroadcast'])) {
            $data['rksGreForwardBroadcast'] = (bool) $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('testSpeedEnabled', $data) && \is_int($data['testSpeedEnabled'])) {
            $data['testSpeedEnabled'] = (bool) $data['testSpeedEnabled'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('apGroupId', $data)) {
            $object->apGroupId = $data['apGroupId'];
        }
        if (\array_key_exists('serial', $data)) {
            $object->serial = $data['serial'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('gpsSource', $data)) {
            $object->gpsSource = $data['gpsSource'];
        }
        if (\array_key_exists('latitude', $data)) {
            $object->latitude = $data['latitude'];
        }
        if (\array_key_exists('longitude', $data)) {
            $object->longitude = $data['longitude'];
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
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->administrativeState = $data['administrativeState'];
        }
        if (\array_key_exists('provisionChecklist', $data)) {
            $object->provisionChecklist = $data['provisionChecklist'];
        }
        if (\array_key_exists('login', $data)) {
            $object->login = $this->denormalizer->denormalize($data['login'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApLogin::class, 'json', $context);
        }
        if (\array_key_exists('syslog', $data)) {
            $object->syslog = $this->denormalizer->denormalize($data['syslog'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslog::class, 'json', $context);
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->radioConfig = $this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigAp::class, 'json', $context);
        }
        if (\array_key_exists('network', $data)) {
            $object->network = $this->denormalizer->denormalize($data['network'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNetwork::class, 'json', $context);
        }
        if (\array_key_exists('networkIpv6', $data)) {
            $object->networkIpv6 = $this->denormalizer->denormalize($data['networkIpv6'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApNetworkIpv6::class, 'json', $context);
        }
        if (\array_key_exists('smartMonitor', $data)) {
            $object->smartMonitor = $this->denormalizer->denormalize($data['smartMonitor'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideSmartMonitor::class, 'json', $context);
        }
        if (\array_key_exists('bonjourGateway', $data)) {
            $object->bonjourGateway = $this->denormalizer->denormalize($data['bonjourGateway'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        if (\array_key_exists('clientAdmissionControl24', $data)) {
            $object->clientAdmissionControl24 = $this->denormalizer->denormalize($data['clientAdmissionControl24'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideClientAdmissionControl::class, 'json', $context);
        }
        if (\array_key_exists('clientAdmissionControl50', $data)) {
            $object->clientAdmissionControl50 = $this->denormalizer->denormalize($data['clientAdmissionControl50'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideClientAdmissionControl::class, 'json', $context);
        }
        if (\array_key_exists('snmpAgent', $data)) {
            $object->snmpAgent = $this->denormalizer->denormalize($data['snmpAgent'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApSnmpOptions::class, 'json', $context);
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
        if (\array_key_exists('meshOptions', $data)) {
            $object->meshOptions = $this->denormalizer->denormalize($data['meshOptions'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApMesh::class, 'json', $context);
        }
        if (\array_key_exists('recoverySsid', $data)) {
            $object->recoverySsid = $this->denormalizer->denormalize($data['recoverySsid'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRecoverySsid::class, 'json', $context);
        }
        if (\array_key_exists('rogueApReportThreshold', $data)) {
            $object->rogueApReportThreshold = $data['rogueApReportThreshold'];
        }
        if (\array_key_exists('rogueApAggressivenessMode', $data)) {
            $object->rogueApAggressivenessMode = $data['rogueApAggressivenessMode'];
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
        if (\array_key_exists('lteBandLockChannels', $data)) {
            $values = [];
            foreach ($data['lteBandLockChannels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->lteBandLockChannels = $values;
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->awsVenue = $data['awsVenue'];
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->rksGreForwardBroadcast = $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('testSpeedEnabled', $data)) {
            $object->testSpeedEnabled = $data['testSpeedEnabled'];
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->bssColoringEnable = $data['bssColoringEnable'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId;
        }
        if (array_key_exists('apGroupId', get_object_vars($data)) && null !== ($data->apGroupId ?? null)) {
            $dataArray['apGroupId'] = $data->apGroupId;
        }
        if (array_key_exists('serial', get_object_vars($data)) && null !== ($data->serial ?? null)) {
            $dataArray['serial'] = $data->serial;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('gpsSource', get_object_vars($data)) && null !== ($data->gpsSource ?? null)) {
            $dataArray['gpsSource'] = $data->gpsSource;
        }
        if (array_key_exists('latitude', get_object_vars($data)) && null !== ($data->latitude ?? null)) {
            $dataArray['latitude'] = $data->latitude;
        }
        if (array_key_exists('longitude', get_object_vars($data)) && null !== ($data->longitude ?? null)) {
            $dataArray['longitude'] = $data->longitude;
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        if (array_key_exists('locationAdditionalInfo', get_object_vars($data)) && null !== ($data->locationAdditionalInfo ?? null)) {
            $dataArray['locationAdditionalInfo'] = $data->locationAdditionalInfo;
        }
        if (array_key_exists('altitude', get_object_vars($data)) && null !== ($data->altitude ?? null)) {
            $normalized = $this->normalizer->normalize($data->altitude, 'json', $context);
            $dataArray['altitude'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('administrativeState', get_object_vars($data)) && null !== ($data->administrativeState ?? null)) {
            $dataArray['administrativeState'] = $data->administrativeState;
        }
        if (array_key_exists('provisionChecklist', get_object_vars($data)) && null !== ($data->provisionChecklist ?? null)) {
            $dataArray['provisionChecklist'] = $data->provisionChecklist;
        }
        if (array_key_exists('login', get_object_vars($data)) && null !== ($data->login ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->login, 'json', $context);
            $dataArray['login'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('syslog', get_object_vars($data)) && null !== ($data->syslog ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->syslog, 'json', $context);
            $dataArray['syslog'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('radioConfig', get_object_vars($data)) && null !== ($data->radioConfig ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->radioConfig, 'json', $context);
            $dataArray['radioConfig'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('network', get_object_vars($data)) && null !== ($data->network ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->network, 'json', $context);
            $dataArray['network'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('networkIpv6', get_object_vars($data)) && null !== ($data->networkIpv6 ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->networkIpv6, 'json', $context);
            $dataArray['networkIpv6'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('smartMonitor', get_object_vars($data)) && null !== ($data->smartMonitor ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->smartMonitor, 'json', $context);
            $dataArray['smartMonitor'] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('bonjourGateway', get_object_vars($data)) && null !== ($data->bonjourGateway ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->bonjourGateway, 'json', $context);
            $dataArray['bonjourGateway'] = \is_iterable($normalized_7) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('clientAdmissionControl24', get_object_vars($data)) && null !== ($data->clientAdmissionControl24 ?? null)) {
            $normalized_8 = $this->normalizer->normalize($data->clientAdmissionControl24, 'json', $context);
            $dataArray['clientAdmissionControl24'] = \is_iterable($normalized_8) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        if (array_key_exists('clientAdmissionControl50', get_object_vars($data)) && null !== ($data->clientAdmissionControl50 ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->clientAdmissionControl50, 'json', $context);
            $dataArray['clientAdmissionControl50'] = \is_iterable($normalized_9) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (array_key_exists('snmpAgent', get_object_vars($data)) && null !== ($data->snmpAgent ?? null)) {
            $normalized_10 = $this->normalizer->normalize($data->snmpAgent, 'json', $context);
            $dataArray['snmpAgent'] = \is_iterable($normalized_10) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_10) : $normalized_10;
        }
        if (array_key_exists('venueProfile', get_object_vars($data)) && null !== ($data->venueProfile ?? null)) {
            $normalized_11 = $this->normalizer->normalize($data->venueProfile, 'json', $context);
            $dataArray['venueProfile'] = \is_iterable($normalized_11) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        if (array_key_exists('channelEvaluationInterval', get_object_vars($data)) && null !== ($data->channelEvaluationInterval ?? null)) {
            $dataArray['channelEvaluationInterval'] = $data->channelEvaluationInterval;
        }
        if (array_key_exists('apMgmtVlan', get_object_vars($data)) && null !== ($data->apMgmtVlan ?? null)) {
            $normalized_12 = $this->normalizer->normalize($data->apMgmtVlan, 'json', $context);
            $dataArray['apMgmtVlan'] = \is_iterable($normalized_12) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_12) : $normalized_12;
        }
        if (array_key_exists('meshOptions', get_object_vars($data)) && null !== ($data->meshOptions ?? null)) {
            $normalized_13 = $this->normalizer->normalize($data->meshOptions, 'json', $context);
            $dataArray['meshOptions'] = \is_iterable($normalized_13) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_13) : $normalized_13;
        }
        if (array_key_exists('recoverySsid', get_object_vars($data)) && null !== ($data->recoverySsid ?? null)) {
            $normalized_14 = $this->normalizer->normalize($data->recoverySsid, 'json', $context);
            $dataArray['recoverySsid'] = \is_iterable($normalized_14) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_14) : $normalized_14;
        }
        if (array_key_exists('rogueApReportThreshold', get_object_vars($data)) && null !== ($data->rogueApReportThreshold ?? null)) {
            $dataArray['rogueApReportThreshold'] = $data->rogueApReportThreshold;
        }
        if (array_key_exists('rogueApAggressivenessMode', get_object_vars($data)) && null !== ($data->rogueApAggressivenessMode ?? null)) {
            $dataArray['rogueApAggressivenessMode'] = $data->rogueApAggressivenessMode;
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
        if (array_key_exists('lteBandLockChannels', get_object_vars($data)) && null !== ($data->lteBandLockChannels ?? null)) {
            $values = [];
            foreach ($data->lteBandLockChannels as $value) {
                $normalized_15 = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized_15) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_15) : $normalized_15;
            }
            $dataArray['lteBandLockChannels'] = $values;
        }
        if (array_key_exists('awsVenue', get_object_vars($data)) && null !== ($data->awsVenue ?? null)) {
            $dataArray['awsVenue'] = $data->awsVenue;
        }
        if (array_key_exists('rksGreForwardBroadcast', get_object_vars($data)) && null !== ($data->rksGreForwardBroadcast ?? null)) {
            $dataArray['rksGreForwardBroadcast'] = $data->rksGreForwardBroadcast;
        }
        if (array_key_exists('testSpeedEnabled', get_object_vars($data)) && null !== ($data->testSpeedEnabled ?? null)) {
            $dataArray['testSpeedEnabled'] = $data->testSpeedEnabled;
        }
        if (array_key_exists('bssColoringEnable', get_object_vars($data)) && null !== ($data->bssColoringEnable ?? null)) {
            $dataArray['bssColoringEnable'] = $data->bssColoringEnable;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApModifyAP::class => false];
    }
}