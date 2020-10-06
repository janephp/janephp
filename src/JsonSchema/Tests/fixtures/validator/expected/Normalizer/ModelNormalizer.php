<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Model';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Model;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Model();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enumString', $data)) {
            $object->setEnumString($data['enumString']);
        }
        if (\array_key_exists('enumArrayString', $data)) {
            $value = $data['enumArrayString'];
            if (is_string($data['enumArrayString'])) {
                $value = $data['enumArrayString'];
            }
            $object->setEnumArrayString($value);
        }
        if (\array_key_exists('enumNoType', $data)) {
            $object->setEnumNoType($data['enumNoType']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEnumString()) {
            $data['enumString'] = $object->getEnumString();
        }
        if (null !== $object->getEnumArrayString()) {
            $value = $object->getEnumArrayString();
            if (is_string($object->getEnumArrayString())) {
                $value = $object->getEnumArrayString();
            }
            $data['enumArrayString'] = $value;
        }
        if (null !== $object->getEnumNoType()) {
            $data['enumNoType'] = $object->getEnumNoType();
        }
        return $data;
    }
}