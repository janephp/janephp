<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ListItem';
    }
    public function supportsNormalization($data, $format = null) : bool
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
            $object->setContent($data['content']);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values = array();
            foreach ($data['brokenReferenceIds'] as $value) {
                $values[] = $value;
            }
            $object->setBrokenReferenceIds($values);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
        }
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_1 = array();
            foreach ($data['brokenRelationTargetIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBrokenRelationTargetIds($values_1);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('brokenIndirectReferenceIds', $data) && $data['brokenIndirectReferenceIds'] !== null) {
            $values_2 = array();
            foreach ($data['brokenIndirectReferenceIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBrokenIndirectReferenceIds($values_2);
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
        if (null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        $data['id'] = $object->getId();
        if (null !== $object->getContentSchemaId()) {
            $data['contentSchemaId'] = $object->getContentSchemaId();
        }
        if (null !== $object->getDisplayValues()) {
            $data['displayValues'] = $object->getDisplayValues();
        }
        if (null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }
        if (null !== $object->getBrokenReferenceIds()) {
            $values = array();
            foreach ($object->getBrokenReferenceIds() as $value) {
                $values[] = $value;
            }
            $data['brokenReferenceIds'] = $values;
        }
        if (null !== $object->getBrokenRelationTargetIds()) {
            $values_1 = array();
            foreach ($object->getBrokenRelationTargetIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['brokenRelationTargetIds'] = $values_1;
        }
        if (null !== $object->getBrokenIndirectReferenceIds()) {
            $values_2 = array();
            foreach ($object->getBrokenIndirectReferenceIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['brokenIndirectReferenceIds'] = $values_2;
        }
        $data['lifeCycle'] = $object->getLifeCycle();
        return $data;
    }
}