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
class ApRoutineConfigIntervalApRoutineConfigIntervalRspNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp();
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
            $object->setApRoutineConfigInterval($data['apRoutineConfigInterval']);
        }
        if (\array_key_exists('upperBound', $data)) {
            $object->setUpperBound($data['upperBound']);
        }
        if (\array_key_exists('lowerBound', $data)) {
            $object->setLowerBound($data['lowerBound']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apRoutineConfigInterval') && null !== $data->getApRoutineConfigInterval()) {
            $dataArray['apRoutineConfigInterval'] = $data->getApRoutineConfigInterval();
        }
        if ($data->isInitialized('upperBound') && null !== $data->getUpperBound()) {
            $dataArray['upperBound'] = $data->getUpperBound();
        }
        if ($data->isInitialized('lowerBound') && null !== $data->getLowerBound()) {
            $dataArray['lowerBound'] = $data->getLowerBound();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApRoutineConfigIntervalApRoutineConfigIntervalRsp::class => false];
    }
}