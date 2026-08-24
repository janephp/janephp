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
class PrivateUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\PrivateUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\PrivateUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\PrivateUser();
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
        if (\array_key_exists('two_factor_authentication', $data) && \is_int($data['two_factor_authentication'])) {
            $data['two_factor_authentication'] = (bool) $data['two_factor_authentication'];
        }
        if (\array_key_exists('business_plus', $data) && \is_int($data['business_plus'])) {
            $data['business_plus'] = (bool) $data['business_plus'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PrivateUserConstraint());
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
        if (\array_key_exists('repos_url', $data)) {
            $object->setReposUrl($data['repos_url']);
            unset($data['repos_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('received_events_url', $data)) {
            $object->setReceivedEventsUrl($data['received_events_url']);
            unset($data['received_events_url']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('site_admin', $data)) {
            $object->setSiteAdmin($data['site_admin']);
            unset($data['site_admin']);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('company', $data) && $data['company'] !== null) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        elseif (\array_key_exists('company', $data) && $data['company'] === null) {
            $object->setCompany(null);
        }
        if (\array_key_exists('blog', $data) && $data['blog'] !== null) {
            $object->setBlog($data['blog']);
            unset($data['blog']);
        }
        elseif (\array_key_exists('blog', $data) && $data['blog'] === null) {
            $object->setBlog(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('hireable', $data) && $data['hireable'] !== null) {
            $object->setHireable($data['hireable']);
            unset($data['hireable']);
        }
        elseif (\array_key_exists('hireable', $data) && $data['hireable'] === null) {
            $object->setHireable(null);
        }
        if (\array_key_exists('bio', $data) && $data['bio'] !== null) {
            $object->setBio($data['bio']);
            unset($data['bio']);
        }
        elseif (\array_key_exists('bio', $data) && $data['bio'] === null) {
            $object->setBio(null);
        }
        if (\array_key_exists('twitter_username', $data) && $data['twitter_username'] !== null) {
            $object->setTwitterUsername($data['twitter_username']);
            unset($data['twitter_username']);
        }
        elseif (\array_key_exists('twitter_username', $data) && $data['twitter_username'] === null) {
            $object->setTwitterUsername(null);
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('private_gists', $data)) {
            $object->setPrivateGists($data['private_gists']);
            unset($data['private_gists']);
        }
        if (\array_key_exists('total_private_repos', $data)) {
            $object->setTotalPrivateRepos($data['total_private_repos']);
            unset($data['total_private_repos']);
        }
        if (\array_key_exists('owned_private_repos', $data)) {
            $object->setOwnedPrivateRepos($data['owned_private_repos']);
            unset($data['owned_private_repos']);
        }
        if (\array_key_exists('disk_usage', $data)) {
            $object->setDiskUsage($data['disk_usage']);
            unset($data['disk_usage']);
        }
        if (\array_key_exists('collaborators', $data)) {
            $object->setCollaborators($data['collaborators']);
            unset($data['collaborators']);
        }
        if (\array_key_exists('two_factor_authentication', $data)) {
            $object->setTwoFactorAuthentication($data['two_factor_authentication']);
            unset($data['two_factor_authentication']);
        }
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], \Github\Model\PrivateUserPlan::class, 'json', $context));
            unset($data['plan']);
        }
        if (\array_key_exists('suspended_at', $data) && $data['suspended_at'] !== null) {
            $object->setSuspendedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['suspended_at']));
            unset($data['suspended_at']);
        }
        elseif (\array_key_exists('suspended_at', $data) && $data['suspended_at'] === null) {
            $object->setSuspendedAt(null);
        }
        if (\array_key_exists('business_plus', $data)) {
            $object->setBusinessPlus($data['business_plus']);
            unset($data['business_plus']);
        }
        if (\array_key_exists('ldap_dn', $data)) {
            $object->setLdapDn($data['ldap_dn']);
            unset($data['ldap_dn']);
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
        $dataArray['login'] = $data->getLogin();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['avatar_url'] = $data->getAvatarUrl();
        $dataArray['gravatar_id'] = $data->getGravatarId();
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['followers_url'] = $data->getFollowersUrl();
        $dataArray['following_url'] = $data->getFollowingUrl();
        $dataArray['gists_url'] = $data->getGistsUrl();
        $dataArray['starred_url'] = $data->getStarredUrl();
        $dataArray['subscriptions_url'] = $data->getSubscriptionsUrl();
        $dataArray['organizations_url'] = $data->getOrganizationsUrl();
        $dataArray['repos_url'] = $data->getReposUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['received_events_url'] = $data->getReceivedEventsUrl();
        $dataArray['type'] = $data->getType();
        $dataArray['site_admin'] = $data->getSiteAdmin();
        $dataArray['name'] = $data->getName();
        $dataArray['company'] = $data->getCompany();
        $dataArray['blog'] = $data->getBlog();
        $dataArray['location'] = $data->getLocation();
        $dataArray['email'] = $data->getEmail();
        $dataArray['hireable'] = $data->getHireable();
        $dataArray['bio'] = $data->getBio();
        if ($data->isInitialized('twitterUsername') && null !== $data->getTwitterUsername()) {
            $dataArray['twitter_username'] = $data->getTwitterUsername();
        }
        $dataArray['public_repos'] = $data->getPublicRepos();
        $dataArray['public_gists'] = $data->getPublicGists();
        $dataArray['followers'] = $data->getFollowers();
        $dataArray['following'] = $data->getFollowing();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['private_gists'] = $data->getPrivateGists();
        $dataArray['total_private_repos'] = $data->getTotalPrivateRepos();
        $dataArray['owned_private_repos'] = $data->getOwnedPrivateRepos();
        $dataArray['disk_usage'] = $data->getDiskUsage();
        $dataArray['collaborators'] = $data->getCollaborators();
        $dataArray['two_factor_authentication'] = $data->getTwoFactorAuthentication();
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $data->getPlan() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPlan(), 'json', $context));
        }
        if ($data->isInitialized('suspendedAt') && null !== $data->getSuspendedAt()) {
            $dataArray['suspended_at'] = $data->getSuspendedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('businessPlus') && null !== $data->getBusinessPlus()) {
            $dataArray['business_plus'] = $data->getBusinessPlus();
        }
        if ($data->isInitialized('ldapDn') && null !== $data->getLdapDn()) {
            $dataArray['ldap_dn'] = $data->getLdapDn();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\PrivateUserConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\PrivateUser::class => false];
    }
}