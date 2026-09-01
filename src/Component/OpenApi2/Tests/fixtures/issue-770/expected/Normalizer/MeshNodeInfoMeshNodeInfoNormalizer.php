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
class MeshNodeInfoMeshNodeInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('hasDownLink', $data) && \is_int($data['hasDownLink'])) {
            $data['hasDownLink'] = (bool) $data['hasDownLink'];
        }
        if (\array_key_exists('apMac', $data)) {
            $object->apMac = $data['apMac'];
        }
        if (\array_key_exists('meshRole', $data)) {
            $object->meshRole = $data['meshRole'];
        }
        if (\array_key_exists('apName', $data)) {
            $object->apName = $data['apName'];
        }
        if (\array_key_exists('apModel', $data)) {
            $object->apModel = $data['apModel'];
        }
        if (\array_key_exists('ipAddress', $data)) {
            $object->ipAddress = $data['ipAddress'];
        }
        if (\array_key_exists('externalIPAddress', $data)) {
            $object->externalIPAddress = $data['externalIPAddress'];
        }
        if (\array_key_exists('channel', $data)) {
            $object->channel = $data['channel'];
        }
        if (\array_key_exists('uplinkChannel', $data)) {
            $object->uplinkChannel = $data['uplinkChannel'];
        }
        if (\array_key_exists('downlinkChannel', $data)) {
            $object->downlinkChannel = $data['downlinkChannel'];
        }
        if (\array_key_exists('uplinkSnr', $data)) {
            $object->uplinkSnr = $data['uplinkSnr'];
        }
        if (\array_key_exists('downlinkSnr', $data)) {
            $object->downlinkSnr = $data['downlinkSnr'];
        }
        if (\array_key_exists('hasDownLink', $data)) {
            $object->hasDownLink = $data['hasDownLink'];
        }
        if (\array_key_exists('clientCount', $data)) {
            $object->clientCount = $data['clientCount'];
        }
        if (\array_key_exists('hops', $data)) {
            $object->hops = $data['hops'];
        }
        if (\array_key_exists('helperZoneInfo', $data)) {
            $values = [];
            foreach ($data['helperZoneInfo'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoHelperZoneInfo::class, 'json', $context);
            }
            $object->helperZoneInfo = $values;
        }
        if (\array_key_exists('uplinkMCSRate', $data)) {
            $object->uplinkMCSRate = $data['uplinkMCSRate'];
        }
        if (\array_key_exists('downlinkMCSRate', $data)) {
            $object->downlinkMCSRate = $data['downlinkMCSRate'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('meshRole', get_object_vars($data)) && null !== ($data->meshRole ?? null)) {
            $dataArray['meshRole'] = $data->meshRole ?? null;
        }
        if (array_key_exists('apName', get_object_vars($data)) && null !== ($data->apName ?? null)) {
            $dataArray['apName'] = $data->apName ?? null;
        }
        if (array_key_exists('apModel', get_object_vars($data)) && null !== ($data->apModel ?? null)) {
            $dataArray['apModel'] = $data->apModel ?? null;
        }
        if (array_key_exists('ipAddress', get_object_vars($data)) && null !== ($data->ipAddress ?? null)) {
            $dataArray['ipAddress'] = $data->ipAddress ?? null;
        }
        if (array_key_exists('externalIPAddress', get_object_vars($data)) && null !== ($data->externalIPAddress ?? null)) {
            $dataArray['externalIPAddress'] = $data->externalIPAddress ?? null;
        }
        if (array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel ?? null;
        }
        if (array_key_exists('uplinkChannel', get_object_vars($data)) && null !== ($data->uplinkChannel ?? null)) {
            $dataArray['uplinkChannel'] = $data->uplinkChannel ?? null;
        }
        if (array_key_exists('downlinkChannel', get_object_vars($data)) && null !== ($data->downlinkChannel ?? null)) {
            $dataArray['downlinkChannel'] = $data->downlinkChannel ?? null;
        }
        if (array_key_exists('uplinkSnr', get_object_vars($data)) && null !== ($data->uplinkSnr ?? null)) {
            $dataArray['uplinkSnr'] = $data->uplinkSnr ?? null;
        }
        if (array_key_exists('downlinkSnr', get_object_vars($data)) && null !== ($data->downlinkSnr ?? null)) {
            $dataArray['downlinkSnr'] = $data->downlinkSnr ?? null;
        }
        if (array_key_exists('hasDownLink', get_object_vars($data)) && null !== ($data->hasDownLink ?? null)) {
            $dataArray['hasDownLink'] = $data->hasDownLink ?? null;
        }
        if (array_key_exists('clientCount', get_object_vars($data)) && null !== ($data->clientCount ?? null)) {
            $dataArray['clientCount'] = $data->clientCount ?? null;
        }
        if (array_key_exists('hops', get_object_vars($data)) && null !== ($data->hops ?? null)) {
            $dataArray['hops'] = $data->hops ?? null;
        }
        if (array_key_exists('helperZoneInfo', get_object_vars($data)) && null !== ($data->helperZoneInfo ?? null)) {
            $values = [];
            foreach ($data->helperZoneInfo ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['helperZoneInfo'] = $values;
        }
        if (array_key_exists('uplinkMCSRate', get_object_vars($data)) && null !== ($data->uplinkMCSRate ?? null)) {
            $dataArray['uplinkMCSRate'] = $data->uplinkMCSRate ?? null;
        }
        if (array_key_exists('downlinkMCSRate', get_object_vars($data)) && null !== ($data->downlinkMCSRate ?? null)) {
            $dataArray['downlinkMCSRate'] = $data->downlinkMCSRate ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MeshNodeInfoMeshNodeInfo::class => false];
    }
}