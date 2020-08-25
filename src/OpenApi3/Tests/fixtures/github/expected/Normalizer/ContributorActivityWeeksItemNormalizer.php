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
class ContributorActivityWeeksItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ContributorActivityWeeksItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ContributorActivityWeeksItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ContributorActivityWeeksItem();
        if (\array_key_exists('w', $data)) {
            $object->setW($data['w']);
        }
        if (\array_key_exists('a', $data)) {
            $object->setA($data['a']);
        }
        if (\array_key_exists('d', $data)) {
            $object->setD($data['d']);
        }
        if (\array_key_exists('c', $data)) {
            $object->setC($data['c']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getW()) {
            $data['w'] = $object->getW();
        }
        if (null !== $object->getA()) {
            $data['a'] = $object->getA();
        }
        if (null !== $object->getD()) {
            $data['d'] = $object->getD();
        }
        if (null !== $object->getC()) {
            $data['c'] = $object->getC();
        }
        return $data;
    }
}