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
class PermissionSetDetailOfContentRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\PermissionSetDetailOfContentRight';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\PermissionSetDetailOfContentRight';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\PermissionSetDetailOfContentRight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('names', $data)) {
            $object->setNames($data['names']);
        }
        if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
            $values = array();
            foreach ($data['userRolesRights'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\PermissionUserRoleRightsOfContentRight', 'json', $context);
            }
            $object->setUserRolesRights($values);
        }
        elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
            $object->setUserRolesRights(null);
        }
        if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
            $values_1 = array();
            foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\PermissionUserRoleRightsOfPermissionSetRight', 'json', $context);
            }
            $object->setUserRolesPermissionSetRights($values_1);
        }
        elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
            $object->setUserRolesPermissionSetRights(null);
        }
        if (\array_key_exists('exclusive', $data)) {
            $object->setExclusive($data['exclusive']);
        }
        if (\array_key_exists('ownerTokenId', $data)) {
            $object->setOwnerTokenId($data['ownerTokenId']);
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $object->setAudit($data['audit']);
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->setAudit(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['names'] = $object->getNames();
        if (null !== $object->getUserRolesRights()) {
            $values = array();
            foreach ($object->getUserRolesRights() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['userRolesRights'] = $values;
        }
        if (null !== $object->getUserRolesPermissionSetRights()) {
            $values_1 = array();
            foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['userRolesPermissionSetRights'] = $values_1;
        }
        $data['exclusive'] = $object->getExclusive();
        $data['ownerTokenId'] = $object->getOwnerTokenId();
        if (null !== $object->getAudit()) {
            $data['audit'] = $object->getAudit();
        }
        return $data;
    }
}