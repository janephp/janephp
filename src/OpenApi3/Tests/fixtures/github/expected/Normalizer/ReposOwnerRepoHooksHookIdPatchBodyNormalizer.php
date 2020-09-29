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
class ReposOwnerRepoHooksHookIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoHooksHookIdPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBodyConfig', 'json', $context));
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
        }
        if (\array_key_exists('add_events', $data)) {
            $values_1 = array();
            foreach ($data['add_events'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAddEvents($values_1);
        }
        if (\array_key_exists('remove_events', $data)) {
            $values_2 = array();
            foreach ($data['remove_events'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRemoveEvents($values_2);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConfig()) {
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
        }
        if (null !== $object->getEvents()) {
            $values = array();
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
        }
        if (null !== $object->getAddEvents()) {
            $values_1 = array();
            foreach ($object->getAddEvents() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['add_events'] = $values_1;
        }
        if (null !== $object->getRemoveEvents()) {
            $values_2 = array();
            foreach ($object->getRemoveEvents() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['remove_events'] = $values_2;
        }
        if (null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        return $data;
    }
}