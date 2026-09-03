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
class ZoneApFirmwareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmware::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmware::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmware();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('supported', $data) && \is_int($data['supported'])) {
            $data['supported'] = (bool) $data['supported'];
        }
        if (\array_key_exists('firmwareVersion', $data)) {
            $object->firmwareVersion = $data['firmwareVersion'];
        }
        if (\array_key_exists('unsupportedApModelSummary', $data)) {
            $values = [];
            foreach ($data['unsupportedApModelSummary'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneUnsupportedApModel::class, 'json', $context);
            }
            $object->unsupportedApModelSummary = $values;
        }
        if (\array_key_exists('supported', $data)) {
            $object->supported = $data['supported'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('firmwareVersion', get_object_vars($data)) && null !== ($data->firmwareVersion ?? null)) {
            $dataArray['firmwareVersion'] = $data->firmwareVersion ?? null;
        }
        if (array_key_exists('unsupportedApModelSummary', get_object_vars($data)) && null !== ($data->unsupportedApModelSummary ?? null)) {
            $values = [];
            foreach ($data->unsupportedApModelSummary ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['unsupportedApModelSummary'] = $values;
        }
        if (array_key_exists('supported', get_object_vars($data)) && null !== ($data->supported ?? null)) {
            $dataArray['supported'] = $data->supported ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ZoneApFirmware::class => false];
    }
}