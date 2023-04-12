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
class BranchRestrictionPolicyAppsItemOwnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\BranchRestrictionPolicyAppsItemOwner';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicyAppsItemOwner';
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
        $object = new \Github\Model\BranchRestrictionPolicyAppsItemOwner();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemOwnerConstraint());
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('login') && null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('reposUrl') && null !== $object->getReposUrl()) {
            $data['repos_url'] = $object->getReposUrl();
        }
        if ($object->isInitialized('eventsUrl') && null !== $object->getEventsUrl()) {
            $data['events_url'] = $object->getEventsUrl();
        }
        if ($object->isInitialized('hooksUrl') && null !== $object->getHooksUrl()) {
            $data['hooks_url'] = $object->getHooksUrl();
        }
        if ($object->isInitialized('issuesUrl') && null !== $object->getIssuesUrl()) {
            $data['issues_url'] = $object->getIssuesUrl();
        }
        if ($object->isInitialized('membersUrl') && null !== $object->getMembersUrl()) {
            $data['members_url'] = $object->getMembersUrl();
        }
        if ($object->isInitialized('publicMembersUrl') && null !== $object->getPublicMembersUrl()) {
            $data['public_members_url'] = $object->getPublicMembersUrl();
        }
        if ($object->isInitialized('avatarUrl') && null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('gravatarId') && null !== $object->getGravatarId()) {
            $data['gravatar_id'] = $object->getGravatarId();
        }
        if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if ($object->isInitialized('followersUrl') && null !== $object->getFollowersUrl()) {
            $data['followers_url'] = $object->getFollowersUrl();
        }
        if ($object->isInitialized('followingUrl') && null !== $object->getFollowingUrl()) {
            $data['following_url'] = $object->getFollowingUrl();
        }
        if ($object->isInitialized('gistsUrl') && null !== $object->getGistsUrl()) {
            $data['gists_url'] = $object->getGistsUrl();
        }
        if ($object->isInitialized('starredUrl') && null !== $object->getStarredUrl()) {
            $data['starred_url'] = $object->getStarredUrl();
        }
        if ($object->isInitialized('subscriptionsUrl') && null !== $object->getSubscriptionsUrl()) {
            $data['subscriptions_url'] = $object->getSubscriptionsUrl();
        }
        if ($object->isInitialized('organizationsUrl') && null !== $object->getOrganizationsUrl()) {
            $data['organizations_url'] = $object->getOrganizationsUrl();
        }
        if ($object->isInitialized('receivedEventsUrl') && null !== $object->getReceivedEventsUrl()) {
            $data['received_events_url'] = $object->getReceivedEventsUrl();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemOwnerConstraint());
        }
        return $data;
    }
}