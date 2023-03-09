<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchema\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BazNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Baz';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Jane\Component\JsonSchema\Tests\Expected\Model\Baz;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\Component\JsonSchema\Tests\Expected\Model\Baz();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($data['foo']);
        }
        if (\array_key_exists('Bar', $data)) {
            $object->setBar($this->denormalizer->denormalize($data['Bar'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\Bar', 'json', $context));
        }
        if (\array_key_exists('Baz', $data)) {
            $object->setBaz($this->denormalizer->denormalize($data['Baz'], 'Jane\\Component\\JsonSchema\\Tests\\Expected\\Model\\BazBaz', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('foo') && null !== $object->getFoo()) {
            $data['foo'] = $object->getFoo();
        }
        if ($object->isInitialized('bar') && null !== $object->getBar()) {
            $data['Bar'] = $this->normalizer->normalize($object->getBar(), 'json', $context);
        }
        if ($object->isInitialized('baz') && null !== $object->getBaz()) {
            $data['Baz'] = $this->normalizer->normalize($object->getBaz(), 'json', $context);
        }
        return $data;
    }
}