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
class TaskSpecPlacementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecPlacement::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecPlacement::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpecPlacement();
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
            $this->validate($data, new \Docker\Api\Validator\TaskSpecPlacementConstraint());
        }
        if (\array_key_exists('Constraints', $data)) {
            $values = [];
            foreach ($data['Constraints'] as $value) {
                $values[] = $value;
            }
            $object->constraints = $values;
        }
        if (\array_key_exists('Preferences', $data)) {
            $values_1 = [];
            foreach ($data['Preferences'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Docker\Api\Model\TaskSpecPlacementPreferencesItem::class, 'json', $context);
            }
            $object->preferences = $values_1;
        }
        if (\array_key_exists('MaxReplicas', $data)) {
            $object->maxReplicas = $data['MaxReplicas'];
        }
        if (\array_key_exists('Platforms', $data)) {
            $values_2 = [];
            foreach ($data['Platforms'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Docker\Api\Model\Platform::class, 'json', $context);
            }
            $object->platforms = $values_2;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('constraints', get_object_vars($data)) && null !== ($data->constraints ?? null)) {
            $values = [];
            foreach ($data->constraints as $value) {
                $values[] = $value;
            }
            $dataArray['Constraints'] = $values;
        }
        if (array_key_exists('preferences', get_object_vars($data)) && null !== ($data->preferences ?? null)) {
            $values_1 = [];
            foreach ($data->preferences as $value_1) {
                $normalized = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized) ? new \Docker\Api\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['Preferences'] = $values_1;
        }
        if (array_key_exists('maxReplicas', get_object_vars($data)) && null !== ($data->maxReplicas ?? null)) {
            $dataArray['MaxReplicas'] = $data->maxReplicas;
        }
        if (array_key_exists('platforms', get_object_vars($data)) && null !== ($data->platforms ?? null)) {
            $values_2 = [];
            foreach ($data->platforms as $value_2) {
                $normalized_1 = $value_2 === null ? null : $this->normalizer->normalize($value_2, 'json', $context);
                $values_2[] = \is_iterable($normalized_1) ? new \Docker\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['Platforms'] = $values_2;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecPlacementConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecPlacement::class => false];
    }
}