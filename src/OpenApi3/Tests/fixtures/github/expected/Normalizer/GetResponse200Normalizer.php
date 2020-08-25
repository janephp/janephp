<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\GetResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GetResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GetResponse200();
        if (\array_key_exists('current_user_url', $data)) {
            $object->setCurrentUserUrl($data['current_user_url']);
        }
        if (\array_key_exists('current_user_authorizations_html_url', $data)) {
            $object->setCurrentUserAuthorizationsHtmlUrl($data['current_user_authorizations_html_url']);
        }
        if (\array_key_exists('authorizations_url', $data)) {
            $object->setAuthorizationsUrl($data['authorizations_url']);
        }
        if (\array_key_exists('code_search_url', $data)) {
            $object->setCodeSearchUrl($data['code_search_url']);
        }
        if (\array_key_exists('commit_search_url', $data)) {
            $object->setCommitSearchUrl($data['commit_search_url']);
        }
        if (\array_key_exists('emails_url', $data)) {
            $object->setEmailsUrl($data['emails_url']);
        }
        if (\array_key_exists('emojis_url', $data)) {
            $object->setEmojisUrl($data['emojis_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('feeds_url', $data)) {
            $object->setFeedsUrl($data['feeds_url']);
        }
        if (\array_key_exists('followers_url', $data)) {
            $object->setFollowersUrl($data['followers_url']);
        }
        if (\array_key_exists('following_url', $data)) {
            $object->setFollowingUrl($data['following_url']);
        }
        if (\array_key_exists('gists_url', $data)) {
            $object->setGistsUrl($data['gists_url']);
        }
        if (\array_key_exists('hub_url', $data)) {
            $object->setHubUrl($data['hub_url']);
        }
        if (\array_key_exists('issue_search_url', $data)) {
            $object->setIssueSearchUrl($data['issue_search_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
        }
        if (\array_key_exists('label_search_url', $data)) {
            $object->setLabelSearchUrl($data['label_search_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
        }
        if (\array_key_exists('organization_url', $data)) {
            $object->setOrganizationUrl($data['organization_url']);
        }
        if (\array_key_exists('organization_repositories_url', $data)) {
            $object->setOrganizationRepositoriesUrl($data['organization_repositories_url']);
        }
        if (\array_key_exists('organization_teams_url', $data)) {
            $object->setOrganizationTeamsUrl($data['organization_teams_url']);
        }
        if (\array_key_exists('public_gists_url', $data)) {
            $object->setPublicGistsUrl($data['public_gists_url']);
        }
        if (\array_key_exists('rate_limit_url', $data)) {
            $object->setRateLimitUrl($data['rate_limit_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
        }
        if (\array_key_exists('repository_search_url', $data)) {
            $object->setRepositorySearchUrl($data['repository_search_url']);
        }
        if (\array_key_exists('current_user_repositories_url', $data)) {
            $object->setCurrentUserRepositoriesUrl($data['current_user_repositories_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
        }
        if (\array_key_exists('starred_gists_url', $data)) {
            $object->setStarredGistsUrl($data['starred_gists_url']);
        }
        if (\array_key_exists('topic_search_url', $data)) {
            $object->setTopicSearchUrl($data['topic_search_url']);
        }
        if (\array_key_exists('user_url', $data)) {
            $object->setUserUrl($data['user_url']);
        }
        if (\array_key_exists('user_organizations_url', $data)) {
            $object->setUserOrganizationsUrl($data['user_organizations_url']);
        }
        if (\array_key_exists('user_repositories_url', $data)) {
            $object->setUserRepositoriesUrl($data['user_repositories_url']);
        }
        if (\array_key_exists('user_search_url', $data)) {
            $object->setUserSearchUrl($data['user_search_url']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrentUserUrl()) {
            $data['current_user_url'] = $object->getCurrentUserUrl();
        }
        if (null !== $object->getCurrentUserAuthorizationsHtmlUrl()) {
            $data['current_user_authorizations_html_url'] = $object->getCurrentUserAuthorizationsHtmlUrl();
        }
        if (null !== $object->getAuthorizationsUrl()) {
            $data['authorizations_url'] = $object->getAuthorizationsUrl();
        }
        if (null !== $object->getCodeSearchUrl()) {
            $data['code_search_url'] = $object->getCodeSearchUrl();
        }
        if (null !== $object->getCommitSearchUrl()) {
            $data['commit_search_url'] = $object->getCommitSearchUrl();
        }
        if (null !== $object->getEmailsUrl()) {
            $data['emails_url'] = $object->getEmailsUrl();
        }
        if (null !== $object->getEmojisUrl()) {
            $data['emojis_url'] = $object->getEmojisUrl();
        }
        if (null !== $object->getEventsUrl()) {
            $data['events_url'] = $object->getEventsUrl();
        }
        if (null !== $object->getFeedsUrl()) {
            $data['feeds_url'] = $object->getFeedsUrl();
        }
        if (null !== $object->getFollowersUrl()) {
            $data['followers_url'] = $object->getFollowersUrl();
        }
        if (null !== $object->getFollowingUrl()) {
            $data['following_url'] = $object->getFollowingUrl();
        }
        if (null !== $object->getGistsUrl()) {
            $data['gists_url'] = $object->getGistsUrl();
        }
        if (null !== $object->getHubUrl()) {
            $data['hub_url'] = $object->getHubUrl();
        }
        if (null !== $object->getIssueSearchUrl()) {
            $data['issue_search_url'] = $object->getIssueSearchUrl();
        }
        if (null !== $object->getIssuesUrl()) {
            $data['issues_url'] = $object->getIssuesUrl();
        }
        if (null !== $object->getKeysUrl()) {
            $data['keys_url'] = $object->getKeysUrl();
        }
        if (null !== $object->getLabelSearchUrl()) {
            $data['label_search_url'] = $object->getLabelSearchUrl();
        }
        if (null !== $object->getNotificationsUrl()) {
            $data['notifications_url'] = $object->getNotificationsUrl();
        }
        if (null !== $object->getOrganizationUrl()) {
            $data['organization_url'] = $object->getOrganizationUrl();
        }
        if (null !== $object->getOrganizationRepositoriesUrl()) {
            $data['organization_repositories_url'] = $object->getOrganizationRepositoriesUrl();
        }
        if (null !== $object->getOrganizationTeamsUrl()) {
            $data['organization_teams_url'] = $object->getOrganizationTeamsUrl();
        }
        if (null !== $object->getPublicGistsUrl()) {
            $data['public_gists_url'] = $object->getPublicGistsUrl();
        }
        if (null !== $object->getRateLimitUrl()) {
            $data['rate_limit_url'] = $object->getRateLimitUrl();
        }
        if (null !== $object->getRepositoryUrl()) {
            $data['repository_url'] = $object->getRepositoryUrl();
        }
        if (null !== $object->getRepositorySearchUrl()) {
            $data['repository_search_url'] = $object->getRepositorySearchUrl();
        }
        if (null !== $object->getCurrentUserRepositoriesUrl()) {
            $data['current_user_repositories_url'] = $object->getCurrentUserRepositoriesUrl();
        }
        if (null !== $object->getStarredUrl()) {
            $data['starred_url'] = $object->getStarredUrl();
        }
        if (null !== $object->getStarredGistsUrl()) {
            $data['starred_gists_url'] = $object->getStarredGistsUrl();
        }
        if (null !== $object->getTopicSearchUrl()) {
            $data['topic_search_url'] = $object->getTopicSearchUrl();
        }
        if (null !== $object->getUserUrl()) {
            $data['user_url'] = $object->getUserUrl();
        }
        if (null !== $object->getUserOrganizationsUrl()) {
            $data['user_organizations_url'] = $object->getUserOrganizationsUrl();
        }
        if (null !== $object->getUserRepositoriesUrl()) {
            $data['user_repositories_url'] = $object->getUserRepositoriesUrl();
        }
        if (null !== $object->getUserSearchUrl()) {
            $data['user_search_url'] = $object->getUserSearchUrl();
        }
        return $data;
    }
}