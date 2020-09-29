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
class TrafficNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Traffic';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Traffic';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Traffic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
        }
        if (\array_key_exists('uniques', $data)) {
            $object->setUniques($data['uniques']);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        $data['uniques'] = $object->getUniques();
        $data['count'] = $object->getCount();
        return $data;
    }
}