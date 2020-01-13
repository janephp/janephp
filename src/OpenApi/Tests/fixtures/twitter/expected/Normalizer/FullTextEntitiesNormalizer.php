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
class FullTextEntitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntities';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntities';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\FullTextEntities();
        if (property_exists($data, 'urls')) {
            $values = array();
            foreach ($data->{'urls'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\UrlEntity', 'json', $context);
            }
            $object->setUrls($values);
        }
        if (property_exists($data, 'hashtags')) {
            $values_1 = array();
            foreach ($data->{'hashtags'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\Tests\\Expected\\Model\\HashtagEntity', 'json', $context);
            }
            $object->setHashtags($values_1);
        }
        if (property_exists($data, 'mentions')) {
            $values_2 = array();
            foreach ($data->{'mentions'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jane\\OpenApi\\Tests\\Expected\\Model\\MentionEntity', 'json', $context);
            }
            $object->setMentions($values_2);
        }
        if (property_exists($data, 'cashtags')) {
            $values_3 = array();
            foreach ($data->{'cashtags'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Jane\\OpenApi\\Tests\\Expected\\Model\\CashtagEntity', 'json', $context);
            }
            $object->setCashtags($values_3);
        }
        if (property_exists($data, 'annotations')) {
            $values_4 = array();
            foreach ($data->{'annotations'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem', 'json', $context);
            }
            $object->setAnnotations($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUrls()) {
            $values = array();
            foreach ($object->getUrls() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'urls'} = $values;
        }
        if (null !== $object->getHashtags()) {
            $values_1 = array();
            foreach ($object->getHashtags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'hashtags'} = $values_1;
        }
        if (null !== $object->getMentions()) {
            $values_2 = array();
            foreach ($object->getMentions() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'mentions'} = $values_2;
        }
        if (null !== $object->getCashtags()) {
            $values_3 = array();
            foreach ($object->getCashtags() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'cashtags'} = $values_3;
        }
        if (null !== $object->getAnnotations()) {
            $values_4 = array();
            foreach ($object->getAnnotations() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'annotations'} = $values_4;
        }
        return $data;
    }
}