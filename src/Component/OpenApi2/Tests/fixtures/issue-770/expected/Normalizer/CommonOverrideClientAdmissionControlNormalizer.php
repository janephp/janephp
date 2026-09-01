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
            $data['minClientThroughputMbps'] = (float) $data['minClientThroughputMbps'];
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('enabled', $data)) {
            $object->enabled = $data['enabled'];
        }
        if (\array_key_exists('maxRadioLoadPercent', $data)) {
            $object->maxRadioLoadPercent = $data['maxRadioLoadPercent'];
        }
        if (\array_key_exists('minClientCount', $data)) {
            $object->minClientCount = $data['minClientCount'];
        }
        if (\array_key_exists('minClientThroughputMbps', $data)) {
            $object->minClientThroughputMbps = $data['minClientThroughputMbps'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('enabled', get_object_vars($data)) && null !== ($data->enabled ?? null)) {
            $dataArray['enabled'] = $data->enabled ?? null;
        }
        if (array_key_exists('maxRadioLoadPercent', get_object_vars($data)) && null !== ($data->maxRadioLoadPercent ?? null)) {
            $dataArray['maxRadioLoadPercent'] = $data->maxRadioLoadPercent ?? null;
        }
        if (array_key_exists('minClientCount', get_object_vars($data)) && null !== ($data->minClientCount ?? null)) {
            $dataArray['minClientCount'] = $data->minClientCount ?? null;
        }
        if (array_key_exists('minClientThroughputMbps', get_object_vars($data)) && null !== ($data->minClientThroughputMbps ?? null)) {
            $dataArray['minClientThroughputMbps'] = $data->minClientThroughputMbps ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonOverrideClientAdmissionControl::class => false];
    }
}