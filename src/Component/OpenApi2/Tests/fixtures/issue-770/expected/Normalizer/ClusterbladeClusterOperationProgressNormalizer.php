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
class ClusterbladeClusterOperationProgressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterOperationProgress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterOperationProgress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterOperationProgress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('operation', $data)) {
            $object->operation = $data['operation'];
        }
        if (\array_key_exists('overallProgress', $data)) {
            $object->overallProgress = $data['overallProgress'];
        }
        if (\array_key_exists('previousOperationRecord', $data)) {
            $object->previousOperationRecord = $this->denormalizer->denormalize($data['previousOperationRecord'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladePreviousOperationRecord::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('operation', get_object_vars($data)) && null !== ($data->operation ?? null)) {
            $dataArray['operation'] = $data->operation ?? null;
        }
        if (array_key_exists('overallProgress', get_object_vars($data)) && null !== ($data->overallProgress ?? null)) {
            $dataArray['overallProgress'] = $data->overallProgress ?? null;
        }
        if (array_key_exists('previousOperationRecord', get_object_vars($data)) && null !== ($data->previousOperationRecord ?? null)) {
            $dataArray['previousOperationRecord'] = ($data->previousOperationRecord ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->previousOperationRecord ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ClusterbladeClusterOperationProgress::class => false];
    }
}