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
class UserMigrationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\UserMigrationsPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\UserMigrationsPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\UserMigrationsPostBody();
        if (\array_key_exists('lock_repositories', $data)) {
            $object->setLockRepositories($data['lock_repositories']);
        }
        if (\array_key_exists('exclude_attachments', $data)) {
            $object->setExcludeAttachments($data['exclude_attachments']);
        }
        if (\array_key_exists('exclude', $data)) {
            $values = array();
            foreach ($data['exclude'] as $value) {
                $values[] = $value;
            }
            $object->setExclude($values);
        }
        if (\array_key_exists('repositories', $data)) {
            $values_1 = array();
            foreach ($data['repositories'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepositories($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLockRepositories()) {
            $data['lock_repositories'] = $object->getLockRepositories();
        }
        if (null !== $object->getExcludeAttachments()) {
            $data['exclude_attachments'] = $object->getExcludeAttachments();
        }
        if (null !== $object->getExclude()) {
            $values = array();
            foreach ($object->getExclude() as $value) {
                $values[] = $value;
            }
            $data['exclude'] = $values;
        }
        if (null !== $object->getRepositories()) {
            $values_1 = array();
            foreach ($object->getRepositories() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repositories'] = $values_1;
        }
        return $data;
    }
}