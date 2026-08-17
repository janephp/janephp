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
class SystemPortStatisticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('rxBps', $data) && \is_int($data['rxBps'])) {
            $data['rxBps'] = (float) $data['rxBps'];
        }
        if (\array_key_exists('rxBpsMax', $data) && \is_int($data['rxBpsMax'])) {
            $data['rxBpsMax'] = (float) $data['rxBpsMax'];
        }
        if (\array_key_exists('rxBpsMin', $data) && \is_int($data['rxBpsMin'])) {
            $data['rxBpsMin'] = (float) $data['rxBpsMin'];
        }
        if (\array_key_exists('rxBytes', $data) && \is_int($data['rxBytes'])) {
            $data['rxBytes'] = (float) $data['rxBytes'];
        }
        if (\array_key_exists('rxDropped', $data) && \is_int($data['rxDropped'])) {
            $data['rxDropped'] = (float) $data['rxDropped'];
        }
        if (\array_key_exists('rxPackets', $data) && \is_int($data['rxPackets'])) {
            $data['rxPackets'] = (float) $data['rxPackets'];
        }
        if (\array_key_exists('txBps', $data) && \is_int($data['txBps'])) {
            $data['txBps'] = (float) $data['txBps'];
        }
        if (\array_key_exists('txBpsMax', $data) && \is_int($data['txBpsMax'])) {
            $data['txBpsMax'] = (float) $data['txBpsMax'];
        }
        if (\array_key_exists('txBpsMin', $data) && \is_int($data['txBpsMin'])) {
            $data['txBpsMin'] = (float) $data['txBpsMin'];
        }
        if (\array_key_exists('txBytes', $data) && \is_int($data['txBytes'])) {
            $data['txBytes'] = (float) $data['txBytes'];
        }
        if (\array_key_exists('txDropped', $data) && \is_int($data['txDropped'])) {
            $data['txDropped'] = (float) $data['txDropped'];
        }
        if (\array_key_exists('txPackets', $data) && \is_int($data['txPackets'])) {
            $data['txPackets'] = (float) $data['txPackets'];
        }
        if (\array_key_exists('rxBps', $data)) {
            $object->setRxBps($data['rxBps']);
        }
        if (\array_key_exists('rxBpsMax', $data)) {
            $object->setRxBpsMax($data['rxBpsMax']);
        }
        if (\array_key_exists('rxBpsMin', $data)) {
            $object->setRxBpsMin($data['rxBpsMin']);
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->setRxBytes($data['rxBytes']);
        }
        if (\array_key_exists('rxDropped', $data)) {
            $object->setRxDropped($data['rxDropped']);
        }
        if (\array_key_exists('rxPackets', $data)) {
            $object->setRxPackets($data['rxPackets']);
        }
        if (\array_key_exists('txBps', $data)) {
            $object->setTxBps($data['txBps']);
        }
        if (\array_key_exists('txBpsMax', $data)) {
            $object->setTxBpsMax($data['txBpsMax']);
        }
        if (\array_key_exists('txBpsMin', $data)) {
            $object->setTxBpsMin($data['txBpsMin']);
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->setTxBytes($data['txBytes']);
        }
        if (\array_key_exists('txDropped', $data)) {
            $object->setTxDropped($data['txDropped']);
        }
        if (\array_key_exists('txPackets', $data)) {
            $object->setTxPackets($data['txPackets']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('rxBps') && null !== $data->getRxBps()) {
            $dataArray['rxBps'] = $data->getRxBps();
        }
        if ($data->isInitialized('rxBpsMax') && null !== $data->getRxBpsMax()) {
            $dataArray['rxBpsMax'] = $data->getRxBpsMax();
        }
        if ($data->isInitialized('rxBpsMin') && null !== $data->getRxBpsMin()) {
            $dataArray['rxBpsMin'] = $data->getRxBpsMin();
        }
        if ($data->isInitialized('rxBytes') && null !== $data->getRxBytes()) {
            $dataArray['rxBytes'] = $data->getRxBytes();
        }
        if ($data->isInitialized('rxDropped') && null !== $data->getRxDropped()) {
            $dataArray['rxDropped'] = $data->getRxDropped();
        }
        if ($data->isInitialized('rxPackets') && null !== $data->getRxPackets()) {
            $dataArray['rxPackets'] = $data->getRxPackets();
        }
        if ($data->isInitialized('txBps') && null !== $data->getTxBps()) {
            $dataArray['txBps'] = $data->getTxBps();
        }
        if ($data->isInitialized('txBpsMax') && null !== $data->getTxBpsMax()) {
            $dataArray['txBpsMax'] = $data->getTxBpsMax();
        }
        if ($data->isInitialized('txBpsMin') && null !== $data->getTxBpsMin()) {
            $dataArray['txBpsMin'] = $data->getTxBpsMin();
        }
        if ($data->isInitialized('txBytes') && null !== $data->getTxBytes()) {
            $dataArray['txBytes'] = $data->getTxBytes();
        }
        if ($data->isInitialized('txDropped') && null !== $data->getTxDropped()) {
            $dataArray['txDropped'] = $data->getTxDropped();
        }
        if ($data->isInitialized('txPackets') && null !== $data->getTxPackets()) {
            $dataArray['txPackets'] = $data->getTxPackets();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemPortStatistic::class => false];
    }
}