<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BranchRestrictionPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\BranchRestrictionPolicy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\BranchRestrictionPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('users_url', $data)) {
            $object->setUsersUrl($data['users_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
        }
        if (\array_key_exists('apps_url', $data)) {
            $object->setAppsUrl($data['apps_url']);
        }
        if (\array_key_exists('users', $data)) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\BranchRestrictionPolicyUsersItem', 'json', $context);
            }
            $object->setUsers($values);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = array();
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\BranchRestrictionPolicyTeamsItem', 'json', $context);
            }
            $object->setTeams($values_1);
        }
        if (\array_key_exists('apps', $data)) {
            $values_2 = array();
            foreach ($data['apps'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\BranchRestrictionPolicyAppsItem', 'json', $context);
            }
            $object->setApps($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['users_url'] = $object->getUsersUrl();
        $data['teams_url'] = $object->getTeamsUrl();
        $data['apps_url'] = $object->getAppsUrl();
        $values = array();
        foreach ($object->getUsers() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['users'] = $values;
        $values_1 = array();
        foreach ($object->getTeams() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data['teams'] = $values_1;
        $values_2 = array();
        foreach ($object->getApps() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['apps'] = $values_2;
        return $data;
    }
}