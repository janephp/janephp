<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Test';
    }
    /**
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Test;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Test();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('child', $data)) {
            $object->setChild($this->denormalizer->denormalize($data['child'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Childtype', 'json', $context));
        }
        if (\array_key_exists('parent', $data)) {
            $object->setParent($this->denormalizer->denormalize($data['parent'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Parenttype', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
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