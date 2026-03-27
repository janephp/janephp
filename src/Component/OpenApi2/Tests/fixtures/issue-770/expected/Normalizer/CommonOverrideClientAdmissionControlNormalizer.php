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
class CommonOverrideClientAdmissionControlNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('minClientThroughputMbps', $data) && \is_int($data['minClientThroughputMbps'])) {
            $data['minClientThroughputMbps'] = (double) $data['minClientThroughputMbps'];
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('maxRadioLoadPercent', $data)) {
            $object->setMaxRadioLoadPercent($data['maxRadioLoadPercent']);
        }
        if (\array_key_exists('minClientCount', $data)) {
            $object->setMinClientCount($data['minClientCount']);
        }
        if (\array_key_exists('minClientThroughputMbps', $data)) {
            $object->setMinClientThroughputMbps($data['minClientThroughputMbps']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('enabled') && null !== $data->getEnabled()) {
            $dataArray['enabled'] = $data->getEnabled();
        }
        if ($data->isInitialized('maxRadioLoadPercent') && null !== $data->getMaxRadioLoadPercent()) {
            $dataArray['maxRadioLoadPercent'] = $data->getMaxRadioLoadPercent();
        }
        if ($data->isInitialized('minClientCount') && null !== $data->getMinClientCount()) {
            $dataArray['minClientCount'] = $data->getMinClientCount();
        }
        if ($data->isInitialized('minClientThroughputMbps') && null !== $data->getMinClientThroughputMbps()) {
            $dataArray['minClientThroughputMbps'] = $data->getMinClientThroughputMbps();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class => false];
    }
}