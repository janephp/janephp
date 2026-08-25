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
class BranchRestrictionPolicyAppsItemOwnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\BranchRestrictionPolicyAppsItemOwner::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\BranchRestrictionPolicyAppsItemOwner::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\BranchRestrictionPolicyAppsItemOwner();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemOwnerConstraint());
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
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('gravatar_id', $data)) {
            $object->setGravatarId($data['gravatar_id']);
            unset($data['gravatar_id']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('followers_url', $data)) {
            $object->setFollowersUrl($data['followers_url']);
            unset($data['followers_url']);
        }
        if (\array_key_exists('following_url', $data)) {
            $object->setFollowingUrl($data['following_url']);
            unset($data['following_url']);
        }
        if (\array_key_exists('gists_url', $data)) {
            $object->setGistsUrl($data['gists_url']);
            unset($data['gists_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
            unset($data['starred_url']);
        }
        if (\array_key_exists('subscriptions_url', $data)) {
            $object->setSubscriptionsUrl($data['subscriptions_url']);
            unset($data['subscriptions_url']);
        }
        if (\array_key_exists('organizations_url', $data)) {
            $object->setOrganizationsUrl($data['organizations_url']);
            unset($data['organizations_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
            unset($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if ($data->isInitialized('login') && null !== $data->getLogin()) {
            $dataArray['login'] = $data->getLogin();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('reposUrl') && null !== $data->getReposUrl()) {
            $dataArray['repos_url'] = $data->getReposUrl();
        }
        if ($data->isInitialized('eventsUrl') && null !== $data->getEventsUrl()) {
            $dataArray['events_url'] = $data->getEventsUrl();
        }
        if ($data->isInitialized('hooksUrl') && null !== $data->getHooksUrl()) {
            $dataArray['hooks_url'] = $data->getHooksUrl();
        }
        if ($data->isInitialized('issuesUrl') && null !== $data->getIssuesUrl()) {
            $dataArray['issues_url'] = $data->getIssuesUrl();
        }
        if ($data->isInitialized('membersUrl') && null !== $data->getMembersUrl()) {
            $dataArray['members_url'] = $data->getMembersUrl();
        }
        if ($data->isInitialized('publicMembersUrl') && null !== $data->getPublicMembersUrl()) {
            $dataArray['public_members_url'] = $data->getPublicMembersUrl();
        }
        if ($data->isInitialized('avatarUrl') && null !== $data->getAvatarUrl()) {
            $dataArray['avatar_url'] = $data->getAvatarUrl();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('gravatarId') && null !== $data->getGravatarId()) {
            $dataArray['gravatar_id'] = $data->getGravatarId();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('followersUrl') && null !== $data->getFollowersUrl()) {
            $dataArray['followers_url'] = $data->getFollowersUrl();
        }
        if ($data->isInitialized('followingUrl') && null !== $data->getFollowingUrl()) {
            $dataArray['following_url'] = $data->getFollowingUrl();
        }
        if ($data->isInitialized('gistsUrl') && null !== $data->getGistsUrl()) {
            $dataArray['gists_url'] = $data->getGistsUrl();
        }
        if ($data->isInitialized('starredUrl') && null !== $data->getStarredUrl()) {
            $dataArray['starred_url'] = $data->getStarredUrl();
        }
        if ($data->isInitialized('subscriptionsUrl') && null !== $data->getSubscriptionsUrl()) {
            $dataArray['subscriptions_url'] = $data->getSubscriptionsUrl();
        }
        if ($data->isInitialized('organizationsUrl') && null !== $data->getOrganizationsUrl()) {
            $dataArray['organizations_url'] = $data->getOrganizationsUrl();
        }
        if ($data->isInitialized('receivedEventsUrl') && null !== $data->getReceivedEventsUrl()) {
            $dataArray['received_events_url'] = $data->getReceivedEventsUrl();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\BranchRestrictionPolicyAppsItemOwnerConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\BranchRestrictionPolicyAppsItemOwner::class => false];
    }
}