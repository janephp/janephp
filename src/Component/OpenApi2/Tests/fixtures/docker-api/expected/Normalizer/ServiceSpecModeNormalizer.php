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
class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\ServiceSpecMode::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\ServiceSpecMode::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\ServiceSpecMode();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\ServiceSpecModeConstraint());
        }
        if (\array_key_exists('Replicated', $data)) {
            $object->replicated = $this->denormalizer->denormalize($data['Replicated'], \Docker\Api\Model\ServiceSpecModeReplicated::class, 'json', $context);
        }
        if (\array_key_exists('Global', $data)) {
            $object->global = $data['Global'];
        }
        if (\array_key_exists('ReplicatedJob', $data)) {
            $object->replicatedJob = $this->denormalizer->denormalize($data['ReplicatedJob'], \Docker\Api\Model\ServiceSpecModeReplicatedJob::class, 'json', $context);
        }
        if (\array_key_exists('GlobalJob', $data)) {
            $object->globalJob = $data['GlobalJob'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('replicated', get_object_vars($data)) && null !== ($data->replicated ?? null)) {
            $dataArray['Replicated'] = ($data->replicated ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->replicated ?? null, 'json', $context));
        }
        if (array_key_exists('global', get_object_vars($data)) && null !== ($data->global ?? null)) {
            $dataArray['Global'] = $data->global ?? null;
        }
        if (array_key_exists('replicatedJob', get_object_vars($data)) && null !== ($data->replicatedJob ?? null)) {
            $dataArray['ReplicatedJob'] = ($data->replicatedJob ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->replicatedJob ?? null, 'json', $context));
        }
        if (array_key_exists('globalJob', get_object_vars($data)) && null !== ($data->globalJob ?? null)) {
            $dataArray['GlobalJob'] = $data->globalJob ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\ServiceSpecModeConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\ServiceSpecMode::class => false];
    }
}