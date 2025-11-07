<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GlbSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\GlbSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\GlbSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\GlbSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('target_protocol', $data)) {
            $object->setTargetProtocol($data['target_protocol']);
            unset($data['target_protocol']);
        }
        if (\array_key_exists('target_port', $data)) {
            $object->setTargetPort($data['target_port']);
            unset($data['target_port']);
        }
        if (\array_key_exists('cdn', $data)) {
            $object->setCdn($this->denormalizer->denormalize($data['cdn'], \Jane\Generated\DigitalOcean\Model\GlbSettingsCdn::class, 'json', $context));
            unset($data['cdn']);
        }
        if (\array_key_exists('region_priorities', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['region_priorities'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setRegionPriorities($values);
            unset($data['region_priorities']);
        }
        if (\array_key_exists('failover_threshold', $data)) {
            $object->setFailoverThreshold($data['failover_threshold']);
            unset($data['failover_threshold']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('targetProtocol') && null !== $data->getTargetProtocol()) {
            $dataArray['target_protocol'] = $data->getTargetProtocol();
        }
        if ($data->isInitialized('targetPort') && null !== $data->getTargetPort()) {
            $dataArray['target_port'] = $data->getTargetPort();
        }
        if ($data->isInitialized('cdn') && null !== $data->getCdn()) {
            $dataArray['cdn'] = $this->normalizer->normalize($data->getCdn(), 'json', $context);
        }
        if ($data->isInitialized('regionPriorities') && null !== $data->getRegionPriorities()) {
            $values = [];
            foreach ($data->getRegionPriorities() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['region_priorities'] = $values;
        }
        if ($data->isInitialized('failoverThreshold') && null !== $data->getFailoverThreshold()) {
            $dataArray['failover_threshold'] = $data->getFailoverThreshold();
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\GlbSettings::class => false];
    }
}