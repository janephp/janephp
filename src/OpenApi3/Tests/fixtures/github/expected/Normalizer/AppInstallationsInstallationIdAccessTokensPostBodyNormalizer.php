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
class AppInstallationsInstallationIdAccessTokensPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody();
        if (\array_key_exists('repositories', $data)) {
            $values = array();
            foreach ($data['repositories'] as $value) {
                $values[] = $value;
            }
            $object->setRepositories($values);
        }
        if (\array_key_exists('repository_ids', $data)) {
            $values_1 = array();
            foreach ($data['repository_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepositoryIds($values_1);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\AppInstallationsInstallationIdAccessTokensPostBodyPermissions', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRepositories()) {
            $values = array();
            foreach ($object->getRepositories() as $value) {
                $values[] = $value;
            }
            $data['repositories'] = $values;
        }
        if (null !== $object->getRepositoryIds()) {
            $values_1 = array();
            foreach ($object->getRepositoryIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['repository_ids'] = $values_1;
        }
        if (null !== $object->getPermissions()) {
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        }
        return $data;
    }
}