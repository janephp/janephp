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
class ThreadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Thread';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Thread';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Thread();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
        }
        if (\array_key_exists('subject', $data)) {
            $object->setSubject($this->denormalizer->denormalize($data['subject'], 'Github\\Model\\ThreadSubject', 'json', $context));
        }
        if (\array_key_exists('reason', $data)) {
            $object->setReason($data['reason']);
        }
        if (\array_key_exists('unread', $data)) {
            $object->setUnread($data['unread']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
        }
        if (\array_key_exists('last_read_at', $data) && $data['last_read_at'] !== null) {
            $object->setLastReadAt($data['last_read_at']);
        }
        elseif (\array_key_exists('last_read_at', $data) && $data['last_read_at'] === null) {
            $object->setLastReadAt(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('subscription_url', $data)) {
            $object->setSubscriptionUrl($data['subscription_url']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getRepository()) {
            $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
        }
        if (null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if (null !== $object->getUnread()) {
            $data['unread'] = $object->getUnread();
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if (null !== $object->getLastReadAt()) {
            $data['last_read_at'] = $object->getLastReadAt();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getSubscriptionUrl()) {
            $data['subscription_url'] = $object->getSubscriptionUrl();
        }
        return $data;
    }
}