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
class SystemSystemSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemSettings();
        if (\array_key_exists('apNumberLimitEnabled', $data) && \is_int($data['apNumberLimitEnabled'])) {
            $data['apNumberLimitEnabled'] = (bool) $data['apNumberLimitEnabled'];
        }
        if (\array_key_exists('apMacOUIEnabled', $data) && \is_int($data['apMacOUIEnabled'])) {
            $data['apMacOUIEnabled'] = (bool) $data['apMacOUIEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apNumberLimitEnabled', $data)) {
            $object->setApNumberLimitEnabled($data['apNumberLimitEnabled']);
        }
        if (\array_key_exists('apNumberLimitSettingsOfDomain', $data)) {
            $values = [];
            foreach ($data['apNumberLimitSettingsOfDomain'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfDomain::class, 'json', $context);
            }
            $object->setApNumberLimitSettingsOfDomain($values);
        }
        if (\array_key_exists('apNumberLimitSettingsOfZone', $data)) {
            $values_1 = [];
            foreach ($data['apNumberLimitSettingsOfZone'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemApNumberLimitSettingOfZone::class, 'json', $context);
            }
            $object->setApNumberLimitSettingsOfZone($values_1);
        }
        if (\array_key_exists('apMacOUIEnabled', $data)) {
            $object->setApMacOUIEnabled($data['apMacOUIEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apNumberLimitEnabled') && null !== $data->getApNumberLimitEnabled()) {
            $dataArray['apNumberLimitEnabled'] = $data->getApNumberLimitEnabled();
        }
        if ($data->isInitialized('apNumberLimitSettingsOfDomain') && null !== $data->getApNumberLimitSettingsOfDomain()) {
            $values = [];
            foreach ($data->getApNumberLimitSettingsOfDomain() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['apNumberLimitSettingsOfDomain'] = $values;
        }
        if ($data->isInitialized('apNumberLimitSettingsOfZone') && null !== $data->getApNumberLimitSettingsOfZone()) {
            $values_1 = [];
            foreach ($data->getApNumberLimitSettingsOfZone() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['apNumberLimitSettingsOfZone'] = $values_1;
        }
        if ($data->isInitialized('apMacOUIEnabled') && null !== $data->getApMacOUIEnabled()) {
            $dataArray['apMacOUIEnabled'] = $data->getApMacOUIEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemSystemSettings::class => false];
    }
}