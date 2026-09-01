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
class ApNeighborAPListListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPListListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPListListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPListListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mac', $data)) {
            $object->mac = $data['mac'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->zoneName = $data['zoneName'];
        }
        if (\array_key_exists('ip', $data)) {
            $object->ip = $data['ip'];
        }
        if (\array_key_exists('externalIp', $data)) {
            $object->externalIp = $data['externalIp'];
        }
        if (\array_key_exists('externalPort', $data)) {
            $object->externalPort = $data['externalPort'];
        }
        if (\array_key_exists('model', $data)) {
            $object->model = $data['model'];
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('channel', $data)) {
            $object->channel = $data['channel'];
        }
        if (\array_key_exists('signal', $data)) {
            $object->signal = $data['signal'];
        }
        if (\array_key_exists('connectionState', $data)) {
            $object->connectionState = $data['connectionState'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('mac', get_object_vars($data)) && null !== ($data->mac ?? null)) {
            $dataArray['mac'] = $data->mac ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('zoneName', get_object_vars($data)) && null !== ($data->zoneName ?? null)) {
            $dataArray['zoneName'] = $data->zoneName ?? null;
        }
        if (array_key_exists('ip', get_object_vars($data)) && null !== ($data->ip ?? null)) {
            $dataArray['ip'] = $data->ip ?? null;
        }
        if (array_key_exists('externalIp', get_object_vars($data)) && null !== ($data->externalIp ?? null)) {
            $dataArray['externalIp'] = $data->externalIp ?? null;
        }
        if (array_key_exists('externalPort', get_object_vars($data)) && null !== ($data->externalPort ?? null)) {
            $dataArray['externalPort'] = $data->externalPort ?? null;
        }
        if (array_key_exists('model', get_object_vars($data)) && null !== ($data->model ?? null)) {
            $dataArray['model'] = $data->model ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
        }
        if (array_key_exists('channel', get_object_vars($data)) && null !== ($data->channel ?? null)) {
            $dataArray['channel'] = $data->channel ?? null;
        }
        if (array_key_exists('signal', get_object_vars($data)) && null !== ($data->signal ?? null)) {
            $dataArray['signal'] = $data->signal ?? null;
        }
        if (array_key_exists('connectionState', get_object_vars($data)) && null !== ($data->connectionState ?? null)) {
            $dataArray['connectionState'] = $data->connectionState ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApNeighborAPListListItem::class => false];
    }
}