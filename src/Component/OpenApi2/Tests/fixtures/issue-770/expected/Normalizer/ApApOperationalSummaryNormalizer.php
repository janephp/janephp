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
class ApApOperationalSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApOperationalSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApOperationalSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApOperationalSummary();
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
        if (\array_key_exists('isCriticalAP', $data) && \is_int($data['isCriticalAP'])) {
            $data['isCriticalAP'] = (bool) $data['isCriticalAP'];
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
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('countryCode', $data)) {
            $object->countryCode = $data['countryCode'];
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
        if (\array_key_exists('cpId', $data)) {
            $object->cpId = $data['cpId'];
        }
        if (\array_key_exists('dpId', $data)) {
            $object->dpId = $data['dpId'];
        }
        if (\array_key_exists('wifi24Channel', $data)) {
            $object->wifi24Channel = $data['wifi24Channel'];
        }
        if (\array_key_exists('wifi50Channel', $data)) {
            $object->wifi50Channel = $data['wifi50Channel'];
        }
        if (\array_key_exists('wifi6gChannel', $data)) {
            $object->wifi6gChannel = $data['wifi6gChannel'];
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->meshRole = $data['meshRole'];
        }
        if (\array_key_exists('meshHop', $data)) {
            $object->meshHop = $data['meshHop'];
        }
        if (\array_key_exists('ipType', $data)) {
            $object->ipType = $data['ipType'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('ipv6Type', $data)) {
            $object->ipv6Type = $data['ipv6Type'];
        }
        if (\array_key_exists('ipv6', $data)) {
            $object->ipv6 = $data['ipv6'];
        }
        if (\array_key_exists('externalIp', $data)) {
            $object->externalIp = $data['externalIp'];
        }
        if (\array_key_exists('externalPort', $data)) {
            $object->externalPort = $data['externalPort'];
        }
        if (\array_key_exists('configState', $data)) {
            $object->configState = $data['configState'];
        }
        if (\array_key_exists('connectionState', $data)) {
            $object->connectionState = $data['connectionState'];
        }
        if (\array_key_exists('registrationState', $data)) {
            $object->registrationState = $data['registrationState'];
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->administrativeState = $data['administrativeState'];
        }
        if (\array_key_exists('provisionMethod', $data)) {
            $object->provisionMethod = $data['provisionMethod'];
        }
        if (\array_key_exists('provisionStage', $data)) {
            $object->provisionStage = $data['provisionStage'];
        }
        if (\array_key_exists('isCriticalAP', $data)) {
            $object->isCriticalAP = $data['isCriticalAP'];
        }
        if (\array_key_exists('approvedTime', $data)) {
            $object->approvedTime = $data['approvedTime'];
        }
        if (\array_key_exists('lastSeenTime', $data)) {
            $object->lastSeenTime = $data['lastSeenTime'];
        }
        if (\array_key_exists('uptime', $data)) {
            $object->uptime = $data['uptime'];
        }
        if (\array_key_exists('clientCount', $data)) {
            $object->clientCount = $data['clientCount'];
        }
        if (\array_key_exists('managementVlan', $data)) {
            $object->managementVlan = $data['managementVlan'];
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
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('countryCode', get_object_vars($data)) && null !== ($data->countryCode ?? null)) {
            $dataArray['countryCode'] = $data->countryCode ?? null;
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
        if (array_key_exists('cpId', get_object_vars($data)) && null !== ($data->cpId ?? null)) {
            $dataArray['cpId'] = $data->cpId ?? null;
        }
        if (array_key_exists('dpId', get_object_vars($data)) && null !== ($data->dpId ?? null)) {
            $dataArray['dpId'] = $data->dpId ?? null;
        }
        if (array_key_exists('wifi24Channel', get_object_vars($data)) && null !== ($data->wifi24Channel ?? null)) {
            $dataArray['wifi24Channel'] = $data->wifi24Channel ?? null;
        }
        if (array_key_exists('wifi50Channel', get_object_vars($data)) && null !== ($data->wifi50Channel ?? null)) {
            $dataArray['wifi50Channel'] = $data->wifi50Channel ?? null;
        }
        if (array_key_exists('wifi6gChannel', get_object_vars($data)) && null !== ($data->wifi6gChannel ?? null)) {
            $dataArray['wifi6gChannel'] = $data->wifi6gChannel ?? null;
        }
        if (array_key_exists('meshRole', get_object_vars($data)) && null !== ($data->meshRole ?? null)) {
            $dataArray['meshRole'] = $data->meshRole ?? null;
        }
        if (array_key_exists('meshHop', get_object_vars($data)) && null !== ($data->meshHop ?? null)) {
            $dataArray['meshHop'] = $data->meshHop ?? null;
        }
        if (array_key_exists('ipType', get_object_vars($data)) && null !== ($data->ipType ?? null)) {
            $dataArray['ipType'] = $data->ipType ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('ipv6Type', get_object_vars($data)) && null !== ($data->ipv6Type ?? null)) {
            $dataArray['ipv6Type'] = $data->ipv6Type ?? null;
        }
        if (array_key_exists('ipv6', get_object_vars($data)) && null !== ($data->ipv6 ?? null)) {
            $dataArray['ipv6'] = $data->ipv6 ?? null;
        }
        if (array_key_exists('externalIp', get_object_vars($data)) && null !== ($data->externalIp ?? null)) {
            $dataArray['externalIp'] = $data->externalIp ?? null;
        }
        if (array_key_exists('externalPort', get_object_vars($data)) && null !== ($data->externalPort ?? null)) {
            $dataArray['externalPort'] = $data->externalPort ?? null;
        }
        if (array_key_exists('configState', get_object_vars($data)) && null !== ($data->configState ?? null)) {
            $dataArray['configState'] = $data->configState ?? null;
        }
        if (array_key_exists('connectionState', get_object_vars($data)) && null !== ($data->connectionState ?? null)) {
            $dataArray['connectionState'] = $data->connectionState ?? null;
        }
        if (array_key_exists('registrationState', get_object_vars($data)) && null !== ($data->registrationState ?? null)) {
            $dataArray['registrationState'] = $data->registrationState ?? null;
        }
        if (array_key_exists('administrativeState', get_object_vars($data)) && null !== ($data->administrativeState ?? null)) {
            $dataArray['administrativeState'] = $data->administrativeState ?? null;
        }
        if (array_key_exists('provisionMethod', get_object_vars($data)) && null !== ($data->provisionMethod ?? null)) {
            $dataArray['provisionMethod'] = $data->provisionMethod ?? null;
        }
        if (array_key_exists('provisionStage', get_object_vars($data)) && null !== ($data->provisionStage ?? null)) {
            $dataArray['provisionStage'] = $data->provisionStage ?? null;
        }
        if (array_key_exists('isCriticalAP', get_object_vars($data)) && null !== ($data->isCriticalAP ?? null)) {
            $dataArray['isCriticalAP'] = $data->isCriticalAP ?? null;
        }
        if (array_key_exists('approvedTime', get_object_vars($data)) && null !== ($data->approvedTime ?? null)) {
            $dataArray['approvedTime'] = $data->approvedTime ?? null;
        }
        if (array_key_exists('lastSeenTime', get_object_vars($data)) && null !== ($data->lastSeenTime ?? null)) {
            $dataArray['lastSeenTime'] = $data->lastSeenTime ?? null;
        }
        if (array_key_exists('uptime', get_object_vars($data)) && null !== ($data->uptime ?? null)) {
            $dataArray['uptime'] = $data->uptime ?? null;
        }
        if (array_key_exists('clientCount', get_object_vars($data)) && null !== ($data->clientCount ?? null)) {
            $dataArray['clientCount'] = $data->clientCount ?? null;
        }
        if (array_key_exists('managementVlan', get_object_vars($data)) && null !== ($data->managementVlan ?? null)) {
            $dataArray['managementVlan'] = $data->managementVlan ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApApOperationalSummary::class => false];
    }
}