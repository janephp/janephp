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
class DetailedUserFieldsStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedUserFieldsStats';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedUserFieldsStats';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedUserFieldsStats();
        if (\array_key_exists('followers_count', $data)) {
            $object->setFollowersCount($data['followers_count']);
        }
        if (\array_key_exists('following_count', $data)) {
            $object->setFollowingCount($data['following_count']);
        }
        if (\array_key_exists('tweet_count', $data)) {
            $object->setTweetCount($data['tweet_count']);
        }
        if (\array_key_exists('listed_count', $data)) {
            $object->setListedCount($data['listed_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFollowersCount()) {
            $data['followers_count'] = $object->getFollowersCount();
        }
        if (null !== $object->getFollowingCount()) {
            $data['following_count'] = $object->getFollowingCount();
        }
        if (null !== $object->getTweetCount()) {
            $data['tweet_count'] = $object->getTweetCount();
        }
        if (null !== $object->getListedCount()) {
            $data['listed_count'] = $object->getListedCount();
        }
        return $data;
    }
}