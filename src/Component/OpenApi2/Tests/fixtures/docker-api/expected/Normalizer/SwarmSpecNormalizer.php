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
class SwarmSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SwarmSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SwarmSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SwarmSpec();
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
            $this->validate($data, new \Docker\Api\Validator\SwarmSpecConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Labels', $data)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data['Labels'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->labels = $values;
        }
        if (\array_key_exists('Orchestration', $data) && $data['Orchestration'] !== null) {
            $object->orchestration = $this->denormalizer->denormalize($data['Orchestration'], \Docker\Api\Model\SwarmSpecOrchestration::class, 'json', $context);
        }
        elseif (\array_key_exists('Orchestration', $data)) {
            $object->orchestration = null;
        }
        if (\array_key_exists('Raft', $data)) {
            $object->raft = $this->denormalizer->denormalize($data['Raft'], \Docker\Api\Model\SwarmSpecRaft::class, 'json', $context);
        }
        if (\array_key_exists('Dispatcher', $data) && $data['Dispatcher'] !== null) {
            $object->dispatcher = $this->denormalizer->denormalize($data['Dispatcher'], \Docker\Api\Model\SwarmSpecDispatcher::class, 'json', $context);
        }
        elseif (\array_key_exists('Dispatcher', $data)) {
            $object->dispatcher = null;
        }
        if (\array_key_exists('CAConfig', $data) && $data['CAConfig'] !== null) {
            $object->cAConfig = $this->denormalizer->denormalize($data['CAConfig'], \Docker\Api\Model\SwarmSpecCAConfig::class, 'json', $context);
        }
        elseif (\array_key_exists('CAConfig', $data)) {
            $object->cAConfig = null;
        }
        if (\array_key_exists('EncryptionConfig', $data)) {
            $object->encryptionConfig = $this->denormalizer->denormalize($data['EncryptionConfig'], \Docker\Api\Model\SwarmSpecEncryptionConfig::class, 'json', $context);
        }
        if (\array_key_exists('TaskDefaults', $data)) {
            $object->taskDefaults = $this->denormalizer->denormalize($data['TaskDefaults'], \Docker\Api\Model\SwarmSpecTaskDefaults::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['Name'] = $data->name;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values = new \Docker\Api\Runtime\JsonObject();
            foreach ($data->labels as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['Labels'] = $values;
        }
        if (array_key_exists('orchestration', get_object_vars($data)) && null !== ($data->orchestration ?? null)) {
            $normalized = $this->normalizer->normalize($data->orchestration, 'json', $context);
            $dataArray['Orchestration'] = \is_iterable($normalized) ? new \Docker\Api\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('raft', get_object_vars($data)) && null !== ($data->raft ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->raft, 'json', $context);
            $dataArray['Raft'] = \is_iterable($normalized_1) ? new \Docker\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('dispatcher', get_object_vars($data)) && null !== ($data->dispatcher ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->dispatcher, 'json', $context);
            $dataArray['Dispatcher'] = \is_iterable($normalized_2) ? new \Docker\Api\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('cAConfig', get_object_vars($data)) && null !== ($data->cAConfig ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->cAConfig, 'json', $context);
            $dataArray['CAConfig'] = \is_iterable($normalized_3) ? new \Docker\Api\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('encryptionConfig', get_object_vars($data)) && null !== ($data->encryptionConfig ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->encryptionConfig, 'json', $context);
            $dataArray['EncryptionConfig'] = \is_iterable($normalized_4) ? new \Docker\Api\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        if (array_key_exists('taskDefaults', get_object_vars($data)) && null !== ($data->taskDefaults ?? null)) {
            $normalized_5 = $this->normalizer->normalize($data->taskDefaults, 'json', $context);
            $dataArray['TaskDefaults'] = \is_iterable($normalized_5) ? new \Docker\Api\Runtime\JsonObject($normalized_5) : $normalized_5;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SwarmSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SwarmSpec::class => false];
    }
}