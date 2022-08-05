<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi3\Tests\Expected\Model\TweetInteractionMetrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['like_count'] = $object->getLikeCount();
        $data['retweet_count'] = $object->getRetweetCount();
        $data['quote_count'] = $object->getQuoteCount();
        $data['reply_count'] = $object->getReplyCount();
        if (null !== $object->getImpressionCount()) {
            $data['impression_count'] = $object->getImpressionCount();
        }
        return $data;
    }
}