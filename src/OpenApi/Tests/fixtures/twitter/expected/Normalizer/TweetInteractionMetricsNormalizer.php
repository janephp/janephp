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
class TweetInteractionMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetInteractionMetrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetInteractionMetrics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetInteractionMetrics();
        if (\array_key_exists('like_count', $data)) {
            $object->setLikeCount($data['like_count']);
        }
        if (\array_key_exists('retweet_count', $data)) {
            $object->setRetweetCount($data['retweet_count']);
        }
        if (\array_key_exists('quote_count', $data)) {
            $object->setQuoteCount($data['quote_count']);
        }
        if (\array_key_exists('reply_count', $data)) {
            $object->setReplyCount($data['reply_count']);
        }
        if (\array_key_exists('impression_count', $data)) {
            $object->setImpressionCount($data['impression_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLikeCount()) {
            $data['like_count'] = $object->getLikeCount();
        }
        if (null !== $object->getRetweetCount()) {
            $data['retweet_count'] = $object->getRetweetCount();
        }
        if (null !== $object->getQuoteCount()) {
            $data['quote_count'] = $object->getQuoteCount();
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getImpressionCount()) {
            $data['impression_count'] = $object->getImpressionCount();
        }
        return $data;
    }
}