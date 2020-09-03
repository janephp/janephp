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
class MigrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Migration';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Migration';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Migration();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\MigrationOwner', 'json', $context));
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('guid', $data)) {
            $object->setGuid($data['guid']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('lock_repositories', $data)) {
            $object->setLockRepositories($data['lock_repositories']);
        }
        if (\array_key_exists('exclude_attachments', $data)) {
            $object->setExcludeAttachments($data['exclude_attachments']);
        }
        if (\array_key_exists('repositories', $data)) {
            $values = array();
            foreach ($data['repositories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Repository', 'json', $context);
            }
            $object->setRepositories($values);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('archive_url', $data)) {
            $object->setArchiveUrl($data['archive_url']);
        }
        if (\array_key_exists('exclude', $data)) {
            $values_1 = array();
            foreach ($data['exclude'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExclude($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getGuid()) {
            $data['guid'] = $object->getGuid();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getLockRepositories()) {
            $data['lock_repositories'] = $object->getLockRepositories();
        }
        if (null !== $object->getExcludeAttachments()) {
            $data['exclude_attachments'] = $object->getExcludeAttachments();
        }
        if (null !== $object->getRepositories()) {
            $values = array();
            foreach ($object->getRepositories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['repositories'] = $values;
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getArchiveUrl()) {
            $data['archive_url'] = $object->getArchiveUrl();
        }
        if (null !== $object->getExclude()) {
            $values_1 = array();
            foreach ($object->getExclude() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['exclude'] = $values_1;
        }
        return $data;
    }
}