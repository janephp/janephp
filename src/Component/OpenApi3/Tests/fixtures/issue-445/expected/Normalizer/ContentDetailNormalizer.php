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
class ContentDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ContentDetail';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentDetail';
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
        $object = new \PicturePark\API\Model\ContentDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contentSchemaId', $data)) {
            $object->setContentSchemaId($data['contentSchemaId']);
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
        if (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] !== null) {
            $values_3 = array();
            foreach ($data['brokenRelationTargetIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setBrokenRelationTargetIds($values_3);
        }
        elseif (\array_key_exists('brokenRelationTargetIds', $data) && $data['brokenRelationTargetIds'] === null) {
            $object->setBrokenRelationTargetIds(null);
        }
        if (\array_key_exists('content', $data) && $data['content'] !== null) {
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['content'] as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $object->setContent($values_4);
        }
        elseif (\array_key_exists('content', $data) && $data['content'] === null) {
            $object->setContent(null);
        }
        if (\array_key_exists('metadata', $data) && $data['metadata'] !== null) {
            $values_5 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['metadata'] as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $object->setMetadata($values_5);
        }
        elseif (\array_key_exists('metadata', $data) && $data['metadata'] === null) {
            $object->setMetadata(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] !== null) {
            $values_6 = array();
            foreach ($data['contentPermissionSetIds'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContentPermissionSetIds($values_6);
        }
        elseif (\array_key_exists('contentPermissionSetIds', $data) && $data['contentPermissionSetIds'] === null) {
            $object->setContentPermissionSetIds(null);
        }
        if (\array_key_exists('outputs', $data) && $data['outputs'] !== null) {
            $values_7 = array();
            foreach ($data['outputs'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'PicturePark\\API\\Model\\Output', 'json', $context);
            }
            $object->setOutputs($values_7);
        }
        elseif (\array_key_exists('outputs', $data) && $data['outputs'] === null) {
            $object->setOutputs(null);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->setOwnerTokenId($data['ownerTokenId']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('contentType', $data)) {
            $object->setContentType($data['contentType']);
        }
        if (\array_key_exists('displayValues', $data) && $data['displayValues'] !== null) {
            $object->setDisplayValues($data['displayValues']);
        }
        elseif (\array_key_exists('displayValues', $data) && $data['displayValues'] === null) {
            $object->setDisplayValues(null);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        if (\array_key_exists('contentRights', $data) && $data['contentRights'] !== null) {
            $values_8 = array();
            foreach ($data['contentRights'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setContentRights($values_8);
        }
        elseif (\array_key_exists('contentRights', $data) && $data['contentRights'] === null) {
            $object->setContentRights(null);
        }
        if (\array_key_exists('activity', $data) && $data['activity'] !== null) {
            $object->setActivity($data['activity']);
        }
        elseif (\array_key_exists('activity', $data) && $data['activity'] === null) {
            $object->setActivity(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['contentSchemaId'] = $object->getContentSchemaId();
        if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
            $values = array();
            foreach ($object->getLayerSchemaIds() as $value) {
                $values[] = $value;
            }
            $data['layerSchemaIds'] = $values;
        }
        if ($object->isInitialized('brokenReferenceIds') && null !== $object->getBrokenReferenceIds()) {
            $values_1 = array();
            foreach ($object->getBrokenReferenceIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['brokenReferenceIds'] = $values_1;
        }
        if ($object->isInitialized('brokenIndirectReferenceIds') && null !== $object->getBrokenIndirectReferenceIds()) {
            $values_2 = array();
            foreach ($object->getBrokenIndirectReferenceIds() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['brokenIndirectReferenceIds'] = $values_2;
        }
        if ($object->isInitialized('brokenRelationTargetIds') && null !== $object->getBrokenRelationTargetIds()) {
            $values_3 = array();
            foreach ($object->getBrokenRelationTargetIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['brokenRelationTargetIds'] = $values_3;
        }
        if ($object->isInitialized('content') && null !== $object->getContent()) {
            $values_4 = array();
            foreach ($object->getContent() as $key => $value_4) {
                $values_4[$key] = $value_4;
            }
            $data['content'] = $values_4;
        }
        if ($object->isInitialized('metadata') && null !== $object->getMetadata()) {
            $values_5 = array();
            foreach ($object->getMetadata() as $key_1 => $value_5) {
                $values_5[$key_1] = $value_5;
            }
            $data['metadata'] = $values_5;
        }
        $data['id'] = $object->getId();
        if ($object->isInitialized('contentPermissionSetIds') && null !== $object->getContentPermissionSetIds()) {
            $values_6 = array();
            foreach ($object->getContentPermissionSetIds() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['contentPermissionSetIds'] = $values_6;
        }
        if ($object->isInitialized('outputs') && null !== $object->getOutputs()) {
            $values_7 = array();
            foreach ($object->getOutputs() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['outputs'] = $values_7;
        }
        if ($object->isInitialized('audit') && null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        $data['ownerTokenId'] = $object->getOwnerTokenId();
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $object->getOwner();
        }
        $data['contentType'] = $object->getContentType();
        if ($object->isInitialized('displayValues') && null !== $object->getDisplayValues()) {
            $data['displayValues'] = $object->getDisplayValues();
        }
        $data['lifeCycle'] = $object->getLifeCycle();
        if ($object->isInitialized('contentRights') && null !== $object->getContentRights()) {
            $values_8 = array();
            foreach ($object->getContentRights() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['contentRights'] = $values_8;
        }
        if ($object->isInitialized('activity') && null !== $object->getActivity()) {
            $data['activity'] = $object->getActivity();
        }
        return $data;
    }
}