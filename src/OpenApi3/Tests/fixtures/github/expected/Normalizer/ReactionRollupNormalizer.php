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
class ReactionRollupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReactionRollup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReactionRollup';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReactionRollup();
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
        }
        if (\array_key_exists('+1', $data)) {
            $object->set1($data['+1']);
        }
        if (\array_key_exists('-1', $data)) {
            $object->set12($data['-1']);
        }
        if (\array_key_exists('laugh', $data)) {
            $object->setLaugh($data['laugh']);
        }
        if (\array_key_exists('confused', $data)) {
            $object->setConfused($data['confused']);
        }
        if (\array_key_exists('heart', $data)) {
            $object->setHeart($data['heart']);
        }
        if (\array_key_exists('hooray', $data)) {
            $object->setHooray($data['hooray']);
        }
        if (\array_key_exists('eyes', $data)) {
            $object->setEyes($data['eyes']);
        }
        if (\array_key_exists('rocket', $data)) {
            $object->setRocket($data['rocket']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getTotalCount()) {
            $data['total_count'] = $object->getTotalCount();
        }
        if (null !== $object->get1()) {
            $data['+1'] = $object->get1();
        }
        if (null !== $object->get12()) {
            $data['-1'] = $object->get12();
        }
        if (null !== $object->getLaugh()) {
            $data['laugh'] = $object->getLaugh();
        }
        if (null !== $object->getConfused()) {
            $data['confused'] = $object->getConfused();
        }
        if (null !== $object->getHeart()) {
            $data['heart'] = $object->getHeart();
        }
        if (null !== $object->getHooray()) {
            $data['hooray'] = $object->getHooray();
        }
        if (null !== $object->getEyes()) {
            $data['eyes'] = $object->getEyes();
        }
        if (null !== $object->getRocket()) {
            $data['rocket'] = $object->getRocket();
        }
        return $data;
    }
}