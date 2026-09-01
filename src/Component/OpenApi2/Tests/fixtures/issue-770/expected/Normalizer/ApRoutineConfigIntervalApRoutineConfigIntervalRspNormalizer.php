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
class ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('apRoutineConfigInterval', $data)) {
            $object->apRoutineConfigInterval = $data['apRoutineConfigInterval'];
        }
        if (\array_key_exists('upperBound', $data)) {
            $object->upperBound = $data['upperBound'];
        }
        if (\array_key_exists('lowerBound', $data)) {
            $object->lowerBound = $data['lowerBound'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('apRoutineConfigInterval', get_object_vars($data)) && null !== ($data->apRoutineConfigInterval ?? null)) {
            $dataArray['apRoutineConfigInterval'] = $data->apRoutineConfigInterval ?? null;
        }
        if (array_key_exists('upperBound', get_object_vars($data)) && null !== ($data->upperBound ?? null)) {
            $dataArray['upperBound'] = $data->upperBound ?? null;
        }
        if (array_key_exists('lowerBound', get_object_vars($data)) && null !== ($data->lowerBound ?? null)) {
            $dataArray['lowerBound'] = $data->lowerBound ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class => false];
    }
}