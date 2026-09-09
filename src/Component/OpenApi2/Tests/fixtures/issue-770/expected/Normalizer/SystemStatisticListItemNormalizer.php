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
class SystemStatisticListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('timestamp', $data) && \is_int($data['timestamp'])) {
            $data['timestamp'] = (float) $data['timestamp'];
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->timestamp = $data['timestamp'];
        }
        if (\array_key_exists('cpu', $data)) {
            $object->cpu = $this->denormalizer->denormalize($data['cpu'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemCpu::class, 'json', $context);
        }
        if (\array_key_exists('disk', $data)) {
            $object->disk = $this->denormalizer->denormalize($data['disk'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemDisk::class, 'json', $context);
        }
        if (\array_key_exists('memory', $data)) {
            $object->memory = $this->denormalizer->denormalize($data['memory'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItemMemory::class, 'json', $context);
        }
        if (\array_key_exists('port0', $data)) {
            $object->port0 = $this->denormalizer->denormalize($data['port0'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('port1', $data)) {
            $object->port1 = $this->denormalizer->denormalize($data['port1'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('port2', $data)) {
            $object->port2 = $this->denormalizer->denormalize($data['port2'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('port3', $data)) {
            $object->port3 = $this->denormalizer->denormalize($data['port3'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('port4', $data)) {
            $object->port4 = $this->denormalizer->denormalize($data['port4'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('port5', $data)) {
            $object->port5 = $this->denormalizer->denormalize($data['port5'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('control', $data)) {
            $object->control = $this->denormalizer->denormalize($data['control'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('cluster', $data)) {
            $object->cluster = $this->denormalizer->denormalize($data['cluster'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        if (\array_key_exists('management', $data)) {
            $object->management = $this->denormalizer->denormalize($data['management'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('timestamp', get_object_vars($data)) && null !== ($data->timestamp ?? null)) {
            $dataArray['timestamp'] = $data->timestamp;
        }
        if (array_key_exists('cpu', get_object_vars($data)) && null !== ($data->cpu ?? null)) {
            $normalized = $this->normalizer->normalize($data->cpu, 'json', $context);
            $dataArray['cpu'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('disk', get_object_vars($data)) && null !== ($data->disk ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->disk, 'json', $context);
            $dataArray['disk'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('memory', get_object_vars($data)) && null !== ($data->memory ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->memory, 'json', $context);
            $dataArray['memory'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('port0', get_object_vars($data)) && null !== ($data->port0 ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->port0, 'json', $context);
            $dataArray['port0'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('port1', get_object_vars($data)) && null !== ($data->port1 ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->port1, 'json', $context);
            $dataArray['port1'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('port2', get_object_vars($data)) && null !== ($data->port2 ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->port2, 'json', $context);
            $dataArray['port2'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (array_key_exists('port3', get_object_vars($data)) && null !== ($data->port3 ?? null)) {
            $normalized_6 = $this->normalizer->normalize($data->port3, 'json', $context);
            $dataArray['port3'] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        if (array_key_exists('port4', get_object_vars($data)) && null !== ($data->port4 ?? null)) {
            $normalized_7 = $this->normalizer->normalize($data->port4, 'json', $context);
            $dataArray['port4'] = \is_iterable($normalized_7) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_7) : $normalized_7;
        }
        if (array_key_exists('port5', get_object_vars($data)) && null !== ($data->port5 ?? null)) {
            $normalized_8 = $this->normalizer->normalize($data->port5, 'json', $context);
            $dataArray['port5'] = \is_iterable($normalized_8) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_8) : $normalized_8;
        }
        if (array_key_exists('control', get_object_vars($data)) && null !== ($data->control ?? null)) {
            $normalized_9 = $this->normalizer->normalize($data->control, 'json', $context);
            $dataArray['control'] = \is_iterable($normalized_9) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_9) : $normalized_9;
        }
        if (array_key_exists('cluster', get_object_vars($data)) && null !== ($data->cluster ?? null)) {
            $normalized_10 = $this->normalizer->normalize($data->cluster, 'json', $context);
            $dataArray['cluster'] = \is_iterable($normalized_10) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_10) : $normalized_10;
        }
        if (array_key_exists('management', get_object_vars($data)) && null !== ($data->management ?? null)) {
            $normalized_11 = $this->normalizer->normalize($data->management, 'json', $context);
            $dataArray['management'] = \is_iterable($normalized_11) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_11) : $normalized_11;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem::class => false];
    }
}