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
class ProfileBonjourFencingStatisticNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic();
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
        if (\array_key_exists('forwardedPackets', $data)) {
            $object->forwardedPackets = $data['forwardedPackets'];
        }
        if (\array_key_exists('droppedPacketsDueToServiceType', $data)) {
            $object->droppedPacketsDueToServiceType = $data['droppedPacketsDueToServiceType'];
        }
        if (\array_key_exists('droppedPacketsDueToNeighbor', $data)) {
            $object->droppedPacketsDueToNeighbor = $data['droppedPacketsDueToNeighbor'];
        }
        if (\array_key_exists('serviceList', $data)) {
            $values = [];
            foreach ($data['serviceList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class, 'json', $context);
            }
            $object->serviceList = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apMac', get_object_vars($data)) && null !== ($data->apMac ?? null)) {
            $dataArray['apMac'] = $data->apMac ?? null;
        }
        if (array_key_exists('forwardedPackets', get_object_vars($data)) && null !== ($data->forwardedPackets ?? null)) {
            $dataArray['forwardedPackets'] = $data->forwardedPackets ?? null;
        }
        if (array_key_exists('droppedPacketsDueToServiceType', get_object_vars($data)) && null !== ($data->droppedPacketsDueToServiceType ?? null)) {
            $dataArray['droppedPacketsDueToServiceType'] = $data->droppedPacketsDueToServiceType ?? null;
        }
        if (array_key_exists('droppedPacketsDueToNeighbor', get_object_vars($data)) && null !== ($data->droppedPacketsDueToNeighbor ?? null)) {
            $dataArray['droppedPacketsDueToNeighbor'] = $data->droppedPacketsDueToNeighbor ?? null;
        }
        if (array_key_exists('serviceList', get_object_vars($data)) && null !== ($data->serviceList ?? null)) {
            $values = [];
            foreach ($data->serviceList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['serviceList'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic::class => false];
    }
}