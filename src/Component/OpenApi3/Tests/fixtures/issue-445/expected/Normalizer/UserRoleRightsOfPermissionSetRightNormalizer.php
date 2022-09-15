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
class UserRoleRightsOfPermissionSetRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\UserRoleRightsOfPermissionSetRight';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleRightsOfPermissionSetRight';
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
        $object = new \PicturePark\API\Model\UserRoleRightsOfPermissionSetRight();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('userRoleId', $data) && $data['userRoleId'] !== null) {
            $object->setUserRoleId($data['userRoleId']);
        }
        elseif (\array_key_exists('userRoleId', $data) && $data['userRoleId'] === null) {
            $object->setUserRoleId(null);
        }
        if (\array_key_exists('rights', $data) && $data['rights'] !== null) {
            $values = array();
            foreach ($data['rights'] as $value) {
                $values[] = $value;
            }
            $object->setRights($values);
        }
        elseif (\array_key_exists('rights', $data) && $data['rights'] === null) {
            $object->setRights(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUserRoleId()) {
            $data['userRoleId'] = $object->getUserRoleId();
        }
        if (null !== $object->getRights()) {
            $values = array();
            foreach ($object->getRights() as $value) {
                $values[] = $value;
            }
            $data['rights'] = $values;
        }
        return $data;
    }
}