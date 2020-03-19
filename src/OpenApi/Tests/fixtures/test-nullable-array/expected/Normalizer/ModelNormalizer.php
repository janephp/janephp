<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\Model();
        if (\array_key_exists('foo', $data) && $data['foo'] !== null) {
            $object->setFoo($data['foo']);
        }
        elseif (\array_key_exists('foo', $data) && $data['foo'] === null) {
            $object->setFoo(null);
        }
        if (\array_key_exists('bar', $data) && $data['bar'] !== null) {
            $values = array();
            foreach ($data['bar'] as $value) {
                $values[] = $value;
            }
            $object->setBar($values);
        }
        elseif (\array_key_exists('bar', $data) && $data['bar'] === null) {
            $object->setBar(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['foo'] = $object->getFoo();
        if (null !== $object->getBar()) {
            $values = array();
            foreach ($object->getBar() as $value) {
                $values[] = $value;
            }
            $data['bar'] = $values;
        }
        else {
            $data['bar'] = null;
        }
        return $data;
    }
}