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
class ApApOperationalSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApApOperationalSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApApOperationalSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApApOperationalSummary();
        if (\array_key_exists('latitude', $data) && \is_int($data['latitude'])) {
            $data['latitude'] = (double) $data['latitude'];
        }
        if (\array_key_exists('longitude', $data) && \is_int($data['longitude'])) {
            $data['longitude'] = (double) $data['longitude'];
        }
        if (\array_key_exists('isCriticalAP', $data) && \is_int($data['isCriticalAP'])) {
            $data['isCriticalAP'] = (bool) $data['isCriticalAP'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mac', $data)) {
            $object->setMac($data['mac']);
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($data['version']);
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->setCountryCode($data['countryCode']);
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
        if (\array_key_exists('cpId', $data)) {
            $object->setCpId($data['cpId']);
        }
        if (\array_key_exists('dpId', $data)) {
            $object->setDpId($data['dpId']);
        }
        if (\array_key_exists('wifi24Channel', $data)) {
            $object->setWifi24Channel($data['wifi24Channel']);
        }
        if (\array_key_exists('wifi50Channel', $data)) {
            $object->setWifi50Channel($data['wifi50Channel']);
        }
        if (\array_key_exists('wifi6gChannel', $data)) {
            $object->setWifi6gChannel($data['wifi6gChannel']);
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->setMeshRole($data['meshRole']);
        }
        if (\array_key_exists('meshHop', $data)) {
            $object->setMeshHop($data['meshHop']);
        }
        if (\array_key_exists('ipType', $data)) {
            $object->setIpType($data['ipType']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('ipv6Type', $data)) {
            $object->setIpv6Type($data['ipv6Type']);
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->setIpv6($data['ipv6']);
        }
        if (\array_key_exists('externalIp', $data)) {
            $object->setExternalIp($data['externalIp']);
        }
        if (\array_key_exists('externalPort', $data)) {
            $object->setExternalPort($data['externalPort']);
        }
        if (\array_key_exists('configState', $data)) {
            $object->setConfigState($data['configState']);
        }
        if (\array_key_exists('connectionState', $data)) {
            $object->setConnectionState($data['connectionState']);
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->setRegistrationState($data['registrationState']);
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->setAdministrativeState($data['administrativeState']);
        }
        if (\array_key_exists('provisionMethod', $data)) {
            $object->setProvisionMethod($data['provisionMethod']);
        }
        if (\array_key_exists('provisionStage', $data)) {
            $object->setProvisionStage($data['provisionStage']);
        }
        if (\array_key_exists('isCriticalAP', $data)) {
            $object->setIsCriticalAP($data['isCriticalAP']);
        }
        if (\array_key_exists('approvedTime', $data)) {
            $object->setApprovedTime($data['approvedTime']);
        }
        if (\array_key_exists('lastSeenTime', $data)) {
            $object->setLastSeenTime($data['lastSeenTime']);
        }
        if (\array_key_exists('uptime', $data)) {
            $object->setUptime($data['uptime']);
        }
        if (\array_key_exists('clientCount', $data)) {
            $object->setClientCount($data['clientCount']);
        }
        if (\array_key_exists('managementVlan', $data)) {
            $object->setManagementVlan($data['managementVlan']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('mac') && null !== $data->getMac()) {
            $dataArray['mac'] = $data->getMac();
        }
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
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $data->getVersion();
        }
        if ($data->isInitialized('countryCode') && null !== $data->getCountryCode()) {
            $dataArray['countryCode'] = $data->getCountryCode();
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
        if ($data->isInitialized('cpId') && null !== $data->getCpId()) {
            $dataArray['cpId'] = $data->getCpId();
        }
        if ($data->isInitialized('dpId') && null !== $data->getDpId()) {
            $dataArray['dpId'] = $data->getDpId();
        }
        if ($data->isInitialized('wifi24Channel') && null !== $data->getWifi24Channel()) {
            $dataArray['wifi24Channel'] = $data->getWifi24Channel();
        }
        if ($data->isInitialized('wifi50Channel') && null !== $data->getWifi50Channel()) {
            $dataArray['wifi50Channel'] = $data->getWifi50Channel();
        }
        if ($data->isInitialized('wifi6gChannel') && null !== $data->getWifi6gChannel()) {
            $dataArray['wifi6gChannel'] = $data->getWifi6gChannel();
        }
        if ($data->isInitialized('meshRole') && null !== $data->getMeshRole()) {
            $dataArray['meshRole'] = $data->getMeshRole();
        }
        if ($data->isInitialized('meshHop') && null !== $data->getMeshHop()) {
            $dataArray['meshHop'] = $data->getMeshHop();
        }
        if ($data->isInitialized('ipType') && null !== $data->getIpType()) {
            $dataArray['ipType'] = $data->getIpType();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('ipv6Type') && null !== $data->getIpv6Type()) {
            $dataArray['ipv6Type'] = $data->getIpv6Type();
        }
        if ($data->isInitialized('ipv6') && null !== $data->getIpv6()) {
            $dataArray['ipv6'] = $data->getIpv6();
        }
        if ($data->isInitialized('externalIp') && null !== $data->getExternalIp()) {
            $dataArray['externalIp'] = $data->getExternalIp();
        }
        if ($data->isInitialized('externalPort') && null !== $data->getExternalPort()) {
            $dataArray['externalPort'] = $data->getExternalPort();
        }
        if ($data->isInitialized('configState') && null !== $data->getConfigState()) {
            $dataArray['configState'] = $data->getConfigState();
        }
        if ($data->isInitialized('connectionState') && null !== $data->getConnectionState()) {
            $dataArray['connectionState'] = $data->getConnectionState();
        }
        if ($data->isInitialized('registrationState') && null !== $data->getRegistrationState()) {
            $dataArray['registrationState'] = $data->getRegistrationState();
        }
        if ($data->isInitialized('administrativeState') && null !== $data->getAdministrativeState()) {
            $dataArray['administrativeState'] = $data->getAdministrativeState();
        }
        if ($data->isInitialized('provisionMethod') && null !== $data->getProvisionMethod()) {
            $dataArray['provisionMethod'] = $data->getProvisionMethod();
        }
        if ($data->isInitialized('provisionStage') && null !== $data->getProvisionStage()) {
            $dataArray['provisionStage'] = $data->getProvisionStage();
        }
        if ($data->isInitialized('isCriticalAP') && null !== $data->getIsCriticalAP()) {
            $dataArray['isCriticalAP'] = $data->getIsCriticalAP();
        }
        if ($data->isInitialized('approvedTime') && null !== $data->getApprovedTime()) {
            $dataArray['approvedTime'] = $data->getApprovedTime();
        }
        if ($data->isInitialized('lastSeenTime') && null !== $data->getLastSeenTime()) {
            $dataArray['lastSeenTime'] = $data->getLastSeenTime();
        }
        if ($data->isInitialized('uptime') && null !== $data->getUptime()) {
            $dataArray['uptime'] = $data->getUptime();
        }
        if ($data->isInitialized('clientCount') && null !== $data->getClientCount()) {
            $dataArray['clientCount'] = $data->getClientCount();
        }
        if ($data->isInitialized('managementVlan') && null !== $data->getManagementVlan()) {
            $dataArray['managementVlan'] = $data->getManagementVlan();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApApOperationalSummary::class => false];
    }
}