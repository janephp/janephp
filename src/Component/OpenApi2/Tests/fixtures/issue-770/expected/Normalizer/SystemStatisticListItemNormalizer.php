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
            $dataArray['timestamp'] = $data->timestamp ?? null;
        }
        if (array_key_exists('cpu', get_object_vars($data)) && null !== ($data->cpu ?? null)) {
            $dataArray['cpu'] = ($data->cpu ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->cpu ?? null, 'json', $context));
        }
        if (array_key_exists('disk', get_object_vars($data)) && null !== ($data->disk ?? null)) {
            $dataArray['disk'] = ($data->disk ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->disk ?? null, 'json', $context));
        }
        if (array_key_exists('memory', get_object_vars($data)) && null !== ($data->memory ?? null)) {
            $dataArray['memory'] = ($data->memory ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->memory ?? null, 'json', $context));
        }
        if (array_key_exists('port0', get_object_vars($data)) && null !== ($data->port0 ?? null)) {
            $dataArray['port0'] = ($data->port0 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port0 ?? null, 'json', $context));
        }
        if (array_key_exists('port1', get_object_vars($data)) && null !== ($data->port1 ?? null)) {
            $dataArray['port1'] = ($data->port1 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port1 ?? null, 'json', $context));
        }
        if (array_key_exists('port2', get_object_vars($data)) && null !== ($data->port2 ?? null)) {
            $dataArray['port2'] = ($data->port2 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port2 ?? null, 'json', $context));
        }
        if (array_key_exists('port3', get_object_vars($data)) && null !== ($data->port3 ?? null)) {
            $dataArray['port3'] = ($data->port3 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port3 ?? null, 'json', $context));
        }
        if (array_key_exists('port4', get_object_vars($data)) && null !== ($data->port4 ?? null)) {
            $dataArray['port4'] = ($data->port4 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port4 ?? null, 'json', $context));
        }
        if (array_key_exists('port5', get_object_vars($data)) && null !== ($data->port5 ?? null)) {
            $dataArray['port5'] = ($data->port5 ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->port5 ?? null, 'json', $context));
        }
        if (array_key_exists('control', get_object_vars($data)) && null !== ($data->control ?? null)) {
            $dataArray['control'] = ($data->control ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->control ?? null, 'json', $context));
        }
        if (array_key_exists('cluster', get_object_vars($data)) && null !== ($data->cluster ?? null)) {
            $dataArray['cluster'] = ($data->cluster ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->cluster ?? null, 'json', $context));
        }
        if (array_key_exists('management', get_object_vars($data)) && null !== ($data->management ?? null)) {
            $dataArray['management'] = ($data->management ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->management ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemStatisticListItem::class => false];
    }
}