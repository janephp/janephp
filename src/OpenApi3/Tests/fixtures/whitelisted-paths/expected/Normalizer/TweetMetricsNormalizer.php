<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TweetMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetMetrics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi3\Tests\Expected\Model\TweetMetrics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tweet_id', $data)) {
            $object->setTweetId($data['tweet_id']);
        }
        if (\array_key_exists('tweet', $data)) {
            $object->setTweet($this->denormalizer->denormalize($data['tweet'], 'Jane\\OpenApi3\\Tests\\Expected\\Model\\TweetInteractionMetrics', 'json', $context));
        }
        if (\array_key_exists('video', $data)) {
            $object->setVideo($this->denormalizer->denormalize($data['video'], 'Jane\\OpenApi3\\Tests\\Expected\\Model\\VideoMetrics', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['tweet_id'] = $object->getTweetId();
        $data['tweet'] = $this->normalizer->normalize($object->getTweet(), 'json', $context);
        if (null !== $object->getVideo()) {
            $data['video'] = $this->normalizer->normalize($object->getVideo(), 'json', $context);
        }
        return $data;
    }
}