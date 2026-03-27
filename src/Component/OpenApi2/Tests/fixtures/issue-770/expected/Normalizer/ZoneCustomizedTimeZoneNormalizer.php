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
class ZoneCustomizedTimeZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCustomizedTimeZone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCustomizedTimeZone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCustomizedTimeZone();
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
            $object->setAbbreviation($data['abbreviation']);
        }
        if (\array_key_exists('gmtOffset', $data)) {
            $object->setGmtOffset($data['gmtOffset']);
        }
        if (\array_key_exists('gmtOffsetMinute', $data)) {
            $object->setGmtOffsetMinute($data['gmtOffsetMinute']);
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($this->denormalizer->denormalize($data['start'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDaylightSavingTime::class, 'json', $context));
        }
        if (\array_key_exists('end', $data)) {
            $object->setEnd($this->denormalizer->denormalize($data['end'], \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneDaylightSavingTime::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['abbreviation'] = $data->getAbbreviation();
        $dataArray['gmtOffset'] = $data->getGmtOffset();
        $dataArray['gmtOffsetMinute'] = $data->getGmtOffsetMinute();
        if ($data->isInitialized('start') && null !== $data->getStart()) {
            $dataArray['start'] = $this->normalizer->normalize($data->getStart(), 'json', $context);
        }
        if ($data->isInitialized('end') && null !== $data->getEnd()) {
            $dataArray['end'] = $this->normalizer->normalize($data->getEnd(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneCustomizedTimeZone::class => false];
    }
}