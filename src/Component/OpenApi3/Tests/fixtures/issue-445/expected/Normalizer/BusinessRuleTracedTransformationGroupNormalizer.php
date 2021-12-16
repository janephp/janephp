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
class BusinessRuleTracedTransformationGroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\BusinessRuleTracedTransformationGroup';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\BusinessRuleTracedTransformationGroup';
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
        $object = new \PicturePark\API\Model\BusinessRuleTracedTransformationGroup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
            $object->setTraceRefId($data['traceRefId']);
        }
        elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
            $object->setTraceRefId(null);
        }
        if (\array_key_exists('input', $data) && $data['input'] !== null) {
            $object->setInput($data['input']);
        }
        elseif (\array_key_exists('input', $data) && $data['input'] === null) {
            $object->setInput(null);
        }
        if (\array_key_exists('output', $data) && $data['output'] !== null) {
            $object->setOutput($data['output']);
        }
        elseif (\array_key_exists('output', $data) && $data['output'] === null) {
            $object->setOutput(null);
        }
        if (\array_key_exists('transformations', $data) && $data['transformations'] !== null) {
            $values = array();
            foreach ($data['transformations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\BusinessRuleTracedTransformation', 'json', $context);
            }
            $object->setTransformations($values);
        }
        elseif (\array_key_exists('transformations', $data) && $data['transformations'] === null) {
            $object->setTransformations(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTraceRefId()) {
            $data['traceRefId'] = $object->getTraceRefId();
        }
        if (null !== $object->getInput()) {
            $data['input'] = $object->getInput();
        }
        if (null !== $object->getOutput()) {
            $data['output'] = $object->getOutput();
        }
        if (null !== $object->getTransformations()) {
            $values = array();
            foreach ($object->getTransformations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['transformations'] = $values;
        }
        return $data;
    }
}