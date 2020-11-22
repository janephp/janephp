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
class ParticipationStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ParticipationStats';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ParticipationStats';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ParticipationStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('all', $data)) {
            $values = array();
            foreach ($data['all'] as $value) {
                $values[] = $value;
            }
            $object->setAll($values);
        }
        if (\array_key_exists('owner', $data)) {
            $values_1 = array();
            foreach ($data['owner'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setOwner($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAll()) {
            $values = array();
            foreach ($object->getAll() as $value) {
                $values[] = $value;
            }
            $data['all'] = $values;
        }
        if (null !== $object->getOwner()) {
            $values_1 = array();
            foreach ($object->getOwner() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['owner'] = $values_1;
        }
        return $data;
    }
}