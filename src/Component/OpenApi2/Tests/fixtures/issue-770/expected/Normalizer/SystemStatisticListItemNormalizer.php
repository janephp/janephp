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
class SystemStatisticListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItem();
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
            $object->setTimestamp($data['timestamp']);
        }
        if (\array_key_exists('cpu', $data)) {
            $object->setCpu($this->denormalizer->denormalize($data['cpu'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemCpu::class, 'json', $context));
        }
        if (\array_key_exists('disk', $data)) {
            $object->setDisk($this->denormalizer->denormalize($data['disk'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemDisk::class, 'json', $context));
        }
        if (\array_key_exists('memory', $data)) {
            $object->setMemory($this->denormalizer->denormalize($data['memory'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItemMemory::class, 'json', $context));
        }
        if (\array_key_exists('port0', $data)) {
            $object->setPort0($this->denormalizer->denormalize($data['port0'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('port1', $data)) {
            $object->setPort1($this->denormalizer->denormalize($data['port1'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('port2', $data)) {
            $object->setPort2($this->denormalizer->denormalize($data['port2'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('port3', $data)) {
            $object->setPort3($this->denormalizer->denormalize($data['port3'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('port4', $data)) {
            $object->setPort4($this->denormalizer->denormalize($data['port4'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('port5', $data)) {
            $object->setPort5($this->denormalizer->denormalize($data['port5'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('control', $data)) {
            $object->setControl($this->denormalizer->denormalize($data['control'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('cluster', $data)) {
            $object->setCluster($this->denormalizer->denormalize($data['cluster'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        if (\array_key_exists('management', $data)) {
            $object->setManagement($this->denormalizer->denormalize($data['management'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('timestamp') && null !== $data->getTimestamp()) {
            $dataArray['timestamp'] = $data->getTimestamp();
        }
        if ($data->isInitialized('cpu') && null !== $data->getCpu()) {
            $dataArray['cpu'] = $data->getCpu() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getCpu(), 'json', $context));
        }
        if ($data->isInitialized('disk') && null !== $data->getDisk()) {
            $dataArray['disk'] = $data->getDisk() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getDisk(), 'json', $context));
        }
        if ($data->isInitialized('memory') && null !== $data->getMemory()) {
            $dataArray['memory'] = $data->getMemory() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getMemory(), 'json', $context));
        }
        if ($data->isInitialized('port0') && null !== $data->getPort0()) {
            $dataArray['port0'] = $data->getPort0() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort0(), 'json', $context));
        }
        if ($data->isInitialized('port1') && null !== $data->getPort1()) {
            $dataArray['port1'] = $data->getPort1() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort1(), 'json', $context));
        }
        if ($data->isInitialized('port2') && null !== $data->getPort2()) {
            $dataArray['port2'] = $data->getPort2() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort2(), 'json', $context));
        }
        if ($data->isInitialized('port3') && null !== $data->getPort3()) {
            $dataArray['port3'] = $data->getPort3() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort3(), 'json', $context));
        }
        if ($data->isInitialized('port4') && null !== $data->getPort4()) {
            $dataArray['port4'] = $data->getPort4() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort4(), 'json', $context));
        }
        if ($data->isInitialized('port5') && null !== $data->getPort5()) {
            $dataArray['port5'] = $data->getPort5() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getPort5(), 'json', $context));
        }
        if ($data->isInitialized('control') && null !== $data->getControl()) {
            $dataArray['control'] = $data->getControl() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getControl(), 'json', $context));
        }
        if ($data->isInitialized('cluster') && null !== $data->getCluster()) {
            $dataArray['cluster'] = $data->getCluster() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getCluster(), 'json', $context));
        }
        if ($data->isInitialized('management') && null !== $data->getManagement()) {
            $dataArray['management'] = $data->getManagement() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getManagement(), 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemStatisticListItem::class => false];
    }
}