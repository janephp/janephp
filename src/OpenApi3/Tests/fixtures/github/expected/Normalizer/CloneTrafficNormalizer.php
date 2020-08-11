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
class CloneTrafficNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CloneTraffic';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CloneTraffic';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CloneTraffic();
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        if (\array_key_exists('uniques', $data)) {
            $object->setUniques($data['uniques']);
        }
        if (\array_key_exists('clones', $data)) {
            $values = array();
            foreach ($data['clones'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Traffic', 'json', $context);
            }
            $object->setClones($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getUniques()) {
            $data['uniques'] = $object->getUniques();
        }
        if (null !== $object->getClones()) {
            $values = array();
            foreach ($object->getClones() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['clones'] = $values;
        }
        return $data;
    }
}