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
class NorthboundDataStreamingNorthboundDataStreamingSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data) && \is_int($data['northboundDataStreamingEnabled'])) {
            $data['northboundDataStreamingEnabled'] = (bool) $data['northboundDataStreamingEnabled'];
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data) && \is_int($data['streamingByDomainZoneEnabled'])) {
            $data['streamingByDomainZoneEnabled'] = (bool) $data['streamingByDomainZoneEnabled'];
        }
        if (\array_key_exists('northboundDataStreamingEnabled', $data)) {
            $object->setNorthboundDataStreamingEnabled($data['northboundDataStreamingEnabled']);
        }
        if (\array_key_exists('streamingByDomainZoneEnabled', $data)) {
            $object->setStreamingByDomainZoneEnabled($data['streamingByDomainZoneEnabled']);
        }
        if (\array_key_exists('streamingDomainIds', $data)) {
            $values = [];
            foreach ($data['streamingDomainIds'] as $value) {
                $values[] = $value;
            }
            $object->setStreamingDomainIds($values);
        }
        if (\array_key_exists('streamingZoneIds', $data)) {
            $values_1 = [];
            foreach ($data['streamingZoneIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setStreamingZoneIds($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['northboundDataStreamingEnabled'] = $data->getNorthboundDataStreamingEnabled();
        $dataArray['streamingByDomainZoneEnabled'] = $data->getStreamingByDomainZoneEnabled();
        if ($data->isInitialized('streamingDomainIds') && null !== $data->getStreamingDomainIds()) {
            $values = [];
            foreach ($data->getStreamingDomainIds() as $value) {
                $values[] = $value;
            }
            $dataArray['streamingDomainIds'] = $values;
        }
        if ($data->isInitialized('streamingZoneIds') && null !== $data->getStreamingZoneIds()) {
            $values_1 = [];
            foreach ($data->getStreamingZoneIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['streamingZoneIds'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\NorthboundDataStreamingNorthboundDataStreamingSettings::class => false];
    }
}