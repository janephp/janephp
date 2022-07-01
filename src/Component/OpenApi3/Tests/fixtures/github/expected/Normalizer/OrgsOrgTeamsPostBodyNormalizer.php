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
class OrgsOrgTeamsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgTeamsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgTeamsPostBody';
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
        $object = new \Github\Model\OrgsOrgTeamsPostBody();
        $validator = new \Github\Validator\OrgsOrgTeamsPostBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('maintainers', $data)) {
            $values = array();
            foreach ($data['maintainers'] as $value) {
                $values[] = $value;
            }
            $object->setMaintainers($values);
        }
        if (\array_key_exists('repo_names', $data)) {
            $values_1 = array();
            foreach ($data['repo_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoNames($values_1);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
        }
        if (\array_key_exists('permission', $data)) {
            $object->setPermission($data['permission']);
        }
        if (\array_key_exists('parent_team_id', $data)) {
            $object->setParentTeamId($data['parent_team_id']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getMaintainers()) {
            $values = array();
            foreach ($object->getMaintainers() as $value) {
                $values[] = $value;
            }
            $data['maintainers'] = $values;
        }
        if (null !== $object->getRepoNames()) {
            $values_1 = array();
            foreach ($object->getRepoNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repo_names'] = $values_1;
        }
        if (null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if (null !== $object->getPermission()) {
            $data['permission'] = $object->getPermission();
        }
        if (null !== $object->getParentTeamId()) {
            $data['parent_team_id'] = $object->getParentTeamId();
        }
        $validator = new \Github\Validator\OrgsOrgTeamsPostBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}