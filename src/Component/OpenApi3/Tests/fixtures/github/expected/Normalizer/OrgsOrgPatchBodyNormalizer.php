<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgPatchBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgPatchBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrgsOrgPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_organization_projects', $data) && \is_int($data['has_organization_projects'])) {
            $data['has_organization_projects'] = (bool) $data['has_organization_projects'];
        }
        if (\array_key_exists('has_repository_projects', $data) && \is_int($data['has_repository_projects'])) {
            $data['has_repository_projects'] = (bool) $data['has_repository_projects'];
        }
        if (\array_key_exists('members_can_create_repositories', $data) && \is_int($data['members_can_create_repositories'])) {
            $data['members_can_create_repositories'] = (bool) $data['members_can_create_repositories'];
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data) && \is_int($data['members_can_create_internal_repositories'])) {
            $data['members_can_create_internal_repositories'] = (bool) $data['members_can_create_internal_repositories'];
        }
        if (\array_key_exists('members_can_create_private_repositories', $data) && \is_int($data['members_can_create_private_repositories'])) {
            $data['members_can_create_private_repositories'] = (bool) $data['members_can_create_private_repositories'];
        }
        if (\array_key_exists('members_can_create_public_repositories', $data) && \is_int($data['members_can_create_public_repositories'])) {
            $data['members_can_create_public_repositories'] = (bool) $data['members_can_create_public_repositories'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgPatchBodyConstraint());
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('billingEmail') && null !== $data->getBillingEmail()) {
            $dataArray['billing_email'] = $data->getBillingEmail();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('twitterUsername') && null !== $data->getTwitterUsername()) {
            $dataArray['twitter_username'] = $data->getTwitterUsername();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('hasOrganizationProjects') && null !== $data->getHasOrganizationProjects()) {
            $dataArray['has_organization_projects'] = $data->getHasOrganizationProjects();
        }
        if ($data->isInitialized('hasRepositoryProjects') && null !== $data->getHasRepositoryProjects()) {
            $dataArray['has_repository_projects'] = $data->getHasRepositoryProjects();
        }
        if ($data->isInitialized('defaultRepositoryPermission') && null !== $data->getDefaultRepositoryPermission()) {
            $dataArray['default_repository_permission'] = $data->getDefaultRepositoryPermission();
        }
        if ($data->isInitialized('membersCanCreateRepositories') && null !== $data->getMembersCanCreateRepositories()) {
            $dataArray['members_can_create_repositories'] = $data->getMembersCanCreateRepositories();
        }
        if ($data->isInitialized('membersCanCreateInternalRepositories') && null !== $data->getMembersCanCreateInternalRepositories()) {
            $dataArray['members_can_create_internal_repositories'] = $data->getMembersCanCreateInternalRepositories();
        }
        if ($data->isInitialized('membersCanCreatePrivateRepositories') && null !== $data->getMembersCanCreatePrivateRepositories()) {
            $dataArray['members_can_create_private_repositories'] = $data->getMembersCanCreatePrivateRepositories();
        }
        if ($data->isInitialized('membersCanCreatePublicRepositories') && null !== $data->getMembersCanCreatePublicRepositories()) {
            $dataArray['members_can_create_public_repositories'] = $data->getMembersCanCreatePublicRepositories();
        }
        if ($data->isInitialized('membersAllowedRepositoryCreationType') && null !== $data->getMembersAllowedRepositoryCreationType()) {
            $dataArray['members_allowed_repository_creation_type'] = $data->getMembersAllowedRepositoryCreationType();
        }
        if ($data->isInitialized('blog') && null !== $data->getBlog()) {
            $dataArray['blog'] = $data->getBlog();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgPatchBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgPatchBody::class => false];
    }
}