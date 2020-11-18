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
class UserRoleRightsOfContentRightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\UserRoleRightsOfContentRight';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserRoleRightsOfContentRight';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\UserRoleRightsOfContentRight();
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