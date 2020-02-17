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
class DefaultUserFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFields';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFields';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\DefaultUserFields();
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntities', 'json', $context));
        }
        if (\array_key_exists('most_recent_tweet_id', $data)) {
            $object->setMostRecentTweetId($data['most_recent_tweet_id']);
        }
        if (\array_key_exists('pinned_tweet_id', $data)) {
            $object->setPinnedTweetId($data['pinned_tweet_id']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEntities()) {
            $data['entities'] = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        if (null !== $object->getMostRecentTweetId()) {
            $data['most_recent_tweet_id'] = $object->getMostRecentTweetId();
        }
        if (null !== $object->getPinnedTweetId()) {
            $data['pinned_tweet_id'] = $object->getPinnedTweetId();
        }
        return $data;
    }
}