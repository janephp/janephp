<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\OrganizationFull';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationFull';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrganizationFull();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
        }
        if (\array_key_exists('members_url', $data)) {
            $object->setMembersUrl($data['members_url']);
        }
        if (\array_key_exists('public_members_url', $data)) {
            $object->setPublicMembersUrl($data['public_members_url']);
        }
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
        }
        if (\array_key_exists('blog', $data)) {
            $object->setBlog($data['blog']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('twitter_username', $data) && $data['twitter_username'] !== null) {
            $object->setTwitterUsername($data['twitter_username']);
        }
        elseif (\array_key_exists('twitter_username', $data) && $data['twitter_username'] === null) {
            $object->setTwitterUsername(null);
        }
        if (\array_key_exists('is_verified', $data)) {
            $object->setIsVerified($data['is_verified']);
        }
        if (\array_key_exists('has_organization_projects', $data)) {
            $object->setHasOrganizationProjects($data['has_organization_projects']);
        }
        if (\array_key_exists('has_repository_projects', $data)) {
            $object->setHasRepositoryProjects($data['has_repository_projects']);
        }
        if (\array_key_exists('public_repos', $data)) {
            $object->setPublicRepos($data['public_repos']);
        }
        if (\array_key_exists('public_gists', $data)) {
            $object->setPublicGists($data['public_gists']);
        }
        if (\array_key_exists('followers', $data)) {
            $object->setFollowers($data['followers']);
        }
        if (\array_key_exists('following', $data)) {
            $object->setFollowing($data['following']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('total_private_repos', $data)) {
            $object->setTotalPrivateRepos($data['total_private_repos']);
        }
        if (\array_key_exists('owned_private_repos', $data)) {
            $object->setOwnedPrivateRepos($data['owned_private_repos']);
        }
        if (\array_key_exists('private_gists', $data) && $data['private_gists'] !== null) {
            $object->setPrivateGists($data['private_gists']);
        }
        elseif (\array_key_exists('private_gists', $data) && $data['private_gists'] === null) {
            $object->setPrivateGists(null);
        }
        if (\array_key_exists('disk_usage', $data) && $data['disk_usage'] !== null) {
            $object->setDiskUsage($data['disk_usage']);
        }
        elseif (\array_key_exists('disk_usage', $data) && $data['disk_usage'] === null) {
            $object->setDiskUsage(null);
        }
        if (\array_key_exists('collaborators', $data) && $data['collaborators'] !== null) {
            $object->setCollaborators($data['collaborators']);
        }
        elseif (\array_key_exists('collaborators', $data) && $data['collaborators'] === null) {
            $object->setCollaborators(null);
        }
        if (\array_key_exists('billing_email', $data) && $data['billing_email'] !== null) {
            $object->setBillingEmail($data['billing_email']);
        }
        elseif (\array_key_exists('billing_email', $data) && $data['billing_email'] === null) {
            $object->setBillingEmail(null);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\OrganizationFullPlan', 'json', $context));
        }
        if (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] !== null) {
            $object->setDefaultRepositoryPermission($data['default_repository_permission']);
        }
        elseif (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] === null) {
            $object->setDefaultRepositoryPermission(null);
        }
        if (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] !== null) {
            $object->setMembersCanCreateRepositories($data['members_can_create_repositories']);
        }
        elseif (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] === null) {
            $object->setMembersCanCreateRepositories(null);
        }
        if (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] !== null) {
            $object->setTwoFactorRequirementEnabled($data['two_factor_requirement_enabled']);
        }
        elseif (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] === null) {
            $object->setTwoFactorRequirementEnabled(null);
        }
        if (\array_key_exists('members_allowed_repository_creation_type', $data)) {
            $object->setMembersAllowedRepositoryCreationType($data['members_allowed_repository_creation_type']);
        }
        if (\array_key_exists('members_can_create_public_repositories', $data)) {
            $object->setMembersCanCreatePublicRepositories($data['members_can_create_public_repositories']);
        }
        if (\array_key_exists('members_can_create_private_repositories', $data)) {
            $object->setMembersCanCreatePrivateRepositories($data['members_can_create_private_repositories']);
        }
        if (\array_key_exists('members_can_create_internal_repositories', $data)) {
            $object->setMembersCanCreateInternalRepositories($data['members_can_create_internal_repositories']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getReposUrl()) {
            $data['repos_url'] = $object->getReposUrl();
        }
        if (null !== $object->getEventsUrl()) {
            $data['events_url'] = $object->getEventsUrl();
        }
        if (null !== $object->getHooksUrl()) {
            $data['hooks_url'] = $object->getHooksUrl();
        }
        if (null !== $object->getIssuesUrl()) {
            $data['issues_url'] = $object->getIssuesUrl();
        }
        if (null !== $object->getMembersUrl()) {
            $data['members_url'] = $object->getMembersUrl();
        }
        if (null !== $object->getPublicMembersUrl()) {
            $data['public_members_url'] = $object->getPublicMembersUrl();
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        $data['description'] = $object->getDescription();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getBlog()) {
            $data['blog'] = $object->getBlog();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        $data['twitter_username'] = $object->getTwitterUsername();
        if (null !== $object->getIsVerified()) {
            $data['is_verified'] = $object->getIsVerified();
        }
        if (null !== $object->getHasOrganizationProjects()) {
            $data['has_organization_projects'] = $object->getHasOrganizationProjects();
        }
        if (null !== $object->getHasRepositoryProjects()) {
            $data['has_repository_projects'] = $object->getHasRepositoryProjects();
        }
        if (null !== $object->getPublicRepos()) {
            $data['public_repos'] = $object->getPublicRepos();
        }
        if (null !== $object->getPublicGists()) {
            $data['public_gists'] = $object->getPublicGists();
        }
        if (null !== $object->getFollowers()) {
            $data['followers'] = $object->getFollowers();
        }
        if (null !== $object->getFollowing()) {
            $data['following'] = $object->getFollowing();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getTotalPrivateRepos()) {
            $data['total_private_repos'] = $object->getTotalPrivateRepos();
        }
        if (null !== $object->getOwnedPrivateRepos()) {
            $data['owned_private_repos'] = $object->getOwnedPrivateRepos();
        }
        $data['private_gists'] = $object->getPrivateGists();
        $data['disk_usage'] = $object->getDiskUsage();
        $data['collaborators'] = $object->getCollaborators();
        $data['billing_email'] = $object->getBillingEmail();
        if (null !== $object->getPlan()) {
            $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
        }
        $data['default_repository_permission'] = $object->getDefaultRepositoryPermission();
        $data['members_can_create_repositories'] = $object->getMembersCanCreateRepositories();
        $data['two_factor_requirement_enabled'] = $object->getTwoFactorRequirementEnabled();
        if (null !== $object->getMembersAllowedRepositoryCreationType()) {
            $data['members_allowed_repository_creation_type'] = $object->getMembersAllowedRepositoryCreationType();
        }
        if (null !== $object->getMembersCanCreatePublicRepositories()) {
            $data['members_can_create_public_repositories'] = $object->getMembersCanCreatePublicRepositories();
        }
        if (null !== $object->getMembersCanCreatePrivateRepositories()) {
            $data['members_can_create_private_repositories'] = $object->getMembersCanCreatePrivateRepositories();
        }
        if (null !== $object->getMembersCanCreateInternalRepositories()) {
            $data['members_can_create_internal_repositories'] = $object->getMembersCanCreateInternalRepositories();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}