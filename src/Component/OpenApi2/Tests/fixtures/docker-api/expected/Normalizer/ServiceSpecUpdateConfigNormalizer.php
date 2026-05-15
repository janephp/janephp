<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ServiceSpecUpdateConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ServiceSpecUpdateConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ServiceSpecUpdateConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ServiceSpecUpdateConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('MaxFailureRatio', $data) && \is_int($data['MaxFailureRatio'])) {
            $data['MaxFailureRatio'] = (float) $data['MaxFailureRatio'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ServiceSpecUpdateConfigConstraint());
        }
        if (\array_key_exists('Parallelism', $data)) {
            $object->setParallelism($data['Parallelism']);
        }
        if (\array_key_exists('Delay', $data)) {
            $object->setDelay($data['Delay']);
        }
        if (\array_key_exists('FailureAction', $data)) {
            $object->setFailureAction($data['FailureAction']);
        }
        if (\array_key_exists('Monitor', $data)) {
            $object->setMonitor($data['Monitor']);
        }
        if (\array_key_exists('MaxFailureRatio', $data)) {
            $object->setMaxFailureRatio($data['MaxFailureRatio']);
        }
        if (\array_key_exists('Order', $data)) {
            $object->setOrder($data['Order']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('parallelism') && null !== $data->getParallelism()) {
            $dataArray['Parallelism'] = $data->getParallelism();
        }
        if ($data->isInitialized('delay') && null !== $data->getDelay()) {
            $dataArray['Delay'] = $data->getDelay();
        }
        if ($data->isInitialized('failureAction') && null !== $data->getFailureAction()) {
            $dataArray['FailureAction'] = $data->getFailureAction();
        }
        if ($data->isInitialized('monitor') && null !== $data->getMonitor()) {
            $dataArray['Monitor'] = $data->getMonitor();
        }
        if ($data->isInitialized('maxFailureRatio') && null !== $data->getMaxFailureRatio()) {
            $dataArray['MaxFailureRatio'] = $data->getMaxFailureRatio();
        }
        if ($data->isInitialized('order') && null !== $data->getOrder()) {
            $dataArray['Order'] = $data->getOrder();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServiceSpecUpdateConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ServiceSpecUpdateConfig::class => false];
    }
}
