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
class ContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\Content';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Content';
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
        $object = new \PicturePark\API\Model\Content();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->setContentSchemaId($data['contentSchemaId']);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values = array();
            foreach ($data['layerSchemaIds'] as $value) {
                $values[] = $value;
            }
            $object->setLayerSchemaIds($values);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('displayValues', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['displayValues'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setDisplayValues($values_1);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] !== null) {
            $values_2 = array();
            foreach ($data['brokenReferenceIds'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBrokenReferenceIds($values_2);
        }
        elseif (\array_key_exists('brokenReferenceIds', $data) && $data['brokenReferenceIds'] === null) {
            $object->setBrokenReferenceIds(null);
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
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_4 = array();
            foreach ($data['brokenRelationTargetIds'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setBrokenRelationTargetIds($values_4);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
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
        $data['contentSchemaId'] = $object->getContentSchemaId();
        $data['contentType'] = $object->getContentType();
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values = array();
            foreach ($object->getLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['layerSchemaIds'] = $values;
        }
        $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
        foreach ($object->getDisplayValues() as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $data['displayValues'] = $values_1;
        $data['id'] = $object->getId();
        if ($object->isInitialized('brokenReferenceIds') && null !== $object->getBrokenReferenceIds()) {
            $values_2 = array();
            foreach ($object->getBrokenReferenceIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['brokenReferenceIds'] = $values_2;
        }
        if ($object->isInitialized('brokenIndirectReferenceIds') && null !== $object->getBrokenIndirectReferenceIds()) {
            $values_3 = array();
            foreach ($object->getBrokenIndirectReferenceIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['brokenIndirectReferenceIds'] = $values_3;
        }
        if ($object->isInitialized('brokenRelationTargetIds') && null !== $object->getBrokenRelationTargetIds()) {
            $values_4 = array();
            foreach ($object->getBrokenRelationTargetIds() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['brokenRelationTargetIds'] = $values_4;
        }
        $data['lifeCycle'] = $object->getLifeCycle();
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\Content' => false);
    }
}