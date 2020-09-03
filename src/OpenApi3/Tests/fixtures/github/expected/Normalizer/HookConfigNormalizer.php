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
class HookConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\HookConfig';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\HookConfig';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\HookConfig();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('room', $data)) {
            $object->setRoom($data['room']);
        }
        if (\array_key_exists('subdomain', $data)) {
            $object->setSubdomain($data['subdomain']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('insecure_ssl', $data)) {
            $object->setInsecureSsl($data['insecure_ssl']);
        }
        if (\array_key_exists('content_type', $data)) {
            $object->setContentType($data['content_type']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
        }
        if (\array_key_exists('secret', $data)) {
            $object->setSecret($data['secret']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if (null !== $object->getRoom()) {
            $data['room'] = $object->getRoom();
        }
        if (null !== $object->getSubdomain()) {
            $data['subdomain'] = $object->getSubdomain();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getInsecureSsl()) {
            $data['insecure_ssl'] = $object->getInsecureSsl();
        }
        if (null !== $object->getContentType()) {
            $data['content_type'] = $object->getContentType();
        }
        if (null !== $object->getDigest()) {
            $data['digest'] = $object->getDigest();
        }
        if (null !== $object->getSecret()) {
            $data['secret'] = $object->getSecret();
        }
        if (null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        return $data;
    }
}