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
class TweetMetricsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetMetrics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetMetrics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetMetrics();
        if (property_exists($data, 'tweet_id')) {
            $object->setTweetId($data->{'tweet_id'});
        }
        if (property_exists($data, 'tweet')) {
            $object->setTweet($this->denormalizer->denormalize($data->{'tweet'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetInteractionMetrics', 'json', $context));
        }
        if (property_exists($data, 'video')) {
            $object->setVideo($this->denormalizer->denormalize($data->{'video'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\VideoMetrics', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getTweetId()) {
            $data->{'tweet_id'} = $object->getTweetId();
        }
        if (null !== $object->getTweet()) {
            $data->{'tweet'} = $this->normalizer->normalize($object->getTweet(), 'json', $context);
        }
        if (null !== $object->getVideo()) {
            $data->{'video'} = $this->normalizer->normalize($object->getVideo(), 'json', $context);
        }
        return $data;
    }
}