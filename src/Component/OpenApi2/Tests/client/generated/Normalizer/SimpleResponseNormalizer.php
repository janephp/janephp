<?php

namespace Jane\Component\OpenApi2\Tests\Client\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi2\Tests\Client\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SimpleResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\Component\\OpenApi2\\Tests\\Client\\Model\\SimpleResponse';
    }
    public function supportsNormalization($data, $format = null, $context = []) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi2\\Tests\\Client\\Model\\SimpleResponse';
    }
    public function denormalize($data, public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi2\Tests\Client\Model\SimpleResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('foo', $data)) {
            $object->setFoo($data['foo']);
        }
        if (\array_key_exists('baz', $data)) {
            $object->setBaz($data['baz']);
        }
        return $object;
    }
    public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = array();
        if (null !== $object->getFoo()) {
            $data['foo'] = $object->getFoo();
        }
        if (null !== $object->getBaz()) {
            $data['baz'] = $object->getBaz();
        }
        return $data;
    }
}