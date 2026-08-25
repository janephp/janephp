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
class GetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\GetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\GetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\GetResponse200();
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
            $this->validate($data, new \Github\Validator\GetResponse200Constraint());
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['current_user_url'] = $data->getCurrentUserUrl();
        $dataArray['current_user_authorizations_html_url'] = $data->getCurrentUserAuthorizationsHtmlUrl();
        $dataArray['authorizations_url'] = $data->getAuthorizationsUrl();
        $dataArray['code_search_url'] = $data->getCodeSearchUrl();
        $dataArray['commit_search_url'] = $data->getCommitSearchUrl();
        $dataArray['emails_url'] = $data->getEmailsUrl();
        $dataArray['emojis_url'] = $data->getEmojisUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['feeds_url'] = $data->getFeedsUrl();
        $dataArray['followers_url'] = $data->getFollowersUrl();
        $dataArray['following_url'] = $data->getFollowingUrl();
        $dataArray['gists_url'] = $data->getGistsUrl();
        $dataArray['hub_url'] = $data->getHubUrl();
        $dataArray['issue_search_url'] = $data->getIssueSearchUrl();
        $dataArray['issues_url'] = $data->getIssuesUrl();
        $dataArray['keys_url'] = $data->getKeysUrl();
        $dataArray['label_search_url'] = $data->getLabelSearchUrl();
        $dataArray['notifications_url'] = $data->getNotificationsUrl();
        $dataArray['organization_url'] = $data->getOrganizationUrl();
        $dataArray['organization_repositories_url'] = $data->getOrganizationRepositoriesUrl();
        $dataArray['organization_teams_url'] = $data->getOrganizationTeamsUrl();
        $dataArray['public_gists_url'] = $data->getPublicGistsUrl();
        $dataArray['rate_limit_url'] = $data->getRateLimitUrl();
        $dataArray['repository_url'] = $data->getRepositoryUrl();
        $dataArray['repository_search_url'] = $data->getRepositorySearchUrl();
        $dataArray['current_user_repositories_url'] = $data->getCurrentUserRepositoriesUrl();
        $dataArray['starred_url'] = $data->getStarredUrl();
        $dataArray['starred_gists_url'] = $data->getStarredGistsUrl();
        if ($data->isInitialized('topicSearchUrl') && null !== $data->getTopicSearchUrl()) {
            $dataArray['topic_search_url'] = $data->getTopicSearchUrl();
        }
        $dataArray['user_url'] = $data->getUserUrl();
        $dataArray['user_organizations_url'] = $data->getUserOrganizationsUrl();
        $dataArray['user_repositories_url'] = $data->getUserRepositoriesUrl();
        $dataArray['user_search_url'] = $data->getUserSearchUrl();
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\GetResponse200Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\GetResponse200::class => false];
    }
}