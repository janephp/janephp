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
class ApCreateAPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApCreateAP::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApCreateAP::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApCreateAP();
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
        if (\array_key_exists('testSpeedEnabled', $data) && \is_int($data['testSpeedEnabled'])) {
            $data['testSpeedEnabled'] = (bool) $data['testSpeedEnabled'];
        }
        if (\array_key_exists('bssColoringEnable', $data) && \is_int($data['bssColoringEnable'])) {
            $data['bssColoringEnable'] = (bool) $data['bssColoringEnable'];
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('administrativeState', $data)) {
            $object->setAdministrativeState($data['administrativeState']);
        }
        if (\array_key_exists('provisionChecklist', $data)) {
            $object->setProvisionChecklist($data['provisionChecklist']);
        }
        if (\array_key_exists('awsVenue', $data)) {
            $object->setAwsVenue($data['awsVenue']);
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
        $dataArray['mac'] = $data->getMac();
        $dataArray['zoneId'] = $data->getZoneId();
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
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('administrativeState') && null !== $data->getAdministrativeState()) {
            $dataArray['administrativeState'] = $data->getAdministrativeState();
        }
        if ($data->isInitialized('provisionChecklist') && null !== $data->getProvisionChecklist()) {
            $dataArray['provisionChecklist'] = $data->getProvisionChecklist();
        }
        if ($data->isInitialized('awsVenue') && null !== $data->getAwsVenue()) {
            $dataArray['awsVenue'] = $data->getAwsVenue();
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApCreateAP::class => false];
    }
}
