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
class ApgroupApGroupConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupConfiguration();
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
            $object->id = $data['id'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
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
        if (\array_key_exists('locationBasedService', $data)) {
            $object->locationBasedService = $this->denormalizer->denormalize($data['locationBasedService'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonOverrideGenericRef::class, 'json', $context);
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
        if (\array_key_exists('members', $data)) {
            $values = [];
            foreach ($data['members'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupMember::class, 'json', $context);
            }
            $object->members = $values;
        }
        if (\array_key_exists('channelEvaluationInterval', $data)) {
            $object->channelEvaluationInterval = $data['channelEvaluationInterval'];
        }
        if (\array_key_exists('apMgmtVlan', $data)) {
            $object->apMgmtVlan = $this->denormalizer->denormalize($data['apMgmtVlan'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonApManagementVlan::class, 'json', $context);
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->awsVenue = $data['awsVenue'];
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
            $values_1 = [];
            foreach ($data['lteBandLockChannels'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonLteBandLockChannel::class, 'json', $context);
            }
            $object->lteBandLockChannels = $values_1;
        }
        if (\array_key_exists('monitoringEnabled', $data)) {
            $object->monitoringEnabled = $data['monitoringEnabled'];
        }
        if (\array_key_exists('apGroupRoguePolicy', $data)) {
            $object->apGroupRoguePolicy = $data['apGroupRoguePolicy'];
        }
        if (\array_key_exists('rogueScanFreq', $data)) {
            $object->rogueScanFreq = $data['rogueScanFreq'];
        }
        if (\array_key_exists('paloAltoFirewallProfileOverrided', $data)) {
            $object->paloAltoFirewallProfileOverrided = $data['paloAltoFirewallProfileOverrided'];
        }
        if (\array_key_exists('paloAltoFirewallProfileId', $data)) {
            $object->paloAltoFirewallProfileId = $data['paloAltoFirewallProfileId'];
        }
        if (\array_key_exists('rksGreForwardBroadcast', $data)) {
            $object->rksGreForwardBroadcast = $data['rksGreForwardBroadcast'];
        }
        if (\array_key_exists('bssColoringEnable', $data)) {
            $object->bssColoringEnable = $data['bssColoringEnable'];
        }
        if (\array_key_exists('radioConfig', $data)) {
            $object->radioConfig = $this->denormalizer->denormalize($data['radioConfig'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\RadioRadioConfigResponse::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
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
        if (array_key_exists('locationBasedService', get_object_vars($data)) && null !== ($data->locationBasedService ?? null)) {
            $dataArray['locationBasedService'] = ($data->locationBasedService ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->locationBasedService ?? null, 'json', $context));
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
        if (array_key_exists('members', get_object_vars($data)) && null !== ($data->members ?? null)) {
            $values = [];
            foreach ($data->members ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['members'] = $values;
        }
        if (array_key_exists('channelEvaluationInterval', get_object_vars($data)) && null !== ($data->channelEvaluationInterval ?? null)) {
            $dataArray['channelEvaluationInterval'] = $data->channelEvaluationInterval ?? null;
        }
        if (array_key_exists('apMgmtVlan', get_object_vars($data)) && null !== ($data->apMgmtVlan ?? null)) {
            $dataArray['apMgmtVlan'] = ($data->apMgmtVlan ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->apMgmtVlan ?? null, 'json', $context));
        }
        if (array_key_exists('awsVenue', get_object_vars($data)) && null !== ($data->awsVenue ?? null)) {
            $dataArray['awsVenue'] = $data->awsVenue ?? null;
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
            $values_1 = [];
            foreach ($data->lteBandLockChannels ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['lteBandLockChannels'] = $values_1;
        }
        if (array_key_exists('monitoringEnabled', get_object_vars($data)) && null !== ($data->monitoringEnabled ?? null)) {
            $dataArray['monitoringEnabled'] = $data->monitoringEnabled ?? null;
        }
        if (array_key_exists('apGroupRoguePolicy', get_object_vars($data)) && null !== ($data->apGroupRoguePolicy ?? null)) {
            $dataArray['apGroupRoguePolicy'] = $data->apGroupRoguePolicy ?? null;
        }
        if (array_key_exists('rogueScanFreq', get_object_vars($data)) && null !== ($data->rogueScanFreq ?? null)) {
            $dataArray['rogueScanFreq'] = $data->rogueScanFreq ?? null;
        }
        if (array_key_exists('paloAltoFirewallProfileOverrided', get_object_vars($data)) && null !== ($data->paloAltoFirewallProfileOverrided ?? null)) {
            $dataArray['paloAltoFirewallProfileOverrided'] = $data->paloAltoFirewallProfileOverrided ?? null;
        }
        if (array_key_exists('paloAltoFirewallProfileId', get_object_vars($data)) && null !== ($data->paloAltoFirewallProfileId ?? null)) {
            $dataArray['paloAltoFirewallProfileId'] = $data->paloAltoFirewallProfileId ?? null;
        }
        if (array_key_exists('rksGreForwardBroadcast', get_object_vars($data)) && null !== ($data->rksGreForwardBroadcast ?? null)) {
            $dataArray['rksGreForwardBroadcast'] = $data->rksGreForwardBroadcast ?? null;
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApgroupApGroupConfiguration::class => false];
    }
}