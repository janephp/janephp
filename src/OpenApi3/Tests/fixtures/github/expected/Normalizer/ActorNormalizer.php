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
class ActorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Actor';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Actor';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Actor();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
        }
        if (\array_key_exists('display_login', $data)) {
            $object->setDisplayLogin($data['display_login']);
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
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLogin()) {
            $data['login'] = $object->getLogin();
        }
        if (null !== $object->getDisplayLogin()) {
            $data['display_login'] = $object->getDisplayLogin();
        }
        if (null !== $object->getGravatarId()) {
            $data['gravatar_id'] = $object->getGravatarId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        return $data;
    }
}