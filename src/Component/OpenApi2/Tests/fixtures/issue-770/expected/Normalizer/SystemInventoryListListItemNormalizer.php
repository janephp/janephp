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
class SystemInventoryListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem();
        if (\array_key_exists('meshEnabled', $data) && \is_int($data['meshEnabled'])) {
            $data['meshEnabled'] = (bool) $data['meshEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        if (\array_key_exists('meshSSID', $data)) {
            $object->setMeshSSID($data['meshSSID']);
        }
        if (\array_key_exists('totalAPs', $data)) {
            $object->setTotalAPs($data['totalAPs']);
        }
        if (\array_key_exists('discoveryAPs', $data)) {
            $object->setDiscoveryAPs($data['discoveryAPs']);
        }
        if (\array_key_exists('provisionedAPs', $data)) {
            $object->setProvisionedAPs($data['provisionedAPs']);
        }
        if (\array_key_exists('connectedAPs', $data)) {
            $object->setConnectedAPs($data['connectedAPs']);
        }
        if (\array_key_exists('disconnectedAPs', $data)) {
            $object->setDisconnectedAPs($data['disconnectedAPs']);
        }
        if (\array_key_exists('rebootingAPs', $data)) {
            $object->setRebootingAPs($data['rebootingAPs']);
        }
        if (\array_key_exists('connectedRootAPs', $data)) {
            $object->setConnectedRootAPs($data['connectedRootAPs']);
        }
        if (\array_key_exists('disconnectedRootAPs', $data)) {
            $object->setDisconnectedRootAPs($data['disconnectedRootAPs']);
        }
        if (\array_key_exists('rebootingRootAPs', $data)) {
            $object->setRebootingRootAPs($data['rebootingRootAPs']);
        }
        if (\array_key_exists('connectedMeshAPs', $data)) {
            $object->setConnectedMeshAPs($data['connectedMeshAPs']);
        }
        if (\array_key_exists('disconnectedMeshAPs', $data)) {
            $object->setDisconnectedMeshAPs($data['disconnectedMeshAPs']);
        }
        if (\array_key_exists('rebootingMeshAPs', $data)) {
            $object->setRebootingMeshAPs($data['rebootingMeshAPs']);
        }
        if (\array_key_exists('connectedeMeshAPs', $data)) {
            $object->setConnectedeMeshAPs($data['connectedeMeshAPs']);
        }
        if (\array_key_exists('disconnectedeMeshAPs', $data)) {
            $object->setDisconnectedeMeshAPs($data['disconnectedeMeshAPs']);
        }
        if (\array_key_exists('rebootingeMeshAPs', $data)) {
            $object->setRebootingeMeshAPs($data['rebootingeMeshAPs']);
        }
        if (\array_key_exists('connectedDownMeshAPs', $data)) {
            $object->setConnectedDownMeshAPs($data['connectedDownMeshAPs']);
        }
        if (\array_key_exists('disconnectedDownMeshAPs', $data)) {
            $object->setDisconnectedDownMeshAPs($data['disconnectedDownMeshAPs']);
        }
        if (\array_key_exists('rebootingDownMeshAPs', $data)) {
            $object->setRebootingDownMeshAPs($data['rebootingDownMeshAPs']);
        }
        if (\array_key_exists('connectedMeshDisabledAPs', $data)) {
            $object->setConnectedMeshDisabledAPs($data['connectedMeshDisabledAPs']);
        }
        if (\array_key_exists('disconnectedMeshDisabledAPs', $data)) {
            $object->setDisconnectedMeshDisabledAPs($data['disconnectedMeshDisabledAPs']);
        }
        if (\array_key_exists('clients', $data)) {
            $object->setClients($data['clients']);
        }
        if (\array_key_exists('apFirmwareVersion', $data)) {
            $object->setApFirmwareVersion($data['apFirmwareVersion']);
        }
        if (\array_key_exists('meshEnabled', $data)) {
            $object->setMeshEnabled($data['meshEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('zoneId') && null !== $data->getZoneId()) {
            $dataArray['zoneId'] = $data->getZoneId();
        }
        if ($data->isInitialized('zoneName') && null !== $data->getZoneName()) {
            $dataArray['zoneName'] = $data->getZoneName();
        }
        if ($data->isInitialized('meshSSID') && null !== $data->getMeshSSID()) {
            $dataArray['meshSSID'] = $data->getMeshSSID();
        }
        if ($data->isInitialized('totalAPs') && null !== $data->getTotalAPs()) {
            $dataArray['totalAPs'] = $data->getTotalAPs();
        }
        if ($data->isInitialized('discoveryAPs') && null !== $data->getDiscoveryAPs()) {
            $dataArray['discoveryAPs'] = $data->getDiscoveryAPs();
        }
        if ($data->isInitialized('provisionedAPs') && null !== $data->getProvisionedAPs()) {
            $dataArray['provisionedAPs'] = $data->getProvisionedAPs();
        }
        if ($data->isInitialized('connectedAPs') && null !== $data->getConnectedAPs()) {
            $dataArray['connectedAPs'] = $data->getConnectedAPs();
        }
        if ($data->isInitialized('disconnectedAPs') && null !== $data->getDisconnectedAPs()) {
            $dataArray['disconnectedAPs'] = $data->getDisconnectedAPs();
        }
        if ($data->isInitialized('rebootingAPs') && null !== $data->getRebootingAPs()) {
            $dataArray['rebootingAPs'] = $data->getRebootingAPs();
        }
        if ($data->isInitialized('connectedRootAPs') && null !== $data->getConnectedRootAPs()) {
            $dataArray['connectedRootAPs'] = $data->getConnectedRootAPs();
        }
        if ($data->isInitialized('disconnectedRootAPs') && null !== $data->getDisconnectedRootAPs()) {
            $dataArray['disconnectedRootAPs'] = $data->getDisconnectedRootAPs();
        }
        if ($data->isInitialized('rebootingRootAPs') && null !== $data->getRebootingRootAPs()) {
            $dataArray['rebootingRootAPs'] = $data->getRebootingRootAPs();
        }
        if ($data->isInitialized('connectedMeshAPs') && null !== $data->getConnectedMeshAPs()) {
            $dataArray['connectedMeshAPs'] = $data->getConnectedMeshAPs();
        }
        if ($data->isInitialized('disconnectedMeshAPs') && null !== $data->getDisconnectedMeshAPs()) {
            $dataArray['disconnectedMeshAPs'] = $data->getDisconnectedMeshAPs();
        }
        if ($data->isInitialized('rebootingMeshAPs') && null !== $data->getRebootingMeshAPs()) {
            $dataArray['rebootingMeshAPs'] = $data->getRebootingMeshAPs();
        }
        if ($data->isInitialized('connectedeMeshAPs') && null !== $data->getConnectedeMeshAPs()) {
            $dataArray['connectedeMeshAPs'] = $data->getConnectedeMeshAPs();
        }
        if ($data->isInitialized('disconnectedeMeshAPs') && null !== $data->getDisconnectedeMeshAPs()) {
            $dataArray['disconnectedeMeshAPs'] = $data->getDisconnectedeMeshAPs();
        }
        if ($data->isInitialized('rebootingeMeshAPs') && null !== $data->getRebootingeMeshAPs()) {
            $dataArray['rebootingeMeshAPs'] = $data->getRebootingeMeshAPs();
        }
        if ($data->isInitialized('connectedDownMeshAPs') && null !== $data->getConnectedDownMeshAPs()) {
            $dataArray['connectedDownMeshAPs'] = $data->getConnectedDownMeshAPs();
        }
        if ($data->isInitialized('disconnectedDownMeshAPs') && null !== $data->getDisconnectedDownMeshAPs()) {
            $dataArray['disconnectedDownMeshAPs'] = $data->getDisconnectedDownMeshAPs();
        }
        if ($data->isInitialized('rebootingDownMeshAPs') && null !== $data->getRebootingDownMeshAPs()) {
            $dataArray['rebootingDownMeshAPs'] = $data->getRebootingDownMeshAPs();
        }
        if ($data->isInitialized('connectedMeshDisabledAPs') && null !== $data->getConnectedMeshDisabledAPs()) {
            $dataArray['connectedMeshDisabledAPs'] = $data->getConnectedMeshDisabledAPs();
        }
        if ($data->isInitialized('disconnectedMeshDisabledAPs') && null !== $data->getDisconnectedMeshDisabledAPs()) {
            $dataArray['disconnectedMeshDisabledAPs'] = $data->getDisconnectedMeshDisabledAPs();
        }
        if ($data->isInitialized('clients') && null !== $data->getClients()) {
            $dataArray['clients'] = $data->getClients();
        }
        if ($data->isInitialized('apFirmwareVersion') && null !== $data->getApFirmwareVersion()) {
            $dataArray['apFirmwareVersion'] = $data->getApFirmwareVersion();
        }
        if ($data->isInitialized('meshEnabled') && null !== $data->getMeshEnabled()) {
            $dataArray['meshEnabled'] = $data->getMeshEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem::class => false];
    }
}