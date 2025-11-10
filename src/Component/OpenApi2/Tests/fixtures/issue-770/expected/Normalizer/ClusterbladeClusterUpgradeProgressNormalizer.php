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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress();
        if (\array_key_exists('isSelfBladeRebooting', $data) && \is_int($data['isSelfBladeRebooting'])) {
            $data['isSelfBladeRebooting'] = (bool) $data['isSelfBladeRebooting'];
        }
        if (\array_key_exists('clusterOperationBlockUI', $data) && \is_int($data['clusterOperationBlockUI'])) {
            $data['clusterOperationBlockUI'] = (bool) $data['clusterOperationBlockUI'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operation', $data)) {
            $object->setOperation($data['operation']);
        }
        if (\array_key_exists('overallProgress', $data)) {
            $object->setOverallProgress($data['overallProgress']);
        }
        if (\array_key_exists('previousOperationRecord', $data)) {
            $object->setPreviousOperationRecord($this->denormalizer->denormalize($data['previousOperationRecord'], \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladePreviousOperationRecord::class, 'json', $context));
        }
        if (\array_key_exists('isSelfBladeRebooting', $data)) {
            $object->setIsSelfBladeRebooting($data['isSelfBladeRebooting']);
        }
        if (\array_key_exists('bladeProgresss', $data)) {
            $values = [];
            foreach ($data['bladeProgresss'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeBladeProgress::class, 'json', $context);
            }
            $object->setBladeProgresss($values);
        }
        if (\array_key_exists('clusterSubTaskState', $data)) {
            $object->setClusterSubTaskState($data['clusterSubTaskState']);
        }
        if (\array_key_exists('clusterOperationBlockUI', $data)) {
            $object->setClusterOperationBlockUI($data['clusterOperationBlockUI']);
        }
        if (\array_key_exists('clusterOperationDisplayMsg', $data)) {
            $object->setClusterOperationDisplayMsg($data['clusterOperationDisplayMsg']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('operation') && null !== $data->getOperation()) {
            $dataArray['operation'] = $data->getOperation();
        }
        if ($data->isInitialized('overallProgress') && null !== $data->getOverallProgress()) {
            $dataArray['overallProgress'] = $data->getOverallProgress();
        }
        if ($data->isInitialized('previousOperationRecord') && null !== $data->getPreviousOperationRecord()) {
            $dataArray['previousOperationRecord'] = $this->normalizer->normalize($data->getPreviousOperationRecord(), 'json', $context);
        }
        if ($data->isInitialized('isSelfBladeRebooting') && null !== $data->getIsSelfBladeRebooting()) {
            $dataArray['isSelfBladeRebooting'] = $data->getIsSelfBladeRebooting();
        }
        if ($data->isInitialized('bladeProgresss') && null !== $data->getBladeProgresss()) {
            $values = [];
            foreach ($data->getBladeProgresss() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['bladeProgresss'] = $values;
        }
        if ($data->isInitialized('clusterSubTaskState') && null !== $data->getClusterSubTaskState()) {
            $dataArray['clusterSubTaskState'] = $data->getClusterSubTaskState();
        }
        if ($data->isInitialized('clusterOperationBlockUI') && null !== $data->getClusterOperationBlockUI()) {
            $dataArray['clusterOperationBlockUI'] = $data->getClusterOperationBlockUI();
        }
        if ($data->isInitialized('clusterOperationDisplayMsg') && null !== $data->getClusterOperationDisplayMsg()) {
            $dataArray['clusterOperationDisplayMsg'] = $data->getClusterOperationDisplayMsg();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ClusterbladeClusterUpgradeProgress::class => false];
    }
}