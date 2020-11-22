<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BusinessRuleTracedRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleTracedRule';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTracedRule';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\BusinessRuleTracedRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
            $object->setConfiguration($data['configuration']);
        }
        elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
            $object->setConfiguration(null);
        }
        if (\array_key_exists('evaluations', $data) && $data['evaluations'] !== null) {
            $values = array();
            foreach ($data['evaluations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTracedEvaluation', 'json', $context);
            }
            $object->setEvaluations($values);
        }
        elseif (\array_key_exists('evaluations', $data) && $data['evaluations'] === null) {
            $object->setEvaluations(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConfiguration()) {
            $data['configuration'] = $object->getConfiguration();
        }
        if (null !== $object->getEvaluations()) {
            $values = array();
            foreach ($object->getEvaluations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['evaluations'] = $values;
        }
        return $data;
    }
}