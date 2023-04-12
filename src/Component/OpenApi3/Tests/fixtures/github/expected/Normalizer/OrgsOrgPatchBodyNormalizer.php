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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\OrgsOrgPatchBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billing_email', $data)) {
            $object->setBillingEmail($data['billing_email']);
            unset($data['billing_email']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('twitter_username', $data)) {
            $object->setTwitterUsername($data['twitter_username']);
            unset($data['twitter_username']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('has_organization_projects', $data)) {
            $object->setHasOrganizationProjects($data['has_organization_projects']);
            unset($data['has_organization_projects']);
        }
        if (\array_key_exists('has_repository_projects', $data)) {
            $object->setHasRepositoryProjects($data['has_repository_projects']);
            unset($data['has_repository_projects']);
        }
        if (\array_key_exists('default_repository_permission', $data)) {
            $object->setDefaultRepositoryPermission($data['default_repository_permission']);
            unset($data['default_repository_permission']);
        }
        if (\array_key_exists('members_can_create_repositories', $data)) {
            $object->setMembersCanCreateRepositories($data['members_can_create_repositories']);
            unset($data['members_can_create_repositories']);
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data)) {
            $object->setMembersCanCreateInternalRepositories($data['members_can_create_internal_repositories']);
            unset($data['members_can_create_internal_repositories']);
        }
        if (\array_key_exists('members_can_create_private_repositories', $data)) {
            $object->setMembersCanCreatePrivateRepositories($data['members_can_create_private_repositories']);
            unset($data['members_can_create_private_repositories']);
        }
        if (\array_key_exists('members_can_create_public_repositories', $data)) {
            $object->setMembersCanCreatePublicRepositories($data['members_can_create_public_repositories']);
            unset($data['members_can_create_public_repositories']);
        }
        if (\array_key_exists('members_allowed_repository_creation_type', $data)) {
            $object->setMembersAllowedRepositoryCreationType($data['members_allowed_repository_creation_type']);
            unset($data['members_allowed_repository_creation_type']);
        }
        if (\array_key_exists('blog', $data)) {
            $object->setBlog($data['blog']);
            unset($data['blog']);
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
        if ($object->isInitialized('billingEmail') && null !== $object->getBillingEmail()) {
            $data['billing_email'] = $object->getBillingEmail();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('twitterUsername') && null !== $object->getTwitterUsername()) {
            $data['twitter_username'] = $object->getTwitterUsername();
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('hasOrganizationProjects') && null !== $object->getHasOrganizationProjects()) {
            $data['has_organization_projects'] = $object->getHasOrganizationProjects();
        }
        if ($object->isInitialized('hasRepositoryProjects') && null !== $object->getHasRepositoryProjects()) {
            $data['has_repository_projects'] = $object->getHasRepositoryProjects();
        }
        if ($object->isInitialized('defaultRepositoryPermission') && null !== $object->getDefaultRepositoryPermission()) {
            $data['default_repository_permission'] = $object->getDefaultRepositoryPermission();
        }
        if ($object->isInitialized('membersCanCreateRepositories') && null !== $object->getMembersCanCreateRepositories()) {
            $data['members_can_create_repositories'] = $object->getMembersCanCreateRepositories();
        }
        if ($object->isInitialized('membersCanCreateInternalRepositories') && null !== $object->getMembersCanCreateInternalRepositories()) {
            $data['members_can_create_internal_repositories'] = $object->getMembersCanCreateInternalRepositories();
        }
        if ($object->isInitialized('membersCanCreatePrivateRepositories') && null !== $object->getMembersCanCreatePrivateRepositories()) {
            $data['members_can_create_private_repositories'] = $object->getMembersCanCreatePrivateRepositories();
        }
        if ($object->isInitialized('membersCanCreatePublicRepositories') && null !== $object->getMembersCanCreatePublicRepositories()) {
            $data['members_can_create_public_repositories'] = $object->getMembersCanCreatePublicRepositories();
        }
        if ($object->isInitialized('membersAllowedRepositoryCreationType') && null !== $object->getMembersAllowedRepositoryCreationType()) {
            $data['members_allowed_repository_creation_type'] = $object->getMembersAllowedRepositoryCreationType();
        }
        if ($object->isInitialized('blog') && null !== $object->getBlog()) {
            $data['blog'] = $object->getBlog();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgPatchBodyConstraint());
        }
        return $data;
    }
}