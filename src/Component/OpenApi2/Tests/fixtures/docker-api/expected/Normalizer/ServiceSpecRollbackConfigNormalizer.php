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
class ServiceSpecRollbackConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ServiceSpecRollbackConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ServiceSpecRollbackConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ServiceSpecRollbackConfig();
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
            $this->validate($data, new \Docker\Api\Validator\ServiceSpecRollbackConfigConstraint());
        }
        if (\array_key_exists('Parallelism', $data)) {
            $object->parallelism = $data['Parallelism'];
        }
        if (\array_key_exists('Delay', $data)) {
            $object->delay = $data['Delay'];
        }
        if (\array_key_exists('FailureAction', $data)) {
            $object->failureAction = $data['FailureAction'];
        }
        if (\array_key_exists('Monitor', $data)) {
            $object->monitor = $data['Monitor'];
        }
        if (\array_key_exists('MaxFailureRatio', $data)) {
            $object->maxFailureRatio = $data['MaxFailureRatio'];
        }
        if (\array_key_exists('Order', $data)) {
            $object->order = $data['Order'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('parallelism', get_object_vars($data)) && null !== ($data->parallelism ?? null)) {
            $dataArray['Parallelism'] = $data->parallelism ?? null;
        }
        if (array_key_exists('delay', get_object_vars($data)) && null !== ($data->delay ?? null)) {
            $dataArray['Delay'] = $data->delay ?? null;
        }
        if (array_key_exists('failureAction', get_object_vars($data)) && null !== ($data->failureAction ?? null)) {
            $dataArray['FailureAction'] = $data->failureAction ?? null;
        }
        if (array_key_exists('monitor', get_object_vars($data)) && null !== ($data->monitor ?? null)) {
            $dataArray['Monitor'] = $data->monitor ?? null;
        }
        if (array_key_exists('maxFailureRatio', get_object_vars($data)) && null !== ($data->maxFailureRatio ?? null)) {
            $dataArray['MaxFailureRatio'] = $data->maxFailureRatio ?? null;
        }
        if (array_key_exists('order', get_object_vars($data)) && null !== ($data->order ?? null)) {
            $dataArray['Order'] = $data->order ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServiceSpecRollbackConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ServiceSpecRollbackConfig::class => false];
    }
}