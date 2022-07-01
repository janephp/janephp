<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\UserSearchResultItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserSearchResultItem';
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
        $object = new \Github\Model\UserSearchResultItem();
        $validator = new \Github\Validator\UserSearchResultItemValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
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
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        if (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] !== null) {
            $object->setGravatarId($data['gravatar_id']);
        }
        elseif (\array_key_exists('gravatar_id', $data) && $data['gravatar_id'] === null) {
            $object->setGravatarId(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('followers_url', $data)) {
            $object->setFollowersUrl($data['followers_url']);
        }
        if (\array_key_exists('subscriptions_url', $data)) {
            $object->setSubscriptionsUrl($data['subscriptions_url']);
        }
        if (\array_key_exists('organizations_url', $data)) {
            $object->setOrganizationsUrl($data['organizations_url']);
        }
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('following_url', $data)) {
            $object->setFollowingUrl($data['following_url']);
        }
        if (\array_key_exists('gists_url', $data)) {
            $object->setGistsUrl($data['gists_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
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
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('bio', $data) && $data['bio'] !== null) {
            $object->setBio($data['bio']);
        }
        elseif (\array_key_exists('bio', $data) && $data['bio'] === null) {
            $object->setBio(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('site_admin', $data)) {
            $object->setSiteAdmin($data['site_admin']);
        }
        if (\array_key_exists('hireable', $data) && $data['hireable'] !== null) {
            $object->setHireable($data['hireable']);
        }
        elseif (\array_key_exists('hireable', $data) && $data['hireable'] === null) {
            $object->setHireable(null);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values = array();
            foreach ($data['text_matches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
            }
            $object->setTextMatches($values);
        }
        if (\array_key_exists('blog', $data) && $data['blog'] !== null) {
            $object->setBlog($data['blog']);
        }
        elseif (\array_key_exists('blog', $data) && $data['blog'] === null) {
            $object->setBlog(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['suspended_at']));
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
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
        $data['avatar_url'] = $object->getAvatarUrl();
        $data['gravatar_id'] = $object->getGravatarId();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['followers_url'] = $object->getFollowersUrl();
        $data['subscriptions_url'] = $object->getSubscriptionsUrl();
        $data['organizations_url'] = $object->getOrganizationsUrl();
        $data['repos_url'] = $object->getReposUrl();
        $data['received_events_url'] = $object->getReceivedEventsUrl();
        $data['type'] = $object->getType();
        $data['score'] = $object->getScore();
        $data['following_url'] = $object->getFollowingUrl();
        $data['gists_url'] = $object->getGistsUrl();
        $data['starred_url'] = $object->getStarredUrl();
        $data['events_url'] = $object->getEventsUrl();
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
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getBio()) {
            $data['bio'] = $object->getBio();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        $data['site_admin'] = $object->getSiteAdmin();
        if (null !== $object->getHireable()) {
            $data['hireable'] = $object->getHireable();
        }
        if (null !== $object->getTextMatches()) {
            $values = array();
            foreach ($object->getTextMatches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['text_matches'] = $values;
        }
        if (null !== $object->getBlog()) {
            $data['blog'] = $object->getBlog();
        }
        if (null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if (null !== $object->getSuspendedAt()) {
            $data['suspended_at'] = $object->getSuspendedAt()->format('Y-m-d\\TH:i:sP');
        }
        $validator = new \Github\Validator\UserSearchResultItemValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}