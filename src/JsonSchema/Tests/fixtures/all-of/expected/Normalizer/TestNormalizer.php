<?php

namespace Jane\JsonSchema\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Test';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\Test;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (property_exists($data, 'child')) {
            $object->setChild($this->denormalizer->denormalize($data->{'child'}, 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Childtype', 'json', $context));
        }
        if (property_exists($data, 'parent')) {
            $object->setParent($this->denormalizer->denormalize($data->{'parent'}, 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Parenttype', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getChild()) {
            $data->{'child'} = $this->normalizer->normalize($object->getChild(), 'json', $context);
        }
        else {
            $data->{'child'} = null;
        }
        if (null !== $object->getParent()) {
            $data->{'parent'} = $this->normalizer->normalize($object->getParent(), 'json', $context);
        }
        else {
            $data->{'parent'} = null;
        }
        return $data;
    }
}