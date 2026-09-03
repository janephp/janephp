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
class ApApConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApConfiguration();
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
        if (\array_key_exists('mac', $data)) {
            $object->mac = $data['mac'];
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
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
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
        if (\array_key_exists('provisionChecklist', $data)) {
            $object->provisionChecklist = $data['provisionChecklist'];
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->administrativeState = $data['administrativeState'];
        }
        if (\array_key_exists('login', $data)) {
            $object->login = $this->denormalizer->denormalize($data['login'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApLogin::class, 'json', $context);
        }
        if (\array_key_exists('syslog', $data)) {
            $object->syslog = $this->denormalizer->denormalize($data['syslog'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApSyslog::class, 'json', $context);
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->radioConfig = $this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponseAp::class, 'json', $context);
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
        if (\array_key_exists('specific', $data)) {
            $object->specific = $this->denormalizer->denormalize($data['specific'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelApModel::class, 'json', $context);
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
        if (\array_key_exists('swapInMac', $data)) {
            $object->swapInMac = $data['swapInMac'];
        }
        if (\array_key_exists('swapOutMac', $data)) {
            $object->swapOutMac = $data['swapOutMac'];
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->bssColoringEnable = $data['bssColoringEnable'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('mac', get_object_vars($data)) && null !== ($data->mac ?? null)) {
            $dataArray['mac'] = $data->mac ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('apGroupId', get_object_vars($data)) && null !== ($data->apGroupId ?? null)) {
            $dataArray['apGroupId'] = $data->apGroupId ?? null;
        }
        if (array_key_exists('serial', get_object_vars($data)) && null !== ($data->serial ?? null)) {
            $dataArray['serial'] = $data->serial ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('gpsSource', get_object_vars($data)) && null !== ($data->gpsSource ?? null)) {
            $dataArray['gpsSource'] = $data->gpsSource ?? null;
        }
        if (array_key_exists('latitude', get_object_vars($data)) && null !== ($data->latitude ?? null)) {
            $dataArray['latitude'] = $data->latitude ?? null;
        }
        if (array_key_exists('longitude', get_object_vars($data)) && null !== ($data->longitude ?? null)) {
            $dataArray['longitude'] = $data->longitude ?? null;
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
        if (array_key_exists('provisionChecklist', get_object_vars($data)) && null !== ($data->provisionChecklist ?? null)) {
            $dataArray['provisionChecklist'] = $data->provisionChecklist ?? null;
        }
        if (array_key_exists('administrativeState', get_object_vars($data)) && null !== ($data->administrativeState ?? null)) {
            $dataArray['administrativeState'] = $data->administrativeState ?? null;
        }
        if (array_key_exists('login', get_object_vars($data)) && null !== ($data->login ?? null)) {
            $dataArray['login'] = ($data->login ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->login ?? null, 'json', $context));
        }
        if (array_key_exists('syslog', get_object_vars($data)) && null !== ($data->syslog ?? null)) {
            $dataArray['syslog'] = ($data->syslog ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->syslog ?? null, 'json', $context));
        }
        if (array_key_exists('radioConfig', get_object_vars($data)) && null !== ($data->radioConfig ?? null)) {
            $dataArray['radioConfig'] = ($data->radioConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->radioConfig ?? null, 'json', $context));
        }
        if (array_key_exists('network', get_object_vars($data)) && null !== ($data->network ?? null)) {
            $dataArray['network'] = ($data->network ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->network ?? null, 'json', $context));
        }
        if (array_key_exists('networkIpv6', get_object_vars($data)) && null !== ($data->networkIpv6 ?? null)) {
            $dataArray['networkIpv6'] = ($data->networkIpv6 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->networkIpv6 ?? null, 'json', $context));
        }
        if (array_key_exists('smartMonitor', get_object_vars($data)) && null !== ($data->smartMonitor ?? null)) {
            $dataArray['smartMonitor'] = ($data->smartMonitor ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->smartMonitor ?? null, 'json', $context));
        }
        if (array_key_exists('bonjourGateway', get_object_vars($data)) && null !== ($data->bonjourGateway ?? null)) {
            $dataArray['bonjourGateway'] = ($data->bonjourGateway ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->bonjourGateway ?? null, 'json', $context));
        }
        if (array_key_exists('clientAdmissionControl24', get_object_vars($data)) && null !== ($data->clientAdmissionControl24 ?? null)) {
            $dataArray['clientAdmissionControl24'] = ($data->clientAdmissionControl24 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientAdmissionControl24 ?? null, 'json', $context));
        }
        if (array_key_exists('clientAdmissionControl50', get_object_vars($data)) && null !== ($data->clientAdmissionControl50 ?? null)) {
            $dataArray['clientAdmissionControl50'] = ($data->clientAdmissionControl50 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->clientAdmissionControl50 ?? null, 'json', $context));
        }
        if (array_key_exists('snmpAgent', get_object_vars($data)) && null !== ($data->snmpAgent ?? null)) {
            $dataArray['snmpAgent'] = ($data->snmpAgent ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->snmpAgent ?? null, 'json', $context));
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
        if (array_key_exists('specific', get_object_vars($data)) && null !== ($data->specific ?? null)) {
            $dataArray['specific'] = ($data->specific ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->specific ?? null, 'json', $context));
        }
        if (array_key_exists('meshOptions', get_object_vars($data)) && null !== ($data->meshOptions ?? null)) {
            $dataArray['meshOptions'] = ($data->meshOptions ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->meshOptions ?? null, 'json', $context));
        }
        if (array_key_exists('recoverySsid', get_object_vars($data)) && null !== ($data->recoverySsid ?? null)) {
            $dataArray['recoverySsid'] = ($data->recoverySsid ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->recoverySsid ?? null, 'json', $context));
        }
        if (array_key_exists('rogueApReportThreshold', get_object_vars($data)) && null !== ($data->rogueApReportThreshold ?? null)) {
            $dataArray['rogueApReportThreshold'] = $data->rogueApReportThreshold ?? null;
        }
        if (array_key_exists('rogueApAggressivenessMode', get_object_vars($data)) && null !== ($data->rogueApAggressivenessMode ?? null)) {
            $dataArray['rogueApAggressivenessMode'] = $data->rogueApAggressivenessMode ?? null;
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
        if (array_key_exists('lteBandLockChannels', get_object_vars($data)) && null !== ($data->lteBandLockChannels ?? null)) {
            $values = [];
            foreach ($data->lteBandLockChannels ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['lteBandLockChannels'] = $values;
        }
        if (array_key_exists('awsVenue', get_object_vars($data)) && null !== ($data->awsVenue ?? null)) {
            $dataArray['awsVenue'] = $data->awsVenue ?? null;
        }
        if (array_key_exists('rksGreForwardBroadcast', get_object_vars($data)) && null !== ($data->rksGreForwardBroadcast ?? null)) {
            $dataArray['rksGreForwardBroadcast'] = $data->rksGreForwardBroadcast ?? null;
        }
        if (array_key_exists('testSpeedEnabled', get_object_vars($data)) && null !== ($data->testSpeedEnabled ?? null)) {
            $dataArray['testSpeedEnabled'] = $data->testSpeedEnabled ?? null;
        }
        if (array_key_exists('swapInMac', get_object_vars($data)) && null !== ($data->swapInMac ?? null)) {
            $dataArray['swapInMac'] = $data->swapInMac ?? null;
        }
        if (array_key_exists('swapOutMac', get_object_vars($data)) && null !== ($data->swapOutMac ?? null)) {
            $dataArray['swapOutMac'] = $data->swapOutMac ?? null;
        }
        if (array_key_exists('bssColoringEnable', get_object_vars($data)) && null !== ($data->bssColoringEnable ?? null)) {
            $dataArray['bssColoringEnable'] = $data->bssColoringEnable ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApConfiguration::class => false];
    }
}