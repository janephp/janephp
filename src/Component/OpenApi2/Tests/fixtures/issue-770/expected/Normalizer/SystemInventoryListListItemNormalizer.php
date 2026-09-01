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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('meshEnabled', $data) && \is_int($data['meshEnabled'])) {
            $data['meshEnabled'] = (bool) $data['meshEnabled'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('meshSSID', $data)) {
            $object->meshSSID = $data['meshSSID'];
        }
        if (\array_key_exists('totalAPs', $data)) {
            $object->totalAPs = $data['totalAPs'];
        }
        if (\array_key_exists('discoveryAPs', $data)) {
            $object->discoveryAPs = $data['discoveryAPs'];
        }
        if (\array_key_exists('provisionedAPs', $data)) {
            $object->provisionedAPs = $data['provisionedAPs'];
        }
        if (\array_key_exists('connectedAPs', $data)) {
            $object->connectedAPs = $data['connectedAPs'];
        }
        if (\array_key_exists('disconnectedAPs', $data)) {
            $object->disconnectedAPs = $data['disconnectedAPs'];
        }
        if (\array_key_exists('rebootingAPs', $data)) {
            $object->rebootingAPs = $data['rebootingAPs'];
        }
        if (\array_key_exists('connectedRootAPs', $data)) {
            $object->connectedRootAPs = $data['connectedRootAPs'];
        }
        if (\array_key_exists('disconnectedRootAPs', $data)) {
            $object->disconnectedRootAPs = $data['disconnectedRootAPs'];
        }
        if (\array_key_exists('rebootingRootAPs', $data)) {
            $object->rebootingRootAPs = $data['rebootingRootAPs'];
        }
        if (\array_key_exists('connectedMeshAPs', $data)) {
            $object->connectedMeshAPs = $data['connectedMeshAPs'];
        }
        if (\array_key_exists('disconnectedMeshAPs', $data)) {
            $object->disconnectedMeshAPs = $data['disconnectedMeshAPs'];
        }
        if (\array_key_exists('rebootingMeshAPs', $data)) {
            $object->rebootingMeshAPs = $data['rebootingMeshAPs'];
        }
        if (\array_key_exists('connectedeMeshAPs', $data)) {
            $object->connectedeMeshAPs = $data['connectedeMeshAPs'];
        }
        if (\array_key_exists('disconnectedeMeshAPs', $data)) {
            $object->disconnectedeMeshAPs = $data['disconnectedeMeshAPs'];
        }
        if (\array_key_exists('rebootingeMeshAPs', $data)) {
            $object->rebootingeMeshAPs = $data['rebootingeMeshAPs'];
        }
        if (\array_key_exists('connectedDownMeshAPs', $data)) {
            $object->connectedDownMeshAPs = $data['connectedDownMeshAPs'];
        }
        if (\array_key_exists('disconnectedDownMeshAPs', $data)) {
            $object->disconnectedDownMeshAPs = $data['disconnectedDownMeshAPs'];
        }
        if (\array_key_exists('rebootingDownMeshAPs', $data)) {
            $object->rebootingDownMeshAPs = $data['rebootingDownMeshAPs'];
        }
        if (\array_key_exists('connectedMeshDisabledAPs', $data)) {
            $object->connectedMeshDisabledAPs = $data['connectedMeshDisabledAPs'];
        }
        if (\array_key_exists('disconnectedMeshDisabledAPs', $data)) {
            $object->disconnectedMeshDisabledAPs = $data['disconnectedMeshDisabledAPs'];
        }
        if (\array_key_exists('clients', $data)) {
            $object->clients = $data['clients'];
        }
        if (\array_key_exists('apFirmwareVersion', $data)) {
            $object->apFirmwareVersion = $data['apFirmwareVersion'];
        }
        if (\array_key_exists('meshEnabled', $data)) {
            $object->meshEnabled = $data['meshEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('meshSSID', get_object_vars($data)) && null !== ($data->meshSSID ?? null)) {
            $dataArray['meshSSID'] = $data->meshSSID ?? null;
        }
        if (array_key_exists('totalAPs', get_object_vars($data)) && null !== ($data->totalAPs ?? null)) {
            $dataArray['totalAPs'] = $data->totalAPs ?? null;
        }
        if (array_key_exists('discoveryAPs', get_object_vars($data)) && null !== ($data->discoveryAPs ?? null)) {
            $dataArray['discoveryAPs'] = $data->discoveryAPs ?? null;
        }
        if (array_key_exists('provisionedAPs', get_object_vars($data)) && null !== ($data->provisionedAPs ?? null)) {
            $dataArray['provisionedAPs'] = $data->provisionedAPs ?? null;
        }
        if (array_key_exists('connectedAPs', get_object_vars($data)) && null !== ($data->connectedAPs ?? null)) {
            $dataArray['connectedAPs'] = $data->connectedAPs ?? null;
        }
        if (array_key_exists('disconnectedAPs', get_object_vars($data)) && null !== ($data->disconnectedAPs ?? null)) {
            $dataArray['disconnectedAPs'] = $data->disconnectedAPs ?? null;
        }
        if (array_key_exists('rebootingAPs', get_object_vars($data)) && null !== ($data->rebootingAPs ?? null)) {
            $dataArray['rebootingAPs'] = $data->rebootingAPs ?? null;
        }
        if (array_key_exists('connectedRootAPs', get_object_vars($data)) && null !== ($data->connectedRootAPs ?? null)) {
            $dataArray['connectedRootAPs'] = $data->connectedRootAPs ?? null;
        }
        if (array_key_exists('disconnectedRootAPs', get_object_vars($data)) && null !== ($data->disconnectedRootAPs ?? null)) {
            $dataArray['disconnectedRootAPs'] = $data->disconnectedRootAPs ?? null;
        }
        if (array_key_exists('rebootingRootAPs', get_object_vars($data)) && null !== ($data->rebootingRootAPs ?? null)) {
            $dataArray['rebootingRootAPs'] = $data->rebootingRootAPs ?? null;
        }
        if (array_key_exists('connectedMeshAPs', get_object_vars($data)) && null !== ($data->connectedMeshAPs ?? null)) {
            $dataArray['connectedMeshAPs'] = $data->connectedMeshAPs ?? null;
        }
        if (array_key_exists('disconnectedMeshAPs', get_object_vars($data)) && null !== ($data->disconnectedMeshAPs ?? null)) {
            $dataArray['disconnectedMeshAPs'] = $data->disconnectedMeshAPs ?? null;
        }
        if (array_key_exists('rebootingMeshAPs', get_object_vars($data)) && null !== ($data->rebootingMeshAPs ?? null)) {
            $dataArray['rebootingMeshAPs'] = $data->rebootingMeshAPs ?? null;
        }
        if (array_key_exists('connectedeMeshAPs', get_object_vars($data)) && null !== ($data->connectedeMeshAPs ?? null)) {
            $dataArray['connectedeMeshAPs'] = $data->connectedeMeshAPs ?? null;
        }
        if (array_key_exists('disconnectedeMeshAPs', get_object_vars($data)) && null !== ($data->disconnectedeMeshAPs ?? null)) {
            $dataArray['disconnectedeMeshAPs'] = $data->disconnectedeMeshAPs ?? null;
        }
        if (array_key_exists('rebootingeMeshAPs', get_object_vars($data)) && null !== ($data->rebootingeMeshAPs ?? null)) {
            $dataArray['rebootingeMeshAPs'] = $data->rebootingeMeshAPs ?? null;
        }
        if (array_key_exists('connectedDownMeshAPs', get_object_vars($data)) && null !== ($data->connectedDownMeshAPs ?? null)) {
            $dataArray['connectedDownMeshAPs'] = $data->connectedDownMeshAPs ?? null;
        }
        if (array_key_exists('disconnectedDownMeshAPs', get_object_vars($data)) && null !== ($data->disconnectedDownMeshAPs ?? null)) {
            $dataArray['disconnectedDownMeshAPs'] = $data->disconnectedDownMeshAPs ?? null;
        }
        if (array_key_exists('rebootingDownMeshAPs', get_object_vars($data)) && null !== ($data->rebootingDownMeshAPs ?? null)) {
            $dataArray['rebootingDownMeshAPs'] = $data->rebootingDownMeshAPs ?? null;
        }
        if (array_key_exists('connectedMeshDisabledAPs', get_object_vars($data)) && null !== ($data->connectedMeshDisabledAPs ?? null)) {
            $dataArray['connectedMeshDisabledAPs'] = $data->connectedMeshDisabledAPs ?? null;
        }
        if (array_key_exists('disconnectedMeshDisabledAPs', get_object_vars($data)) && null !== ($data->disconnectedMeshDisabledAPs ?? null)) {
            $dataArray['disconnectedMeshDisabledAPs'] = $data->disconnectedMeshDisabledAPs ?? null;
        }
        if (array_key_exists('clients', get_object_vars($data)) && null !== ($data->clients ?? null)) {
            $dataArray['clients'] = $data->clients ?? null;
        }
        if (array_key_exists('apFirmwareVersion', get_object_vars($data)) && null !== ($data->apFirmwareVersion ?? null)) {
            $dataArray['apFirmwareVersion'] = $data->apFirmwareVersion ?? null;
        }
        if (array_key_exists('meshEnabled', get_object_vars($data)) && null !== ($data->meshEnabled ?? null)) {
            $dataArray['meshEnabled'] = $data->meshEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemInventoryListListItem::class => false];
    }
}