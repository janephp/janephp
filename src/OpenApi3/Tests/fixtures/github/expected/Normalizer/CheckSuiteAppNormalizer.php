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
class CheckSuiteAppNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CheckSuiteApp';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CheckSuiteApp';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CheckSuiteApp();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\IntegrationOwner', 'json', $context));
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('external_url', $data)) {
            $object->setExternalUrl($data['external_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\IntegrationPermissions', 'json', $context));
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (\array_key_exists('installations_count', $data)) {
            $object->setInstallationsCount($data['installations_count']);
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
        }
        if (\array_key_exists('client_secret', $data)) {
            $object->setClientSecret($data['client_secret']);
        }
        if (\array_key_exists('webhook_secret', $data)) {
            $object->setWebhookSecret($data['webhook_secret']);
        }
        if (\array_key_exists('pem', $data)) {
            $object->setPem($data['pem']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getSlug()) {
            $data['slug'] = $object->getSlug();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getExternalUrl()) {
            $data['external_url'] = $object->getExternalUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getPermissions()) {
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        }
        if (null !== $object->getEvents()) {
            $values = array();
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
        }
        if (null !== $object->getInstallationsCount()) {
            $data['installations_count'] = $object->getInstallationsCount();
        }
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getClientSecret()) {
            $data['client_secret'] = $object->getClientSecret();
        }
        if (null !== $object->getWebhookSecret()) {
            $data['webhook_secret'] = $object->getWebhookSecret();
        }
        if (null !== $object->getPem()) {
            $data['pem'] = $object->getPem();
        }
        return $data;
    }
}