<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleTracedEvaluationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\BusinessRuleTracedEvaluation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\BusinessRuleTracedEvaluation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\BusinessRuleTracedEvaluation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('conditionSatisfied', $data) && \is_int($data['conditionSatisfied'])) {
            $data['conditionSatisfied'] = (bool) $data['conditionSatisfied'];
        }
        if (\array_key_exists('conditionSatisfied', $data)) {
            $object->conditionSatisfied = $data['conditionSatisfied'];
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $values = [];
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessRuleTracedEvaluationCondition::class, 'json', $context);
            }
            $object->conditions = $values;
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->conditions = null;
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values_1 = [];
            foreach ($data['transformationGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class, 'json', $context);
            }
            $object->transformationGroups = $values_1;
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->transformationGroups = null;
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_2 = [];
            foreach ($data['actions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessRuleTracedAction::class, 'json', $context);
            }
            $object->actions = $values_2;
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->actions = null;
        }
        if (\array_key_exists('variables', $data) && $data['variables'] !== null) {
            $values_3 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data['variables'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->variables = $values_3;
        }
        elseif (\array_key_exists('variables', $data) && $data['variables'] === null) {
            $object->variables = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['conditionSatisfied'] = $data->conditionSatisfied ?? null;
        if (array_key_exists('conditions', get_object_vars($data)) && null !== ($data->conditions ?? null)) {
            $values = [];
            foreach ($data->conditions ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['conditions'] = $values;
        }
        if (array_key_exists('transformationGroups', get_object_vars($data)) && null !== ($data->transformationGroups ?? null)) {
            $values_1 = [];
            foreach ($data->transformationGroups ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['transformationGroups'] = $values_1;
        }
        if (array_key_exists('actions', get_object_vars($data)) && null !== ($data->actions ?? null)) {
            $values_2 = [];
            foreach ($data->actions ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['actions'] = $values_2;
        }
        if (array_key_exists('variables', get_object_vars($data)) && null !== ($data->variables ?? null)) {
            $values_3 = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->variables ?? null as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $dataArray['variables'] = $values_3;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\BusinessRuleTracedEvaluation::class => false];
    }
}