<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleConfigurableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleConfigurable';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleConfigurable();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] !== null) {
            $object->setTriggerPoint($data['triggerPoint']);
        }
        elseif (\array_key_exists('triggerPoint', $data) && $data['triggerPoint'] === null) {
            $object->setTriggerPoint(null);
        }
        if (\array_key_exists('isEnabled', $data)) {
            $object->setIsEnabled($data['isEnabled']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $object->setNames($data['names']);
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->setNames(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('enableTracing', $data)) {
            $object->setEnableTracing($data['enableTracing']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('condition', $data) && $data['condition'] !== null) {
            $object->setCondition($data['condition']);
        }
        elseif (\array_key_exists('condition', $data) && $data['condition'] === null) {
            $object->setCondition(null);
        }
        if (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] !== null) {
            $values = array();
            foreach ($data['transformationGroups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTransformationGroup', 'json', $context);
            }
            $object->setTransformationGroups($values);
        }
        elseif (\array_key_exists('transformationGroups', $data) && $data['transformationGroups'] === null) {
            $object->setTransformationGroups(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_1 = array();
            foreach ($data['actions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\BusinessRuleAction', 'json', $context);
            }
            $object->setActions($values_1);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getTriggerPoint()) {
            $data['triggerPoint'] = $object->getTriggerPoint();
        }
        $data['isEnabled'] = $object->getIsEnabled();
        if (null !== $object->getNames()) {
            $data['names'] = $object->getNames();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        $data['enableTracing'] = $object->getEnableTracing();
        $data['kind'] = $object->getKind();
        if (null !== $object->getCondition()) {
            $data['condition'] = $object->getCondition();
        }
        if (null !== $object->getTransformationGroups()) {
            $values = array();
            foreach ($object->getTransformationGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['transformationGroups'] = $values;
        }
        if (null !== $object->getActions()) {
            $values_1 = array();
            foreach ($object->getActions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['actions'] = $values_1;
        }
        return $data;
    }
}