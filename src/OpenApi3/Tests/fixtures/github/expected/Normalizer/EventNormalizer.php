<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Event';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Event';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Event();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('actor', $data)) {
            $object->setActor($this->denormalizer->denormalize($data['actor'], 'Github\\Model\\Actor', 'json', $context));
        }
        if (\array_key_exists('repo', $data)) {
            $object->setRepo($this->denormalizer->denormalize($data['repo'], 'Github\\Model\\EventRepo', 'json', $context));
        }
        if (\array_key_exists('org', $data)) {
            $object->setOrg($this->denormalizer->denormalize($data['org'], 'Github\\Model\\Actor', 'json', $context));
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($this->denormalizer->denormalize($data['payload'], 'Github\\Model\\EventPayload', 'json', $context));
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['type'] = $object->getType();
        $data['actor'] = $this->normalizer->normalize($object->getActor(), 'json', $context);
        $data['repo'] = $this->normalizer->normalize($object->getRepo(), 'json', $context);
        if (null !== $object->getOrg()) {
            $data['org'] = $this->normalizer->normalize($object->getOrg(), 'json', $context);
        }
        $data['payload'] = $this->normalizer->normalize($object->getPayload(), 'json', $context);
        $data['public'] = $object->getPublic();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        return $data;
    }
}