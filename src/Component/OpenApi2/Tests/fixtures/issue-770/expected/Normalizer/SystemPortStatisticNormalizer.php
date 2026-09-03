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
class SystemPortStatisticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic();
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
            $object->rxBps = $data['rxBps'];
        }
        if (\array_key_exists('rxBpsMax', $data)) {
            $object->rxBpsMax = $data['rxBpsMax'];
        }
        if (\array_key_exists('rxBpsMin', $data)) {
            $object->rxBpsMin = $data['rxBpsMin'];
        }
        if (\array_key_exists('rxBytes', $data)) {
            $object->rxBytes = $data['rxBytes'];
        }
        if (\array_key_exists('rxDropped', $data)) {
            $object->rxDropped = $data['rxDropped'];
        }
        if (\array_key_exists('rxPackets', $data)) {
            $object->rxPackets = $data['rxPackets'];
        }
        if (\array_key_exists('txBps', $data)) {
            $object->txBps = $data['txBps'];
        }
        if (\array_key_exists('txBpsMax', $data)) {
            $object->txBpsMax = $data['txBpsMax'];
        }
        if (\array_key_exists('txBpsMin', $data)) {
            $object->txBpsMin = $data['txBpsMin'];
        }
        if (\array_key_exists('txBytes', $data)) {
            $object->txBytes = $data['txBytes'];
        }
        if (\array_key_exists('txDropped', $data)) {
            $object->txDropped = $data['txDropped'];
        }
        if (\array_key_exists('txPackets', $data)) {
            $object->txPackets = $data['txPackets'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('rxBps', get_object_vars($data)) && null !== ($data->rxBps ?? null)) {
            $dataArray['rxBps'] = $data->rxBps ?? null;
        }
        if (array_key_exists('rxBpsMax', get_object_vars($data)) && null !== ($data->rxBpsMax ?? null)) {
            $dataArray['rxBpsMax'] = $data->rxBpsMax ?? null;
        }
        if (array_key_exists('rxBpsMin', get_object_vars($data)) && null !== ($data->rxBpsMin ?? null)) {
            $dataArray['rxBpsMin'] = $data->rxBpsMin ?? null;
        }
        if (array_key_exists('rxBytes', get_object_vars($data)) && null !== ($data->rxBytes ?? null)) {
            $dataArray['rxBytes'] = $data->rxBytes ?? null;
        }
        if (array_key_exists('rxDropped', get_object_vars($data)) && null !== ($data->rxDropped ?? null)) {
            $dataArray['rxDropped'] = $data->rxDropped ?? null;
        }
        if (array_key_exists('rxPackets', get_object_vars($data)) && null !== ($data->rxPackets ?? null)) {
            $dataArray['rxPackets'] = $data->rxPackets ?? null;
        }
        if (array_key_exists('txBps', get_object_vars($data)) && null !== ($data->txBps ?? null)) {
            $dataArray['txBps'] = $data->txBps ?? null;
        }
        if (array_key_exists('txBpsMax', get_object_vars($data)) && null !== ($data->txBpsMax ?? null)) {
            $dataArray['txBpsMax'] = $data->txBpsMax ?? null;
        }
        if (array_key_exists('txBpsMin', get_object_vars($data)) && null !== ($data->txBpsMin ?? null)) {
            $dataArray['txBpsMin'] = $data->txBpsMin ?? null;
        }
        if (array_key_exists('txBytes', get_object_vars($data)) && null !== ($data->txBytes ?? null)) {
            $dataArray['txBytes'] = $data->txBytes ?? null;
        }
        if (array_key_exists('txDropped', get_object_vars($data)) && null !== ($data->txDropped ?? null)) {
            $dataArray['txDropped'] = $data->txDropped ?? null;
        }
        if (array_key_exists('txPackets', get_object_vars($data)) && null !== ($data->txPackets ?? null)) {
            $dataArray['txPackets'] = $data->txPackets ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemPortStatistic::class => false];
    }
}