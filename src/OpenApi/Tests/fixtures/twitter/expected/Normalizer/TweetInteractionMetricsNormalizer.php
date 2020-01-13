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
class TweetInteractionMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetInteractionMetrics();
        if (property_exists($data, 'like_count')) {
            $object->setLikeCount($data->{'like_count'});
        }
        if (property_exists($data, 'retweet_count')) {
            $object->setRetweetCount($data->{'retweet_count'});
        }
        if (property_exists($data, 'quote_count')) {
            $object->setQuoteCount($data->{'quote_count'});
        }
        if (property_exists($data, 'reply_count')) {
            $object->setReplyCount($data->{'reply_count'});
        }
        if (property_exists($data, 'impression_count')) {
            $object->setImpressionCount($data->{'impression_count'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLikeCount()) {
            $data->{'like_count'} = $object->getLikeCount();
        }
        if (null !== $object->getRetweetCount()) {
            $data->{'retweet_count'} = $object->getRetweetCount();
        }
        if (null !== $object->getQuoteCount()) {
            $data->{'quote_count'} = $object->getQuoteCount();
        }
        if (null !== $object->getReplyCount()) {
            $data->{'reply_count'} = $object->getReplyCount();
        }
        if (null !== $object->getImpressionCount()) {
            $data->{'impression_count'} = $object->getImpressionCount();
        }
        return $data;
    }
}