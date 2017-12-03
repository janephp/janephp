<?php

namespace Jane\OpenApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Jane\\OpenApi\\Model\\Response') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Jane\OpenApi\Model\Response) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\Model\Response();
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'schema')) {
            $value = $data->{'schema'};
            if (is_object($data->{'schema'})) {
                $value = $this->denormalizer->denormalize($data->{'schema'}, 'Jane\\OpenApi\\Model\\Schema', 'json', $context);
            }
            if (is_object($data->{'schema'}) and (isset($data->{'schema'}->{'type'}) and $data->{'schema'}->{'type'} == 'file')) {
                $value = $this->denormalizer->denormalize($data->{'schema'}, 'Jane\\OpenApi\\Model\\FileSchema', 'json', $context);
            }
            $object->setSchema($value);
        }
        if (property_exists($data, 'headers')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'headers'} as $key => $value_1) {
                $values[$key] = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\Model\\Header', 'json', $context);
            }
            $object->setHeaders($values);
        }
        if (property_exists($data, 'examples')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'examples'} as $key_1 => $value_2) {
                $values_1[$key_1] = $value_2;
            }
            $object->setExamples($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getSchema()) {
            $value = $object->getSchema();
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            if (is_object($object->getSchema())) {
                $value = $this->normalizer->normalize($object->getSchema(), 'json', $context);
            }
            $data->{'schema'} = $value;
        }
        if (null !== $object->getHeaders()) {
            $values = new \stdClass();
            foreach ($object->getHeaders() as $key => $value_1) {
                $values->{$key} = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'headers'} = $values;
        }
        if (null !== $object->getExamples()) {
            $values_1 = new \stdClass();
            foreach ($object->getExamples() as $key_1 => $value_2) {
                $values_1->{$key_1} = $value_2;
            }
            $data->{'examples'} = $values_1;
        }

        return $data;
    }
}
