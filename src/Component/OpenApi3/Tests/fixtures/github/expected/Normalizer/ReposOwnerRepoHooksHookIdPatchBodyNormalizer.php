<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBody';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoHooksHookIdPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksHookIdPatchBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('config', $data)) {
            $object->setConfig($this->denormalizer->denormalize($data['config'], 'Github\\Model\\ReposOwnerRepoHooksHookIdPatchBodyConfig', 'json', $context));
            unset($data['config']);
        }
        if (\array_key_exists('events', $data)) {
            $values = array();
            foreach ($data['events'] as $value) {
                $values[] = $value;
            }
            $object->setEvents($values);
            unset($data['events']);
        }
        if (\array_key_exists('add_events', $data)) {
            $values_1 = array();
            foreach ($data['add_events'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAddEvents($values_1);
            unset($data['add_events']);
        }
        if (\array_key_exists('remove_events', $data)) {
            $values_2 = array();
            foreach ($data['remove_events'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRemoveEvents($values_2);
            unset($data['remove_events']);
        }
        if (\array_key_exists('active', $data)) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('config') && null !== $object->getConfig()) {
            $data['config'] = $object->getConfig() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getConfig(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('events') && null !== $object->getEvents()) {
            $values = array();
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
        }
        if ($object->isInitialized('addEvents') && null !== $object->getAddEvents()) {
            $values_1 = array();
            foreach ($object->getAddEvents() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['add_events'] = $values_1;
        }
        if ($object->isInitialized('removeEvents') && null !== $object->getRemoveEvents()) {
            $values_2 = array();
            foreach ($object->getRemoveEvents() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['remove_events'] = $values_2;
        }
        if ($object->isInitialized('active') && null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoHooksHookIdPatchBodyConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\ReposOwnerRepoHooksHookIdPatchBody' => false);
    }
}