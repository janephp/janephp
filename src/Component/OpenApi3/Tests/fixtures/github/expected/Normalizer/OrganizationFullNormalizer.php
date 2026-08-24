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
class OrganizationFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrganizationFull::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrganizationFull::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrganizationFull();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_verified', $data) && \is_int($data['is_verified'])) {
            $data['is_verified'] = (bool) $data['is_verified'];
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
        if (\array_key_exists('two_factor_requirement_enabled', $data) && \is_int($data['two_factor_requirement_enabled'])) {
            $data['two_factor_requirement_enabled'] = (bool) $data['two_factor_requirement_enabled'];
        }
        if (\array_key_exists('members_can_create_public_repositories', $data) && \is_int($data['members_can_create_public_repositories'])) {
            $data['members_can_create_public_repositories'] = (bool) $data['members_can_create_public_repositories'];
        }
        if (\array_key_exists('members_can_create_private_repositories', $data) && \is_int($data['members_can_create_private_repositories'])) {
            $data['members_can_create_private_repositories'] = (bool) $data['members_can_create_private_repositories'];
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data) && \is_int($data['members_can_create_internal_repositories'])) {
            $data['members_can_create_internal_repositories'] = (bool) $data['members_can_create_internal_repositories'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationFullConstraint());
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
            unset($data['login']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
            unset($data['repos_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
            unset($data['hooks_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
            unset($data['issues_url']);
        }
        if (\array_key_exists('members_url', $data)) {
            $object->setMembersUrl($data['members_url']);
            unset($data['members_url']);
        }
        if (\array_key_exists('public_members_url', $data)) {
            $object->setPublicMembersUrl($data['public_members_url']);
            unset($data['public_members_url']);
        }
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
            unset($data['avatar_url']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('blog', $data)) {
            $object->setBlog($data['blog']);
            unset($data['blog']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('twitter_username', $data) && $data['twitter_username'] !== null) {
            $object->setTwitterUsername($data['twitter_username']);
            unset($data['twitter_username']);
        }
        elseif (\array_key_exists('twitter_username', $data) && $data['twitter_username'] === null) {
            $object->setTwitterUsername(null);
            unset($data['twitter_username']);
        }
        if (\array_key_exists('is_verified', $data)) {
            $object->setIsVerified($data['is_verified']);
            unset($data['is_verified']);
        }
        if (\array_key_exists('has_organization_projects', $data)) {
            $object->setHasOrganizationProjects($data['has_organization_projects']);
            unset($data['has_organization_projects']);
        }
        if (\array_key_exists('has_repository_projects', $data)) {
            $object->setHasRepositoryProjects($data['has_repository_projects']);
            unset($data['has_repository_projects']);
        }
        if (\array_key_exists('public_repos', $data)) {
            $object->setPublicRepos($data['public_repos']);
            unset($data['public_repos']);
        }
        if (\array_key_exists('public_gists', $data)) {
            $object->setPublicGists($data['public_gists']);
            unset($data['public_gists']);
        }
        if (\array_key_exists('followers', $data)) {
            $object->setFollowers($data['followers']);
            unset($data['followers']);
        }
        if (\array_key_exists('following', $data)) {
            $object->setFollowing($data['following']);
            unset($data['following']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('total_private_repos', $data)) {
            $object->setTotalPrivateRepos($data['total_private_repos']);
            unset($data['total_private_repos']);
        }
        if (\array_key_exists('owned_private_repos', $data)) {
            $object->setOwnedPrivateRepos($data['owned_private_repos']);
            unset($data['owned_private_repos']);
        }
        if (\array_key_exists('private_gists', $data) && $data['private_gists'] !== null) {
            $object->setPrivateGists($data['private_gists']);
            unset($data['private_gists']);
        }
        elseif (\array_key_exists('private_gists', $data) && $data['private_gists'] === null) {
            $object->setPrivateGists(null);
            unset($data['private_gists']);
        }
        if (\array_key_exists('disk_usage', $data) && $data['disk_usage'] !== null) {
            $object->setDiskUsage($data['disk_usage']);
            unset($data['disk_usage']);
        }
        elseif (\array_key_exists('disk_usage', $data) && $data['disk_usage'] === null) {
            $object->setDiskUsage(null);
            unset($data['disk_usage']);
        }
        if (\array_key_exists('collaborators', $data) && $data['collaborators'] !== null) {
            $object->setCollaborators($data['collaborators']);
            unset($data['collaborators']);
        }
        elseif (\array_key_exists('collaborators', $data) && $data['collaborators'] === null) {
            $object->setCollaborators(null);
            unset($data['collaborators']);
        }
        if (\array_key_exists('billing_email', $data) && $data['billing_email'] !== null) {
            $object->setBillingEmail($data['billing_email']);
            unset($data['billing_email']);
        }
        elseif (\array_key_exists('billing_email', $data) && $data['billing_email'] === null) {
            $object->setBillingEmail(null);
            unset($data['billing_email']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], \Github\Model\OrganizationFullPlan::class, 'json', $context));
            unset($data['plan']);
        }
        if (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] !== null) {
            $object->setDefaultRepositoryPermission($data['default_repository_permission']);
            unset($data['default_repository_permission']);
        }
        elseif (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] === null) {
            $object->setDefaultRepositoryPermission(null);
            unset($data['default_repository_permission']);
        }
        if (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] !== null) {
            $object->setMembersCanCreateRepositories($data['members_can_create_repositories']);
            unset($data['members_can_create_repositories']);
        }
        elseif (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] === null) {
            $object->setMembersCanCreateRepositories(null);
            unset($data['members_can_create_repositories']);
        }
        if (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] !== null) {
            $object->setTwoFactorRequirementEnabled($data['two_factor_requirement_enabled']);
            unset($data['two_factor_requirement_enabled']);
        }
        elseif (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] === null) {
            $object->setTwoFactorRequirementEnabled(null);
            unset($data['two_factor_requirement_enabled']);
        }
        if (\array_key_exists('members_allowed_repository_creation_type', $data)) {
            $object->setMembersAllowedRepositoryCreationType($data['members_allowed_repository_creation_type']);
            unset($data['members_allowed_repository_creation_type']);
        }
        if (\array_key_exists('members_can_create_public_repositories', $data)) {
            $object->setMembersCanCreatePublicRepositories($data['members_can_create_public_repositories']);
            unset($data['members_can_create_public_repositories']);
        }
        if (\array_key_exists('members_can_create_private_repositories', $data)) {
            $object->setMembersCanCreatePrivateRepositories($data['members_can_create_private_repositories']);
            unset($data['members_can_create_private_repositories']);
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data)) {
            $object->setMembersCanCreateInternalRepositories($data['members_can_create_internal_repositories']);
            unset($data['members_can_create_internal_repositories']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
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
        $dataArray['login'] = $data->getLogin();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['url'] = $data->getUrl();
        $dataArray['repos_url'] = $data->getReposUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['hooks_url'] = $data->getHooksUrl();
        $dataArray['issues_url'] = $data->getIssuesUrl();
        $dataArray['members_url'] = $data->getMembersUrl();
        $dataArray['public_members_url'] = $data->getPublicMembersUrl();
        $dataArray['avatar_url'] = $data->getAvatarUrl();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('blog') && null !== $data->getBlog()) {
            $dataArray['blog'] = $data->getBlog();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('twitterUsername') && null !== $data->getTwitterUsername()) {
            $dataArray['twitter_username'] = $data->getTwitterUsername();
        }
        if ($data->isInitialized('isVerified') && null !== $data->getIsVerified()) {
            $dataArray['is_verified'] = $data->getIsVerified();
        }
        $dataArray['has_organization_projects'] = $data->getHasOrganizationProjects();
        $dataArray['has_repository_projects'] = $data->getHasRepositoryProjects();
        $dataArray['public_repos'] = $data->getPublicRepos();
        $dataArray['public_gists'] = $data->getPublicGists();
        $dataArray['followers'] = $data->getFollowers();
        $dataArray['following'] = $data->getFollowing();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['type'] = $data->getType();
        if ($data->isInitialized('totalPrivateRepos') && null !== $data->getTotalPrivateRepos()) {
            $dataArray['total_private_repos'] = $data->getTotalPrivateRepos();
        }
        if ($data->isInitialized('ownedPrivateRepos') && null !== $data->getOwnedPrivateRepos()) {
            $dataArray['owned_private_repos'] = $data->getOwnedPrivateRepos();
        }
        if ($data->isInitialized('privateGists') && null !== $data->getPrivateGists()) {
            $dataArray['private_gists'] = $data->getPrivateGists();
        }
        if ($data->isInitialized('diskUsage') && null !== $data->getDiskUsage()) {
            $dataArray['disk_usage'] = $data->getDiskUsage();
        }
        if ($data->isInitialized('collaborators') && null !== $data->getCollaborators()) {
            $dataArray['collaborators'] = $data->getCollaborators();
        }
        if ($data->isInitialized('billingEmail') && null !== $data->getBillingEmail()) {
            $dataArray['billing_email'] = $data->getBillingEmail();
        }
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $data->getPlan() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPlan(), 'json', $context));
        }
        if ($data->isInitialized('defaultRepositoryPermission') && null !== $data->getDefaultRepositoryPermission()) {
            $dataArray['default_repository_permission'] = $data->getDefaultRepositoryPermission();
        }
        if ($data->isInitialized('membersCanCreateRepositories') && null !== $data->getMembersCanCreateRepositories()) {
            $dataArray['members_can_create_repositories'] = $data->getMembersCanCreateRepositories();
        }
        if ($data->isInitialized('twoFactorRequirementEnabled') && null !== $data->getTwoFactorRequirementEnabled()) {
            $dataArray['two_factor_requirement_enabled'] = $data->getTwoFactorRequirementEnabled();
        }
        if ($data->isInitialized('membersAllowedRepositoryCreationType') && null !== $data->getMembersAllowedRepositoryCreationType()) {
            $dataArray['members_allowed_repository_creation_type'] = $data->getMembersAllowedRepositoryCreationType();
        }
        if ($data->isInitialized('membersCanCreatePublicRepositories') && null !== $data->getMembersCanCreatePublicRepositories()) {
            $dataArray['members_can_create_public_repositories'] = $data->getMembersCanCreatePublicRepositories();
        }
        if ($data->isInitialized('membersCanCreatePrivateRepositories') && null !== $data->getMembersCanCreatePrivateRepositories()) {
            $dataArray['members_can_create_private_repositories'] = $data->getMembersCanCreatePrivateRepositories();
        }
        if ($data->isInitialized('membersCanCreateInternalRepositories') && null !== $data->getMembersCanCreateInternalRepositories()) {
            $dataArray['members_can_create_internal_repositories'] = $data->getMembersCanCreateInternalRepositories();
        }
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrganizationFullConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrganizationFull::class => false];
    }
}