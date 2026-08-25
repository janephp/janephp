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
class TeamFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\TeamFull::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\TeamFull::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\TeamFull();
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
            $this->validate($data, new \Github\Validator\TeamFullConstraint());
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
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
            unset($data['privacy']);
        }
        if (\array_key_exists('permission', $data)) {
            $object->setPermission($data['permission']);
            unset($data['permission']);
        }
        if (\array_key_exists('members_url', $data)) {
            $object->setMembersUrl($data['members_url']);
            unset($data['members_url']);
        }
        if (\array_key_exists('repositories_url', $data)) {
            $object->setRepositoriesUrl($data['repositories_url']);
            unset($data['repositories_url']);
        }
        if (\array_key_exists('parent', $data) && $data['parent'] !== null) {
            $object->setParent($this->denormalizer->denormalize($data['parent'], \Github\Model\TeamFullParent::class, 'json', $context));
            unset($data['parent']);
        }
        elseif (\array_key_exists('parent', $data) && $data['parent'] === null) {
            $object->setParent(null);
            unset($data['parent']);
        }
        if (\array_key_exists('members_count', $data)) {
            $object->setMembersCount($data['members_count']);
            unset($data['members_count']);
        }
        if (\array_key_exists('repos_count', $data)) {
            $object->setReposCount($data['repos_count']);
            unset($data['repos_count']);
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
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], \Github\Model\Organization::class, 'json', $context));
            unset($data['organization']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['name'] = $data->getName();
        $dataArray['slug'] = $data->getSlug();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('privacy') && null !== $data->getPrivacy()) {
            $dataArray['privacy'] = $data->getPrivacy();
        }
        $dataArray['permission'] = $data->getPermission();
        $dataArray['members_url'] = $data->getMembersUrl();
        $dataArray['repositories_url'] = $data->getRepositoriesUrl();
        if ($data->isInitialized('parent') && null !== $data->getParent()) {
            $dataArray['parent'] = $data->getParent() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getParent(), 'json', $context));
        }
        $dataArray['members_count'] = $data->getMembersCount();
        $dataArray['repos_count'] = $data->getReposCount();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['organization'] = $data->getOrganization() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOrganization(), 'json', $context));
        if ($data->isInitialized('ldapDn') && null !== $data->getLdapDn()) {
            $dataArray['ldap_dn'] = $data->getLdapDn();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\TeamFullConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\TeamFull::class => false];
    }
}