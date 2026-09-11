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
class ZoneCustomizedTimeZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCustomizedTimeZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCustomizedTimeZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCustomizedTimeZone();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('abbreviation', $data)) {
            $object->abbreviation = $data['abbreviation'];
        }
        if (\array_key_exists('gmtOffset', $data)) {
            $object->gmtOffset = $data['gmtOffset'];
        }
        if (\array_key_exists('gmtOffsetMinute', $data)) {
            $object->gmtOffsetMinute = $data['gmtOffsetMinute'];
        }
        if (\array_key_exists('start', $data)) {
            $object->start = $this->denormalizer->denormalize($data['start'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDaylightSavingTime::class, 'json', $context);
        }
        if (\array_key_exists('end', $data)) {
            $object->end = $this->denormalizer->denormalize($data['end'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneDaylightSavingTime::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['abbreviation'] = $data->abbreviation;
        $dataArray['gmtOffset'] = $data->gmtOffset;
        $dataArray['gmtOffsetMinute'] = $data->gmtOffsetMinute;
        if (array_key_exists('start', get_object_vars($data)) && null !== ($data->start ?? null)) {
            $normalized = $this->normalizer->normalize($data->start, 'json', $context);
            $dataArray['start'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('end', get_object_vars($data)) && null !== ($data->end ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->end, 'json', $context);
            $dataArray['end'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneCustomizedTimeZone::class => false];
    }
}