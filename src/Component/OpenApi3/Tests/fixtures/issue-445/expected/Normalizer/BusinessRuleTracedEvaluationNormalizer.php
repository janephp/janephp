<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleTracedEvaluation';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTracedEvaluation';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleTracedEvaluation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('conditionSatisfied', $data)) {
            $object->setConditionSatisfied($data['conditionSatisfied']);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $values = array();
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTracedEvaluationCondition', 'json', $context);
            }
            $object->setConditions($values);
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values_1 = array();
            foreach ($data['transformationGroups'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleTracedTransformationGroup', 'json', $context);
            }
            $object->setTransformationGroups($values_1);
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->setTransformationGroups(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_2 = array();
            foreach ($data['actions'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\BusinessRuleTracedAction', 'json', $context);
            }
            $object->setActions($values_2);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('variables', $data) && $data['variables'] !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['conditionSatisfied'] = $object->getConditionSatisfied();
        if (null !== $object->getConditions()) {
            $values = array();
            foreach ($object->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['conditions'] = $values;
        }
        if (null !== $object->getTransformationGroups()) {
            $values_1 = array();
            foreach ($object->getTransformationGroups() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['transformationGroups'] = $values_1;
        }
        if (null !== $object->getActions()) {
            $values_2 = array();
            foreach ($object->getActions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['actions'] = $values_2;
        }
        if (null !== $object->getVariables()) {
            $values_3 = array();
            foreach ($object->getVariables() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['variables'] = $values_3;
        }
        return $data;
    }
}