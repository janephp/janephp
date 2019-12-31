<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TestGetBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestGetBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestGetBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\TestGetBody();
        if (property_exists($data, 'foo')) {
            $object->setFoo($data->{'foo'});
        }
        if (property_exists($data, 'Bar')) {
            $object->setBar($this->denormalizer->denormalize($data->{'Bar'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Bar', 'json', $context));
        }
        if (property_exists($data, 'Baz')) {
            $object->setBaz($this->denormalizer->denormalize($data->{'Baz'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TestGetBodyBaz', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFoo()) {
            $data->{'foo'} = $object->getFoo();
        }
        if (null !== $object->getBar()) {
            $data->{'Bar'} = $this->normalizer->normalize($object->getBar(), 'json', $context);
        }
        if (null !== $object->getBaz()) {
            $data->{'Baz'} = $this->normalizer->normalize($object->getBaz(), 'json', $context);
        }
        return $data;
    }
}