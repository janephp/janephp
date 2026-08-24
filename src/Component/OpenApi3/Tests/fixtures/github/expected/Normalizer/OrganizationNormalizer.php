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
class OrganizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Organization::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Organization::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\Organization();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_organization_projects', $data) && \is_int($data['has_organization_projects'])) {
            $data['has_organization_projects'] = (bool) $data['has_organization_projects'];
        }
        if (\array_key_exists('has_repository_projects', $data) && \is_int($data['has_repository_projects'])) {
            $data['has_repository_projects'] = (bool) $data['has_repository_projects'];
        }
        if (\array_key_exists('is_verified', $data) && \is_int($data['is_verified'])) {
            $data['is_verified'] = (bool) $data['is_verified'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrganizationConstraint());
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
            unset($data['login']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
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
            unset($data['description']);
        }
        if (\array_key_exists('blog', $data)) {
            $object->setBlog($data['blog']);
            unset($data['blog']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('has_organization_projects', $data)) {
            $object->setHasOrganizationProjects($data['has_organization_projects']);
            unset($data['has_organization_projects']);
        }
        if (\array_key_exists('has_repository_projects', $data)) {
            $object->setHasRepositoryProjects($data['has_repository_projects']);
            unset($data['has_repository_projects']);
        }
        if (\array_key_exists('is_verified', $data)) {
            $object->setIsVerified($data['is_verified']);
            unset($data['is_verified']);
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
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
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
        if (\array_key_exists('plan', $data)) {
            $object->setPlan($this->denormalizer->denormalize($data['plan'], \Github\Model\OrganizationPlan::class, 'json', $context));
            unset($data['plan']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['repos_url'] = $data->getReposUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['hooks_url'] = $data->getHooksUrl();
        $dataArray['issues_url'] = $data->getIssuesUrl();
        $dataArray['members_url'] = $data->getMembersUrl();
        $dataArray['public_members_url'] = $data->getPublicMembersUrl();
        $dataArray['avatar_url'] = $data->getAvatarUrl();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('blog') && null !== $data->getBlog()) {
            $dataArray['blog'] = $data->getBlog();
        }
        $dataArray['html_url'] = $data->getHtmlUrl();
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        $dataArray['has_organization_projects'] = $data->getHasOrganizationProjects();
        $dataArray['has_repository_projects'] = $data->getHasRepositoryProjects();
        if ($data->isInitialized('isVerified') && null !== $data->getIsVerified()) {
            $dataArray['is_verified'] = $data->getIsVerified();
        }
        $dataArray['public_repos'] = $data->getPublicRepos();
        $dataArray['public_gists'] = $data->getPublicGists();
        $dataArray['followers'] = $data->getFollowers();
        $dataArray['following'] = $data->getFollowing();
        $dataArray['type'] = $data->getType();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('plan') && null !== $data->getPlan()) {
            $dataArray['plan'] = $data->getPlan() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPlan(), 'json', $context));
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrganizationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Organization::class => false];
    }
}