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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingStatistic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('forwardedPackets', $data)) {
            $object->setForwardedPackets($data['forwardedPackets']);
        }
        if (\array_key_exists('droppedPacketsDueToServiceType', $data)) {
            $object->setDroppedPacketsDueToServiceType($data['droppedPacketsDueToServiceType']);
        }
        if (\array_key_exists('droppedPacketsDueToNeighbor', $data)) {
            $object->setDroppedPacketsDueToNeighbor($data['droppedPacketsDueToNeighbor']);
        }
        if (\array_key_exists('serviceList', $data)) {
            $values = [];
            foreach ($data['serviceList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingService::class, 'json', $context);
            }
            $object->setServiceList($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('forwardedPackets') && null !== $data->getForwardedPackets()) {
            $dataArray['forwardedPackets'] = $data->getForwardedPackets();
        }
        if ($data->isInitialized('droppedPacketsDueToServiceType') && null !== $data->getDroppedPacketsDueToServiceType()) {
            $dataArray['droppedPacketsDueToServiceType'] = $data->getDroppedPacketsDueToServiceType();
        }
        if ($data->isInitialized('droppedPacketsDueToNeighbor') && null !== $data->getDroppedPacketsDueToNeighbor()) {
            $dataArray['droppedPacketsDueToNeighbor'] = $data->getDroppedPacketsDueToNeighbor();
        }
        if ($data->isInitialized('serviceList') && null !== $data->getServiceList()) {
            $values = [];
            foreach ($data->getServiceList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
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