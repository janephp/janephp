<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GroupMappingGroupsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\GroupMappingGroupsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GroupMappingGroupsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GroupMappingGroupsItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('group_id', $data)) {
            $object->setGroupId($data['group_id']);
        }
        if (\array_key_exists('group_name', $data)) {
            $object->setGroupName($data['group_name']);
        }
        if (\array_key_exists('group_description', $data)) {
            $object->setGroupDescription($data['group_description']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getGroupId()) {
            $data['group_id'] = $object->getGroupId();
        }
        if (null !== $object->getGroupName()) {
            $data['group_name'] = $object->getGroupName();
        }
        if (null !== $object->getGroupDescription()) {
            $data['group_description'] = $object->getGroupDescription();
        }
        return $data;
    }
}