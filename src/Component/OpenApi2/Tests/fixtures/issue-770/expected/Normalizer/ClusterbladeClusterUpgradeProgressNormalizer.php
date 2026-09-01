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
class ClusterbladeClusterUpgradeProgressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isSelfBladeRebooting', $data) && \is_int($data['isSelfBladeRebooting'])) {
            $data['isSelfBladeRebooting'] = (bool) $data['isSelfBladeRebooting'];
        }
        if (\array_key_exists('clusterOperationBlockUI', $data) && \is_int($data['clusterOperationBlockUI'])) {
            $data['clusterOperationBlockUI'] = (bool) $data['clusterOperationBlockUI'];
        }
        if (\array_key_exists('operation', $data)) {
            $object->operation = $data['operation'];
        }
        if (\array_key_exists('overallProgress', $data)) {
            $object->overallProgress = $data['overallProgress'];
        }
        if (\array_key_exists('previousOperationRecord', $data)) {
            $object->previousOperationRecord = $this->denormalizer->denormalize($data['previousOperationRecord'], \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladePreviousOperationRecord::class, 'json', $context);
        }
        if (\array_key_exists('isSelfBladeRebooting', $data)) {
            $object->isSelfBladeRebooting = $data['isSelfBladeRebooting'];
        }
        if (\array_key_exists('bladeProgresss', $data)) {
            $values = [];
            foreach ($data['bladeProgresss'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeBladeProgress::class, 'json', $context);
            }
            $object->bladeProgresss = $values;
        }
        if (\array_key_exists('clusterSubTaskState', $data)) {
            $object->clusterSubTaskState = $data['clusterSubTaskState'];
        }
        if (\array_key_exists('clusterOperationBlockUI', $data)) {
            $object->clusterOperationBlockUI = $data['clusterOperationBlockUI'];
        }
        if (\array_key_exists('clusterOperationDisplayMsg', $data)) {
            $object->clusterOperationDisplayMsg = $data['clusterOperationDisplayMsg'];
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
            $dataArray['previousOperationRecord'] = ($data->previousOperationRecord ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->previousOperationRecord ?? null, 'json', $context));
        }
        if (array_key_exists('isSelfBladeRebooting', get_object_vars($data)) && null !== ($data->isSelfBladeRebooting ?? null)) {
            $dataArray['isSelfBladeRebooting'] = $data->isSelfBladeRebooting ?? null;
        }
        if (array_key_exists('bladeProgresss', get_object_vars($data)) && null !== ($data->bladeProgresss ?? null)) {
            $values = [];
            foreach ($data->bladeProgresss ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['bladeProgresss'] = $values;
        }
        if (array_key_exists('clusterSubTaskState', get_object_vars($data)) && null !== ($data->clusterSubTaskState ?? null)) {
            $dataArray['clusterSubTaskState'] = $data->clusterSubTaskState ?? null;
        }
        if (array_key_exists('clusterOperationBlockUI', get_object_vars($data)) && null !== ($data->clusterOperationBlockUI ?? null)) {
            $dataArray['clusterOperationBlockUI'] = $data->clusterOperationBlockUI ?? null;
        }
        if (array_key_exists('clusterOperationDisplayMsg', get_object_vars($data)) && null !== ($data->clusterOperationDisplayMsg ?? null)) {
            $dataArray['clusterOperationDisplayMsg'] = $data->clusterOperationDisplayMsg ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress::class => false];
    }
}