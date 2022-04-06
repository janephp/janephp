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
class IdentityProviderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\IdentityProvider';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IdentityProvider';
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
        $object = new \PicturePark\API\Model\IdentityProvider();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
            $values = array();
            foreach ($data['claimMapping'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\IdpClaimToUserAttributeMapping', 'json', $context);
            }
            $object->setClaimMapping($values);
        }
        elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
            $object->setClaimMapping(null);
        }
        if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
            $object->setGroupClaimType($data['groupClaimType']);
        }
        elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
            $object->setGroupClaimType(null);
        }
        if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
            $values_1 = array();
            foreach ($data['groupMapping'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'PicturePark\\API\\Model\\IdpGroupToUserRoleMapping', 'json', $context);
            }
            $object->setGroupMapping($values_1);
        }
        elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
            $object->setGroupMapping(null);
        }
        if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
            $object->setFallbackUserRoleId($data['fallbackUserRoleId']);
        }
        elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
            $object->setFallbackUserRoleId(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('displayName', $data) && $data['displayName'] !== null) {
            $object->setDisplayName($data['displayName']);
        }
        elseif (\array_key_exists('displayName', $data) && $data['displayName'] === null) {
            $object->setDisplayName(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClaimMapping()) {
            $values = array();
            foreach ($object->getClaimMapping() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['claimMapping'] = $values;
        }
        if (null !== $object->getGroupClaimType()) {
            $data['groupClaimType'] = $object->getGroupClaimType();
        }
        if (null !== $object->getGroupMapping()) {
            $values_1 = array();
            foreach ($object->getGroupMapping() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['groupMapping'] = $values_1;
        }
        if (null !== $object->getFallbackUserRoleId()) {
            $data['fallbackUserRoleId'] = $object->getFallbackUserRoleId();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDisplayName()) {
            $data['displayName'] = $object->getDisplayName();
        }
        return $data;
    }
}