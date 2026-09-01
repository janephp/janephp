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
class SystemSystemSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apNumberLimitEnabled', $data) && \is_int($data['apNumberLimitEnabled'])) {
            $data['apNumberLimitEnabled'] = (bool) $data['apNumberLimitEnabled'];
        }
        if (\array_key_exists('apMacOUIEnabled', $data) && \is_int($data['apMacOUIEnabled'])) {
            $data['apMacOUIEnabled'] = (bool) $data['apMacOUIEnabled'];
        }
        if (\array_key_exists('apNumberLimitEnabled', $data)) {
            $object->apNumberLimitEnabled = $data['apNumberLimitEnabled'];
        }
        if (\array_key_exists('apNumberLimitSettingsOfDomain', $data)) {
            $values = [];
            foreach ($data['apNumberLimitSettingsOfDomain'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApNumberLimitSettingOfDomain::class, 'json', $context);
            }
            $object->apNumberLimitSettingsOfDomain = $values;
        }
        if (\array_key_exists('apNumberLimitSettingsOfZone', $data)) {
            $values_1 = [];
            foreach ($data['apNumberLimitSettingsOfZone'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemApNumberLimitSettingOfZone::class, 'json', $context);
            }
            $object->apNumberLimitSettingsOfZone = $values_1;
        }
        if (\array_key_exists('apMacOUIEnabled', $data)) {
            $object->apMacOUIEnabled = $data['apMacOUIEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apNumberLimitEnabled', get_object_vars($data)) && null !== ($data->apNumberLimitEnabled ?? null)) {
            $dataArray['apNumberLimitEnabled'] = $data->apNumberLimitEnabled ?? null;
        }
        if (array_key_exists('apNumberLimitSettingsOfDomain', get_object_vars($data)) && null !== ($data->apNumberLimitSettingsOfDomain ?? null)) {
            $values = [];
            foreach ($data->apNumberLimitSettingsOfDomain ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['apNumberLimitSettingsOfDomain'] = $values;
        }
        if (array_key_exists('apNumberLimitSettingsOfZone', get_object_vars($data)) && null !== ($data->apNumberLimitSettingsOfZone ?? null)) {
            $values_1 = [];
            foreach ($data->apNumberLimitSettingsOfZone ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['apNumberLimitSettingsOfZone'] = $values_1;
        }
        if (array_key_exists('apMacOUIEnabled', get_object_vars($data)) && null !== ($data->apMacOUIEnabled ?? null)) {
            $dataArray['apMacOUIEnabled'] = $data->apMacOUIEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemSystemSettings::class => false];
    }
}