<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgTeamsPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('maintainers', $data)) {
            $values = array();
            foreach ($data['maintainers'] as $value) {
                $values[] = $value;
            }
            $object->setMaintainers($values);
            unset($data['maintainers']);
        }
        if (\array_key_exists('repo_names', $data)) {
            $values_1 = array();
            foreach ($data['repo_names'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepoNames($values_1);
            unset($data['repo_names']);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
            unset($data['privacy']);
        }
        if (\array_key_exists('permission', $data)) {
            $object->setPermission($data['permission']);
            unset($data['permission']);
        }
        if (\array_key_exists('parent_team_id', $data)) {
            $object->setParentTeamId($data['parent_team_id']);
            unset($data['parent_team_id']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
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
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('maintainers') && null !== $object->getMaintainers()) {
            $values = array();
            foreach ($object->getMaintainers() as $value) {
                $values[] = $value;
            }
            $data['maintainers'] = $values;
        }
        if ($object->isInitialized('repoNames') && null !== $object->getRepoNames()) {
            $values_1 = array();
            foreach ($object->getRepoNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repo_names'] = $values_1;
        }
        if ($object->isInitialized('privacy') && null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if ($object->isInitialized('permission') && null !== $object->getPermission()) {
            $data['permission'] = $object->getPermission();
        }
        if ($object->isInitialized('parentTeamId') && null !== $object->getParentTeamId()) {
            $data['parent_team_id'] = $object->getParentTeamId();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}