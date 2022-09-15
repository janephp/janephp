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
class OrgsOrgPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrgsOrgPatchBody';
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
        $object = new \Github\Model\OrgsOrgPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_email', $data)) {
            $object->setBillingEmail($data['billing_email']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('twitter_username', $data)) {
            $object->setTwitterUsername($data['twitter_username']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('has_organization_projects', $data)) {
            $object->setHasOrganizationProjects($data['has_organization_projects']);
        }
        if (\array_key_exists('has_repository_projects', $data)) {
            $object->setHasRepositoryProjects($data['has_repository_projects']);
        }
        if (\array_key_exists('default_repository_permission', $data)) {
            $object->setDefaultRepositoryPermission($data['default_repository_permission']);
        }
        if (\array_key_exists('members_can_create_repositories', $data)) {
            $object->setMembersCanCreateRepositories($data['members_can_create_repositories']);
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data)) {
            $object->setMembersCanCreateInternalRepositories($data['members_can_create_internal_repositories']);
        }
        if (\array_key_exists('members_can_create_private_repositories', $data)) {
            $object->setMembersCanCreatePrivateRepositories($data['members_can_create_private_repositories']);
        }
        if (\array_key_exists('members_can_create_public_repositories', $data)) {
            $object->setMembersCanCreatePublicRepositories($data['members_can_create_public_repositories']);
        }
        if (\array_key_exists('members_allowed_repository_creation_type', $data)) {
            $object->setMembersAllowedRepositoryCreationType($data['members_allowed_repository_creation_type']);
        }
        if (\array_key_exists('blog', $data)) {
            $object->setBlog($data['blog']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBillingEmail()) {
            $data['billing_email'] = $object->getBillingEmail();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getTwitterUsername()) {
            $data['twitter_username'] = $object->getTwitterUsername();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getHasOrganizationProjects()) {
            $data['has_organization_projects'] = $object->getHasOrganizationProjects();
        }
        if (null !== $object->getHasRepositoryProjects()) {
            $data['has_repository_projects'] = $object->getHasRepositoryProjects();
        }
        if (null !== $object->getDefaultRepositoryPermission()) {
            $data['default_repository_permission'] = $object->getDefaultRepositoryPermission();
        }
        if (null !== $object->getMembersCanCreateRepositories()) {
            $data['members_can_create_repositories'] = $object->getMembersCanCreateRepositories();
        }
        if (null !== $object->getMembersCanCreateInternalRepositories()) {
            $data['members_can_create_internal_repositories'] = $object->getMembersCanCreateInternalRepositories();
        }
        if (null !== $object->getMembersCanCreatePrivateRepositories()) {
            $data['members_can_create_private_repositories'] = $object->getMembersCanCreatePrivateRepositories();
        }
        if (null !== $object->getMembersCanCreatePublicRepositories()) {
            $data['members_can_create_public_repositories'] = $object->getMembersCanCreatePublicRepositories();
        }
        if (null !== $object->getMembersAllowedRepositoryCreationType()) {
            $data['members_allowed_repository_creation_type'] = $object->getMembersAllowedRepositoryCreationType();
        }
        if (null !== $object->getBlog()) {
            $data['blog'] = $object->getBlog();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgPatchBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}