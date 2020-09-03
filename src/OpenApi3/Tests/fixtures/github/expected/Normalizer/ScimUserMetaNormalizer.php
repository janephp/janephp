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
class ScimUserMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ScimUserMeta';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ScimUserMeta';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ScimUserMeta();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('resourceType', $data)) {
            $object->setResourceType($data['resourceType']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created']));
        }
        if (\array_key_exists('lastModified', $data)) {
            $object->setLastModified(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastModified']));
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getResourceType()) {
            $data['resourceType'] = $object->getResourceType();
        }
        if (null !== $object->getCreated()) {
            $data['created'] = $object->getCreated()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastModified()) {
            $data['lastModified'] = $object->getLastModified()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        return $data;
    }
}