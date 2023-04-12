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
class GetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\GetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\GetResponse200';
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
        $object = new \Github\Model\GetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GetResponse200Constraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_user_url', $data)) {
            $object->setCurrentUserUrl($data['current_user_url']);
            unset($data['current_user_url']);
        }
        if (\array_key_exists('current_user_authorizations_html_url', $data)) {
            $object->setCurrentUserAuthorizationsHtmlUrl($data['current_user_authorizations_html_url']);
            unset($data['current_user_authorizations_html_url']);
        }
        if (\array_key_exists('authorizations_url', $data)) {
            $object->setAuthorizationsUrl($data['authorizations_url']);
            unset($data['authorizations_url']);
        }
        if (\array_key_exists('code_search_url', $data)) {
            $object->setCodeSearchUrl($data['code_search_url']);
            unset($data['code_search_url']);
        }
        if (\array_key_exists('commit_search_url', $data)) {
            $object->setCommitSearchUrl($data['commit_search_url']);
            unset($data['commit_search_url']);
        }
        if (\array_key_exists('emails_url', $data)) {
            $object->setEmailsUrl($data['emails_url']);
            unset($data['emails_url']);
        }
        if (\array_key_exists('emojis_url', $data)) {
            $object->setEmojisUrl($data['emojis_url']);
            unset($data['emojis_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('feeds_url', $data)) {
            $object->setFeedsUrl($data['feeds_url']);
            unset($data['feeds_url']);
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
        if (\array_key_exists('hub_url', $data)) {
            $object->setHubUrl($data['hub_url']);
            unset($data['hub_url']);
        }
        if (\array_key_exists('issue_search_url', $data)) {
            $object->setIssueSearchUrl($data['issue_search_url']);
            unset($data['issue_search_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
            unset($data['issues_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
            unset($data['keys_url']);
        }
        if (\array_key_exists('label_search_url', $data)) {
            $object->setLabelSearchUrl($data['label_search_url']);
            unset($data['label_search_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
            unset($data['notifications_url']);
        }
        if (\array_key_exists('organization_url', $data)) {
            $object->setOrganizationUrl($data['organization_url']);
            unset($data['organization_url']);
        }
        if (\array_key_exists('organization_repositories_url', $data)) {
            $object->setOrganizationRepositoriesUrl($data['organization_repositories_url']);
            unset($data['organization_repositories_url']);
        }
        if (\array_key_exists('organization_teams_url', $data)) {
            $object->setOrganizationTeamsUrl($data['organization_teams_url']);
            unset($data['organization_teams_url']);
        }
        if (\array_key_exists('public_gists_url', $data)) {
            $object->setPublicGistsUrl($data['public_gists_url']);
            unset($data['public_gists_url']);
        }
        if (\array_key_exists('rate_limit_url', $data)) {
            $object->setRateLimitUrl($data['rate_limit_url']);
            unset($data['rate_limit_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
            unset($data['repository_url']);
        }
        if (\array_key_exists('repository_search_url', $data)) {
            $object->setRepositorySearchUrl($data['repository_search_url']);
            unset($data['repository_search_url']);
        }
        if (\array_key_exists('current_user_repositories_url', $data)) {
            $object->setCurrentUserRepositoriesUrl($data['current_user_repositories_url']);
            unset($data['current_user_repositories_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
            unset($data['starred_url']);
        }
        if (\array_key_exists('starred_gists_url', $data)) {
            $object->setStarredGistsUrl($data['starred_gists_url']);
            unset($data['starred_gists_url']);
        }
        if (\array_key_exists('topic_search_url', $data)) {
            $object->setTopicSearchUrl($data['topic_search_url']);
            unset($data['topic_search_url']);
        }
        if (\array_key_exists('user_url', $data)) {
            $object->setUserUrl($data['user_url']);
            unset($data['user_url']);
        }
        if (\array_key_exists('user_organizations_url', $data)) {
            $object->setUserOrganizationsUrl($data['user_organizations_url']);
            unset($data['user_organizations_url']);
        }
        if (\array_key_exists('user_repositories_url', $data)) {
            $object->setUserRepositoriesUrl($data['user_repositories_url']);
            unset($data['user_repositories_url']);
        }
        if (\array_key_exists('user_search_url', $data)) {
            $object->setUserSearchUrl($data['user_search_url']);
            unset($data['user_search_url']);
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
        $data['current_user_url'] = $object->getCurrentUserUrl();
        $data['current_user_authorizations_html_url'] = $object->getCurrentUserAuthorizationsHtmlUrl();
        $data['authorizations_url'] = $object->getAuthorizationsUrl();
        $data['code_search_url'] = $object->getCodeSearchUrl();
        $data['commit_search_url'] = $object->getCommitSearchUrl();
        $data['emails_url'] = $object->getEmailsUrl();
        $data['emojis_url'] = $object->getEmojisUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['feeds_url'] = $object->getFeedsUrl();
        $data['followers_url'] = $object->getFollowersUrl();
        $data['following_url'] = $object->getFollowingUrl();
        $data['gists_url'] = $object->getGistsUrl();
        $data['hub_url'] = $object->getHubUrl();
        $data['issue_search_url'] = $object->getIssueSearchUrl();
        $data['issues_url'] = $object->getIssuesUrl();
        $data['keys_url'] = $object->getKeysUrl();
        $data['label_search_url'] = $object->getLabelSearchUrl();
        $data['notifications_url'] = $object->getNotificationsUrl();
        $data['organization_url'] = $object->getOrganizationUrl();
        $data['organization_repositories_url'] = $object->getOrganizationRepositoriesUrl();
        $data['organization_teams_url'] = $object->getOrganizationTeamsUrl();
        $data['public_gists_url'] = $object->getPublicGistsUrl();
        $data['rate_limit_url'] = $object->getRateLimitUrl();
        $data['repository_url'] = $object->getRepositoryUrl();
        $data['repository_search_url'] = $object->getRepositorySearchUrl();
        $data['current_user_repositories_url'] = $object->getCurrentUserRepositoriesUrl();
        $data['starred_url'] = $object->getStarredUrl();
        $data['starred_gists_url'] = $object->getStarredGistsUrl();
        if ($object->isInitialized('topicSearchUrl') && null !== $object->getTopicSearchUrl()) {
            $data['topic_search_url'] = $object->getTopicSearchUrl();
        }
        $data['user_url'] = $object->getUserUrl();
        $data['user_organizations_url'] = $object->getUserOrganizationsUrl();
        $data['user_repositories_url'] = $object->getUserRepositoriesUrl();
        $data['user_search_url'] = $object->getUserSearchUrl();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GetResponse200Constraint());
        }
        return $data;
    }
}