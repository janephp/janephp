<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ScimUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ScimUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScimUser';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ScimUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemas', $data)) {
            $values = array();
            foreach ($data['schemas'] as $value) {
                $values[] = $value;
            }
            $object->setSchemas($values);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('externalId', $data) && $data['externalId'] !== null) {
            $object->setExternalId($data['externalId']);
        }
        elseif (\array_key_exists('externalId', $data) && $data['externalId'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('userName', $data) && $data['userName'] !== null) {
            $object->setUserName($data['userName']);
        }
        elseif (\array_key_exists('userName', $data) && $data['userName'] === null) {
            $object->setUserName(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'Github\\Model\\ScimUserName', 'json', $context));
        }
        if (\array_key_exists('emails', $data)) {
            $values_1 = array();
            foreach ($data['emails'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\ScimUserEmailsItem', 'json', $context);
            }
            $object->setEmails($values_1);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], 'Github\\Model\\ScimUserMeta', 'json', $context));
        }
        if (\array_key_exists('organization_id', $data)) {
            $object->setOrganizationId($data['organization_id']);
        }
        if (\array_key_exists('operations', $data)) {
            $values_2 = array();
            foreach ($data['operations'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\ScimUserOperationsItem', 'json', $context);
            }
            $object->setOperations($values_2);
        }
        if (\array_key_exists('groups', $data)) {
            $values_3 = array();
            foreach ($data['groups'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Github\\Model\\ScimUserGroupsItem', 'json', $context);
            }
            $object->setGroups($values_3);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getSchemas() as $value) {
            $values[] = $value;
        }
        $data['schemas'] = $values;
        $data['id'] = $object->getId();
        $data['externalId'] = $object->getExternalId();
        $data['userName'] = $object->getUserName();
        $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        $values_1 = array();
        foreach ($object->getEmails() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['emails'] = $values_1;
        $data['active'] = $object->getActive();
        $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
        if (null !== $object->getOrganizationId()) {
            $data['organization_id'] = $object->getOrganizationId();
        }
        if (null !== $object->getOperations()) {
            $values_2 = array();
            foreach ($object->getOperations() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['operations'] = $values_2;
        }
        if (null !== $object->getGroups()) {
            $values_3 = array();
            foreach ($object->getGroups() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['groups'] = $values_3;
        }
        return $data;
    }
}