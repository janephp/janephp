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
class OrganizationFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\OrganizationFull';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationFull';
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
        $object = new \Github\Model\OrganizationFull();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationFullConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
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
        }
        if (\array_key_exists('disk_usage', $data) && $data['disk_usage'] !== null) {
            $object->setDiskUsage($data['disk_usage']);
            unset($data['disk_usage']);
        }
        elseif (\array_key_exists('disk_usage', $data) && $data['disk_usage'] === null) {
            $object->setDiskUsage(null);
        }
        if (\array_key_exists('collaborators', $data) && $data['collaborators'] !== null) {
            $object->setCollaborators($data['collaborators']);
            unset($data['collaborators']);
        }
        elseif (\array_key_exists('collaborators', $data) && $data['collaborators'] === null) {
            $object->setCollaborators(null);
        }
        if (\array_key_exists('billing_email', $data) && $data['billing_email'] !== null) {
            $object->setBillingEmail($data['billing_email']);
            unset($data['billing_email']);
        }
        elseif (\array_key_exists('billing_email', $data) && $data['billing_email'] === null) {
            $object->setBillingEmail(null);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\OrganizationFullPlan', 'json', $context));
            unset($data['plan']);
        }
        if (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] !== null) {
            $object->setDefaultRepositoryPermission($data['default_repository_permission']);
            unset($data['default_repository_permission']);
        }
        elseif (\array_key_exists('default_repository_permission', $data) && $data['default_repository_permission'] === null) {
            $object->setDefaultRepositoryPermission(null);
        }
        if (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] !== null) {
            $object->setMembersCanCreateRepositories($data['members_can_create_repositories']);
            unset($data['members_can_create_repositories']);
        }
        elseif (\array_key_exists('members_can_create_repositories', $data) && $data['members_can_create_repositories'] === null) {
            $object->setMembersCanCreateRepositories(null);
        }
        if (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] !== null) {
            $object->setTwoFactorRequirementEnabled($data['two_factor_requirement_enabled']);
            unset($data['two_factor_requirement_enabled']);
        }
        elseif (\array_key_exists('two_factor_requirement_enabled', $data) && $data['two_factor_requirement_enabled'] === null) {
            $object->setTwoFactorRequirementEnabled(null);
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
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
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
        $data['login'] = $object->getLogin();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['url'] = $object->getUrl();
        $data['repos_url'] = $object->getReposUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['hooks_url'] = $object->getHooksUrl();
        $data['issues_url'] = $object->getIssuesUrl();
        $data['members_url'] = $object->getMembersUrl();
        $data['public_members_url'] = $object->getPublicMembersUrl();
        $data['avatar_url'] = $object->getAvatarUrl();
        $data['description'] = $object->getDescription();
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if ($object->isInitialized('blog') && null !== $object->getBlog()) {
            $data['blog'] = $object->getBlog();
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('twitterUsername') && null !== $object->getTwitterUsername()) {
            $data['twitter_username'] = $object->getTwitterUsername();
        }
        if ($object->isInitialized('isVerified') && null !== $object->getIsVerified()) {
            $data['is_verified'] = $object->getIsVerified();
        }
        $data['has_organization_projects'] = $object->getHasOrganizationProjects();
        $data['has_repository_projects'] = $object->getHasRepositoryProjects();
        $data['public_repos'] = $object->getPublicRepos();
        $data['public_gists'] = $object->getPublicGists();
        $data['followers'] = $object->getFollowers();
        $data['following'] = $object->getFollowing();
        $data['html_url'] = $object->getHtmlUrl();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['type'] = $object->getType();
        if ($object->isInitialized('totalPrivateRepos') && null !== $object->getTotalPrivateRepos()) {
            $data['total_private_repos'] = $object->getTotalPrivateRepos();
        }
        if ($object->isInitialized('ownedPrivateRepos') && null !== $object->getOwnedPrivateRepos()) {
            $data['owned_private_repos'] = $object->getOwnedPrivateRepos();
        }
        if ($object->isInitialized('privateGists') && null !== $object->getPrivateGists()) {
            $data['private_gists'] = $object->getPrivateGists();
        }
        if ($object->isInitialized('diskUsage') && null !== $object->getDiskUsage()) {
            $data['disk_usage'] = $object->getDiskUsage();
        }
        if ($object->isInitialized('collaborators') && null !== $object->getCollaborators()) {
            $data['collaborators'] = $object->getCollaborators();
        }
        if ($object->isInitialized('billingEmail') && null !== $object->getBillingEmail()) {
            $data['billing_email'] = $object->getBillingEmail();
        }
        if ($object->isInitialized('plan') && null !== $object->getPlan()) {
            $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
        }
        if ($object->isInitialized('defaultRepositoryPermission') && null !== $object->getDefaultRepositoryPermission()) {
            $data['default_repository_permission'] = $object->getDefaultRepositoryPermission();
        }
        if ($object->isInitialized('membersCanCreateRepositories') && null !== $object->getMembersCanCreateRepositories()) {
            $data['members_can_create_repositories'] = $object->getMembersCanCreateRepositories();
        }
        if ($object->isInitialized('twoFactorRequirementEnabled') && null !== $object->getTwoFactorRequirementEnabled()) {
            $data['two_factor_requirement_enabled'] = $object->getTwoFactorRequirementEnabled();
        }
        if ($object->isInitialized('membersAllowedRepositoryCreationType') && null !== $object->getMembersAllowedRepositoryCreationType()) {
            $data['members_allowed_repository_creation_type'] = $object->getMembersAllowedRepositoryCreationType();
        }
        if ($object->isInitialized('membersCanCreatePublicRepositories') && null !== $object->getMembersCanCreatePublicRepositories()) {
            $data['members_can_create_public_repositories'] = $object->getMembersCanCreatePublicRepositories();
        }
        if ($object->isInitialized('membersCanCreatePrivateRepositories') && null !== $object->getMembersCanCreatePrivateRepositories()) {
            $data['members_can_create_private_repositories'] = $object->getMembersCanCreatePrivateRepositories();
        }
        if ($object->isInitialized('membersCanCreateInternalRepositories') && null !== $object->getMembersCanCreateInternalRepositories()) {
            $data['members_can_create_internal_repositories'] = $object->getMembersCanCreateInternalRepositories();
        }
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationFullConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}