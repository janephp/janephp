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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleTracedEvaluation();
        if (\array_key_exists('conditionSatisfied', $data) && \is_int($data['conditionSatisfied'])) {
            $data['conditionSatisfied'] = (bool) $data['conditionSatisfied'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('conditionSatisfied', $data)) {
            $object->setConditionSatisfied($data['conditionSatisfied']);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $values = [];
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\BusinessRuleTracedEvaluationCondition::class, 'json', $context);
            }
            $object->setConditions($values);
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values_1 = [];
            foreach ($data['transformationGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\BusinessRuleTracedTransformationGroup::class, 'json', $context);
            }
            $object->setTransformationGroups($values_1);
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->setTransformationGroups(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_2 = [];
            foreach ($data['actions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\BusinessRuleTracedAction::class, 'json', $context);
            }
            $object->setActions($values_2);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('variables', $data) && $data['variables'] !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['variables'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setVariables($values_3);
        }
        elseif (\array_key_exists('variables', $data) && $data['variables'] === null) {
            $object->setVariables(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['conditionSatisfied'] = $data->getConditionSatisfied();
        if ($data->isInitialized('conditions') && null !== $data->getConditions()) {
            $values = [];
            foreach ($data->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['conditions'] = $values;
        }
        if ($data->isInitialized('transformationGroups') && null !== $data->getTransformationGroups()) {
            $values_1 = [];
            foreach ($data->getTransformationGroups() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['transformationGroups'] = $values_1;
        }
        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values_2 = [];
            foreach ($data->getActions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['actions'] = $values_2;
        }
        if ($data->isInitialized('variables') && null !== $data->getVariables()) {
            $values_3 = [];
            foreach ($data->getVariables() as $key => $value_3) {
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