<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\TeamFull';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\TeamFull';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\TeamFull();
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('privacy', $data)) {
            $object->setPrivacy($data['privacy']);
        }
        if (\array_key_exists('permission', $data)) {
            $object->setPermission($data['permission']);
        }
        if (\array_key_exists('members_url', $data)) {
            $object->setMembersUrl($data['members_url']);
        }
        if (\array_key_exists('repositories_url', $data)) {
            $object->setRepositoriesUrl($data['repositories_url']);
        }
        if (\array_key_exists('parent', $data) && $data['parent'] !== null) {
            $object->setParent($this->denormalizer->denormalize($data['parent'], 'Github\\Model\\TeamFullParent', 'json', $context));
        }
        elseif (\array_key_exists('parent', $data) && $data['parent'] === null) {
            $object->setParent(null);
        }
        if (\array_key_exists('members_count', $data)) {
            $object->setMembersCount($data['members_count']);
        }
        if (\array_key_exists('repos_count', $data)) {
            $object->setReposCount($data['repos_count']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('organization', $data)) {
            $object->setOrganization($this->denormalizer->denormalize($data['organization'], 'Github\\Model\\Organization', 'json', $context));
        }
        if (\array_key_exists('ldap_dn', $data)) {
            $object->setLdapDn($data['ldap_dn']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getSlug()) {
            $data['slug'] = $object->getSlug();
        }
        $data['description'] = $object->getDescription();
        if (null !== $object->getPrivacy()) {
            $data['privacy'] = $object->getPrivacy();
        }
        if (null !== $object->getPermission()) {
            $data['permission'] = $object->getPermission();
        }
        if (null !== $object->getMembersUrl()) {
            $data['members_url'] = $object->getMembersUrl();
        }
        if (null !== $object->getRepositoriesUrl()) {
            $data['repositories_url'] = $object->getRepositoriesUrl();
        }
        if (null !== $object->getParent()) {
            $data['parent'] = $this->normalizer->normalize($object->getParent(), 'json', $context);
        }
        if (null !== $object->getMembersCount()) {
            $data['members_count'] = $object->getMembersCount();
        }
        if (null !== $object->getReposCount()) {
            $data['repos_count'] = $object->getReposCount();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $this->normalizer->normalize($object->getOrganization(), 'json', $context);
        }
        if (null !== $object->getLdapDn()) {
            $data['ldap_dn'] = $object->getLdapDn();
        }
        return $data;
    }
}