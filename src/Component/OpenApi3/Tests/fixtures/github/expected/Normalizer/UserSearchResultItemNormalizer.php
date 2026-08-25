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
class UserSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\UserSearchResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\UserSearchResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\UserSearchResultItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('site_admin', $data) && \is_int($data['site_admin'])) {
            $data['site_admin'] = (bool) $data['site_admin'];
        }
        if (\array_key_exists('hireable', $data) && \is_int($data['hireable'])) {
            $data['hireable'] = (bool) $data['hireable'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\UserSearchResultItemConstraint());
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
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
            unset($data['avatar_url']);
        }
        if (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] !== null) {
            $object->setGravatarId($data['gravatar_id']);
            unset($data['gravatar_id']);
        }
        elseif (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] === null) {
            $object->setGravatarId(null);
            unset($data['gravatar_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('followers_url', $data)) {
            $object->setFollowersUrl($data['followers_url']);
            unset($data['followers_url']);
        }
        if (\array_key_exists('subscriptions_url', $data)) {
            $object->setSubscriptionsUrl($data['subscriptions_url']);
            unset($data['subscriptions_url']);
        }
        if (\array_key_exists('organizations_url', $data)) {
            $object->setOrganizationsUrl($data['organizations_url']);
            unset($data['organizations_url']);
        }
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
            unset($data['repos_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
            unset($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
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
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
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
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
            unset($data['name']);
        }
        if (\array_key_exists('bio', $data) && $data['bio'] !== null) {
            $object->setBio($data['bio']);
            unset($data['bio']);
        }
        elseif (\array_key_exists('bio', $data) && $data['bio'] === null) {
            $object->setBio(null);
            unset($data['bio']);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
            unset($data['email']);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
            unset($data['location']);
        }
        if (\array_key_exists('site_admin', $data)) {
            $object->setSiteAdmin($data['site_admin']);
            unset($data['site_admin']);
        }
        if (\array_key_exists('hireable', $data) && $data['hireable'] !== null) {
            $object->setHireable($data['hireable']);
            unset($data['hireable']);
        }
        elseif (\array_key_exists('hireable', $data) && $data['hireable'] === null) {
            $object->setHireable(null);
            unset($data['hireable']);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values = [];
            foreach ($data['text_matches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\SearchResultTextMatchesItem::class, 'json', $context);
            }
            $object->setTextMatches($values);
            unset($data['text_matches']);
        }
        if (\array_key_exists('blog', $data) && $data['blog'] !== null) {
            $object->setBlog($data['blog']);
            unset($data['blog']);
        }
        elseif (\array_key_exists('blog', $data) && $data['blog'] === null) {
            $object->setBlog(null);
            unset($data['blog']);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
            unset($data['company']);
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['suspended_at']);
            if (false === $date_2) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['suspended_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setSuspendedAt($date_2);
            unset($data['suspended_at']);
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
            unset($data['suspended_at']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $dataArray['avatar_url'] = $data->getAvatarUrl();
        $dataArray['gravatar_id'] = $data->getGravatarId();
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['followers_url'] = $data->getFollowersUrl();
        $dataArray['subscriptions_url'] = $data->getSubscriptionsUrl();
        $dataArray['organizations_url'] = $data->getOrganizationsUrl();
        $dataArray['repos_url'] = $data->getReposUrl();
        $dataArray['received_events_url'] = $data->getReceivedEventsUrl();
        $dataArray['type'] = $data->getType();
        $dataArray['score'] = $data->getScore();
        $dataArray['following_url'] = $data->getFollowingUrl();
        $dataArray['gists_url'] = $data->getGistsUrl();
        $dataArray['starred_url'] = $data->getStarredUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        if ($data->isInitialized('publicRepos') && null !== $data->getPublicRepos()) {
            $dataArray['public_repos'] = $data->getPublicRepos();
        }
        if ($data->isInitialized('publicGists') && null !== $data->getPublicGists()) {
            $dataArray['public_gists'] = $data->getPublicGists();
        }
        if ($data->isInitialized('followers') && null !== $data->getFollowers()) {
            $dataArray['followers'] = $data->getFollowers();
        }
        if ($data->isInitialized('following') && null !== $data->getFollowing()) {
            $dataArray['following'] = $data->getFollowing();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('bio') && null !== $data->getBio()) {
            $dataArray['bio'] = $data->getBio();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        $dataArray['site_admin'] = $data->getSiteAdmin();
        if ($data->isInitialized('hireable') && null !== $data->getHireable()) {
            $dataArray['hireable'] = $data->getHireable();
        }
        if ($data->isInitialized('textMatches') && null !== $data->getTextMatches()) {
            $values = [];
            foreach ($data->getTextMatches() as $value) {
                $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['text_matches'] = $values;
        }
        if ($data->isInitialized('blog') && null !== $data->getBlog()) {
            $dataArray['blog'] = $data->getBlog();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('suspendedAt') && null !== $data->getSuspendedAt()) {
            $dataArray['suspended_at'] = $data->getSuspendedAt()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\UserSearchResultItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\UserSearchResultItem::class => false];
    }
}