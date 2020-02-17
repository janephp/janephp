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
class SingleTweetLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\SingleTweetLookupResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\SingleTweetLookupResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\SingleTweetLookupResponse();
        if (\array_key_exists('data', $data)) {
            $object->setData($data['data']);
        }
        if (\array_key_exists('includes', $data)) {
            $object->setIncludes($this->denormalizer->denormalize($data['includes'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\Expansions', 'json', $context));
        }
        if (\array_key_exists('errors', $data)) {
            $values = array();
            foreach ($data['errors'] as $value) {
                $values[] = $value;
            }
            $object->setErrors($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getData()) {
            $data['data'] = $object->getData();
        }
        if (null !== $object->getIncludes()) {
            $data['includes'] = $this->normalizer->normalize($object->getIncludes(), 'json', $context);
        }
        if (null !== $object->getErrors()) {
            $values = array();
            foreach ($object->getErrors() as $value) {
                $values[] = $value;
            }
            $data['errors'] = $values;
        }
        return $data;
    }
}