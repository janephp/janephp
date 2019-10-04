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
class PatternPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\JsonSchema\\Tests\\Expected\\Model\\PatternProperties';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\JsonSchema\Tests\Expected\Model\PatternProperties;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \Jane\JsonSchema\Tests\Expected\Model\PatternProperties();
        $data = clone $data;
        if (property_exists($data, 'foo')) {
            $object->setFoo($data->{'foo'});
            unset($data->{'foo'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/x-.*/', $key)) {
                $object[$key] = $value;
            }
            if (preg_match('/xxxx-.*/', $key)) {
                $object[$key] = $this->denormalizer->denormalize($value, 'Jane\\JsonSchema\\Tests\\Expected\\Model\\AdditionalProperties', 'json', $context);
            }
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFoo()) {
            $data->{'foo'} = $object->getFoo();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/x-.*/', $key)) {
                $data->{$key} = $value;
            }
            if (preg_match('/xxxx-.*/', $key)) {
                $data->{$key} = $this->normalizer->normalize($value, 'json', $context);
            }
        }
        return $data;
    }
}