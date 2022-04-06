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
class UserWithRolesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\UserWithRoles';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserWithRoles';
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
        $object = new \PicturePark\API\Model\UserWithRoles();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] !== null) {
            $values = array();
            foreach ($data['userRoleIds'] as $value) {
                $values[] = $value;
            }
            $object->setUserRoleIds($values);
        }
        elseif (\array_key_exists('userRoleIds', $data) && $data['userRoleIds'] === null) {
            $object->setUserRoleIds(null);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('firstName', $data) && $data['firstName'] !== null) {
            $object->setFirstName($data['firstName']);
        }
        elseif (\array_key_exists('firstName', $data) && $data['firstName'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('lastName', $data) && $data['lastName'] !== null) {
            $object->setLastName($data['lastName']);
        }
        elseif (\array_key_exists('lastName', $data) && $data['lastName'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('emailAddress', $data)) {
            $object->setEmailAddress($data['emailAddress']);
        }
        if (\array_key_exists('authorizationState', $data)) {
            $object->setAuthorizationState($data['authorizationState']);
        }
        if (\array_key_exists('lifeCycle', $data)) {
            $object->setLifeCycle($data['lifeCycle']);
        }
        if (\array_key_exists('isLocked', $data)) {
            $object->setIsLocked($data['isLocked']);
        }
        if (\array_key_exists('isSupportUser', $data)) {
            $object->setIsSupportUser($data['isSupportUser']);
        }
        if (\array_key_exists('isReadOnly', $data)) {
            $object->setIsReadOnly($data['isReadOnly']);
        }
        if (\array_key_exists('isFederated', $data)) {
            $object->setIsFederated($data['isFederated']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUserRoleIds()) {
            $values = array();
            foreach ($object->getUserRoleIds() as $value) {
                $values[] = $value;
            }
            $data['userRoleIds'] = $values;
        }
        $data['id'] = $object->getId();
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        $data['emailAddress'] = $object->getEmailAddress();
        $data['authorizationState'] = $object->getAuthorizationState();
        $data['lifeCycle'] = $object->getLifeCycle();
        $data['isLocked'] = $object->getIsLocked();
        $data['isSupportUser'] = $object->getIsSupportUser();
        $data['isReadOnly'] = $object->getIsReadOnly();
        $data['isFederated'] = $object->getIsFederated();
        return $data;
    }
}