<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class EventPayloadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\EventPayload';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\EventPayload';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\EventPayload();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('action', $data)) {
            $object->setAction($data['action']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\IssueSimple', 'json', $context));
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($this->denormalizer->denormalize($data['comment'], 'Github\\Model\\IssueComment', 'json', $context));
        }
        if (\array_key_exists('pages', $data)) {
            $values = array();
            foreach ($data['pages'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\EventPayloadPagesItem', 'json', $context);
            }
            $object->setPages($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAction()) {
            $data['action'] = $object->getAction();
        }
        if (null !== $object->getIssue()) {
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $this->normalizer->normalize($object->getComment(), 'json', $context);
        }
        if (null !== $object->getPages()) {
            $values = array();
            foreach ($object->getPages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pages'] = $values;
        }
        return $data;
    }
}