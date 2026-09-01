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
class MeshNeighborInfoMeshNeighborInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('apName', $data)) {
            $object->apName = $data['apName'];
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->ipAddress = $data['ipAddress'];
        }
        if (\array_key_exists('externalIPAddress', $data)) {
            $object->externalIPAddress = $data['externalIPAddress'];
        }
        if (\array_key_exists('apModel', $data)) {
            $object->apModel = $data['apModel'];
        }
        if (\array_key_exists('apFirmware', $data)) {
            $object->apFirmware = $data['apFirmware'];
        }
        if (\array_key_exists('channel', $data)) {
            $object->channel = $data['channel'];
        }
        if (\array_key_exists('connectionStatus', $data)) {
            $object->connectionStatus = $data['connectionStatus'];
        }
        if (\array_key_exists('snr', $data)) {
            $object->snr = $data['snr'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('apName', get_object_vars($data)) && null !== ($data->apName ?? null)) {
            $dataArray['apName'] = $data->apName ?? null;
        }
        if (array_key_exists('ipAddress', get_object_vars($data)) && null !== ($data->ipAddress ?? null)) {
            $dataArray['ipAddress'] = $data->ipAddress ?? null;
        }
        if (array_key_exists('externalIPAddress', get_object_vars($data)) && null !== ($data->externalIPAddress ?? null)) {
            $dataArray['externalIPAddress'] = $data->externalIPAddress ?? null;
        }
        if (array_key_exists('apModel', get_object_vars($data)) && null !== ($data->apModel ?? null)) {
            $dataArray['apModel'] = $data->apModel ?? null;
        }
        if (array_key_exists('apFirmware', get_object_vars($data)) && null !== ($data->apFirmware ?? null)) {
            $dataArray['apFirmware'] = $data->apFirmware ?? null;
        }
        if (array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel ?? null;
        }
        if (array_key_exists('connectionStatus', get_object_vars($data)) && null !== ($data->connectionStatus ?? null)) {
            $dataArray['connectionStatus'] = $data->connectionStatus ?? null;
        }
        if (array_key_exists('snr', get_object_vars($data)) && null !== ($data->snr ?? null)) {
            $dataArray['snr'] = $data->snr ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MeshNeighborInfoMeshNeighborInfo::class => false];
    }
}