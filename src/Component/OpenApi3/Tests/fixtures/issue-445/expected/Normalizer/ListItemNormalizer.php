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
class ListItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ListItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ListItem';
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
        $object = new \PicturePark\API\Model\ListItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('contentSchemaId', $data) && $data['contentSchemaId'] !== null) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        elseif (\array_key_exists('contentSchemaId', $data) && $data['contentSchemaId'] === null) {
            $object->setContentSchemaId(null);
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $object->setDisplayValues($data['displayValues']);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setContent($values);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_1 = array();
            foreach ($data['brokenReferenceIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBrokenReferenceIds($values_1);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_2 = array();
            foreach ($data['brokenRelationTargetIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBrokenRelationTargetIds($values_2);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_3 = array();
            foreach ($data['brokenIndirectReferenceIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBrokenIndirectReferenceIds($values_3);
        }
        elseif (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] === null) {
            $object->setBrokenIndirectReferenceIds(null);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('audit') && null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        $data['id'] = $object->getId();
        if ($object->isInitialized('contentSchemaId') && null !== $object->getContentSchemaId()) {
            $data['contentSchemaId'] = $object->getContentSchemaId();
        }
        if ($object->isInitialized('displayValues') && null !== $object->getDisplayValues()) {
            $data['displayValues'] = $object->getDisplayValues();
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $values = array();
            foreach ($object->getContent() as $key => $value) {
                $values[$key] = $value;
            }
            $data['content'] = $values;
        }
        if ($object->isInitialized('brokenReferenceIds') && null !== $object->getBrokenReferenceIds()) {
            $values_1 = array();
            foreach ($object->getBrokenReferenceIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['brokenReferenceIds'] = $values_1;
        }
        if ($object->isInitialized('brokenRelationTargetIds') && null !== $object->getBrokenRelationTargetIds()) {
            $values_2 = array();
            foreach ($object->getBrokenRelationTargetIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['brokenRelationTargetIds'] = $values_2;
        }
        if ($object->isInitialized('brokenIndirectReferenceIds') && null !== $object->getBrokenIndirectReferenceIds()) {
            $values_3 = array();
            foreach ($object->getBrokenIndirectReferenceIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['brokenIndirectReferenceIds'] = $values_3;
        }
        $data['lifeCycle'] = $object->getLifeCycle();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\ListItem' => false);
    }
}