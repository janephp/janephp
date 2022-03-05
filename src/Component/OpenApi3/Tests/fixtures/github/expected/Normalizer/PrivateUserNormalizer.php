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
class PrivateUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\PrivateUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PrivateUser';
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
        $object = new \Github\Model\PrivateUser();
        $validator = new \Github\Validator\PrivateUserValidator();
        $validator->validate($data);
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
        if (\array_key_exists('following_url', $data)) {
            $object->setFollowingUrl($data['following_url']);
        }
        if (\array_key_exists('gists_url', $data)) {
            $object->setGistsUrl($data['gists_url']);
        }
        if (\array_key_exists('starred_url', $data)) {
            $object->setStarredUrl($data['starred_url']);
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
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('site_admin', $data)) {
            $object->setSiteAdmin($data['site_admin']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('blog', $data) && $data['blog'] !== null) {
            $object->setBlog($data['blog']);
        }
        elseif (\array_key_exists('blog', $data) && $data['blog'] === null) {
            $object->setBlog(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('hireable', $data) && $data['hireable'] !== null) {
            $object->setHireable($data['hireable']);
        }
        elseif (\array_key_exists('hireable', $data) && $data['hireable'] === null) {
            $object->setHireable(null);
        }
        if (\array_key_exists('bio', $data) && $data['bio'] !== null) {
            $object->setBio($data['bio']);
        }
        elseif (\array_key_exists('bio', $data) && $data['bio'] === null) {
            $object->setBio(null);
        }
        if (\array_key_exists('twitter_username', $data) && $data['twitter_username'] !== null) {
            $object->setTwitterUsername($data['twitter_username']);
        }
        elseif (\array_key_exists('twitter_username', $data) && $data['twitter_username'] === null) {
            $object->setTwitterUsername(null);
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
        if (\array_key_exists('private_gists', $data)) {
            $object->setPrivateGists($data['private_gists']);
        }
        if (\array_key_exists('total_private_repos', $data)) {
            $object->setTotalPrivateRepos($data['total_private_repos']);
        }
        if (\array_key_exists('owned_private_repos', $data)) {
            $object->setOwnedPrivateRepos($data['owned_private_repos']);
        }
        if (\array_key_exists('disk_usage', $data)) {
            $object->setDiskUsage($data['disk_usage']);
        }
        if (\array_key_exists('collaborators', $data)) {
            $object->setCollaborators($data['collaborators']);
        }
        if (\array_key_exists('two_factor_authentication', $data)) {
            $object->setTwoFactorAuthentication($data['two_factor_authentication']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], 'Github\\Model\\PrivateUserPlan', 'json', $context));
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['suspended_at']));
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
        }
        if (\array_key_exists('business_plus', $data)) {
            $object->setBusinessPlus($data['business_plus']);
        }
        if (\array_key_exists('ldap_dn', $data)) {
            $object->setLdapDn($data['ldap_dn']);
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
        $data['following_url'] = $object->getFollowingUrl();
        $data['gists_url'] = $object->getGistsUrl();
        $data['starred_url'] = $object->getStarredUrl();
        $data['subscriptions_url'] = $object->getSubscriptionsUrl();
        $data['organizations_url'] = $object->getOrganizationsUrl();
        $data['repos_url'] = $object->getReposUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['received_events_url'] = $object->getReceivedEventsUrl();
        $data['type'] = $object->getType();
        $data['site_admin'] = $object->getSiteAdmin();
        $data['name'] = $object->getName();
        $data['company'] = $object->getCompany();
        $data['blog'] = $object->getBlog();
        $data['location'] = $object->getLocation();
        $data['email'] = $object->getEmail();
        $data['hireable'] = $object->getHireable();
        $data['bio'] = $object->getBio();
        if (null !== $object->getTwitterUsername()) {
            $data['twitter_username'] = $object->getTwitterUsername();
        }
        $data['public_repos'] = $object->getPublicRepos();
        $data['public_gists'] = $object->getPublicGists();
        $data['followers'] = $object->getFollowers();
        $data['following'] = $object->getFollowing();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['private_gists'] = $object->getPrivateGists();
        $data['total_private_repos'] = $object->getTotalPrivateRepos();
        $data['owned_private_repos'] = $object->getOwnedPrivateRepos();
        $data['disk_usage'] = $object->getDiskUsage();
        $data['collaborators'] = $object->getCollaborators();
        $data['two_factor_authentication'] = $object->getTwoFactorAuthentication();
        if (null !== $object->getPlan()) {
            $data['plan'] = $this->normalizer->normalize($object->getPlan(), 'json', $context);
        }
        if (null !== $object->getSuspendedAt()) {
            $data['suspended_at'] = $object->getSuspendedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getBusinessPlus()) {
            $data['business_plus'] = $object->getBusinessPlus();
        }
        if (null !== $object->getLdapDn()) {
            $data['ldap_dn'] = $object->getLdapDn();
        }
        $validator = new \Github\Validator\PrivateUserValidator();
        $validator->validate($data);
        return $data;
    }
}