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
class TestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        $object = new \Jane\JsonSchema\Tests\Expected\Model\Test();
        if (\array_key_exists('child', $data)) {
            $object->setChild($this->denormalizer->denormalize($data['child'], 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Childtype', 'json', $context));
        }
        if (\array_key_exists('parent', $data)) {
            $object->setParent($this->denormalizer->denormalize($data['parent'], 'Jane\\JsonSchema\\Tests\\Expected\\Model\\Parenttype', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getChild()) {
            $data['child'] = $this->normalizer->normalize($object->getChild(), 'json', $context);
        }
        if (null !== $object->getParent()) {
            $data['parent'] = $this->normalizer->normalize($object->getParent(), 'json', $context);
        }
        return $data;
    }
}