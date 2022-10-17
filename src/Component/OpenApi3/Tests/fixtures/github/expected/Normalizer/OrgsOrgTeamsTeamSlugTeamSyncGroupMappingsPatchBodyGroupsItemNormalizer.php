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
class OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem';
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
        $object = new \Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItemConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('group_id', $data)) {
            $object->setGroupId($data['group_id']);
            unset($data['group_id']);
        }
        if (\array_key_exists('group_name', $data)) {
            $object->setGroupName($data['group_name']);
            unset($data['group_name']);
        }
        if (\array_key_exists('group_description', $data)) {
            $object->setGroupDescription($data['group_description']);
            unset($data['group_description']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['group_id'] = $object->getGroupId();
        $data['group_name'] = $object->getGroupName();
        $data['group_description'] = $object->getGroupDescription();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBodyGroupsItemConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}