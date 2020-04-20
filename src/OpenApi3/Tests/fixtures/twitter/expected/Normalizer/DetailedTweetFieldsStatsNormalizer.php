<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DetailedTweetFieldsStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi3\Tests\Expected\Model\DetailedTweetFieldsStats();
        if (\array_key_exists('retweet_count', $data)) {
            $object->setRetweetCount($data['retweet_count']);
        }
        if (\array_key_exists('reply_count', $data)) {
            $object->setReplyCount($data['reply_count']);
        }
        if (\array_key_exists('like_count', $data)) {
            $object->setLikeCount($data['like_count']);
        }
        if (\array_key_exists('quote_count', $data)) {
            $object->setQuoteCount($data['quote_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRetweetCount()) {
            $data['retweet_count'] = $object->getRetweetCount();
        }
        if (null !== $object->getReplyCount()) {
            $data['reply_count'] = $object->getReplyCount();
        }
        if (null !== $object->getLikeCount()) {
            $data['like_count'] = $object->getLikeCount();
        }
        if (null !== $object->getQuoteCount()) {
            $data['quote_count'] = $object->getQuoteCount();
        }
        return $data;
    }
}