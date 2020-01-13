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
class TweetSearchResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetSearchResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetSearchResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetSearchResponse();
        if (property_exists($data, 'data')) {
            $values = array();
            foreach ($data->{'data'} as $value) {
                $values[] = $value;
            }
            $object->setData($values);
        }
        if (property_exists($data, 'includes')) {
            $object->setIncludes($this->denormalizer->denormalize($data->{'includes'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Expansions', 'json', $context));
        }
        if (property_exists($data, 'errors')) {
            $values_1 = array();
            foreach ($data->{'errors'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setErrors($values_1);
        }
        if (property_exists($data, 'meta')) {
            $object->setMeta($this->denormalizer->denormalize($data->{'meta'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetSearchResponseMeta', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $value;
            }
            $data->{'data'} = $values;
        }
        if (null !== $object->getIncludes()) {
            $data->{'includes'} = $this->normalizer->normalize($object->getIncludes(), 'json', $context);
        }
        if (null !== $object->getErrors()) {
            $values_1 = array();
            foreach ($object->getErrors() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'errors'} = $values_1;
        }
        if (null !== $object->getMeta()) {
            $data->{'meta'} = $this->normalizer->normalize($object->getMeta(), 'json', $context);
        }
        return $data;
    }
}