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
class DetailedUserFieldsStatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedUserFieldsStats();
        if (property_exists($data, 'followers_count')) {
            $object->setFollowersCount($data->{'followers_count'});
        }
        if (property_exists($data, 'following_count')) {
            $object->setFollowingCount($data->{'following_count'});
        }
        if (property_exists($data, 'tweet_count')) {
            $object->setTweetCount($data->{'tweet_count'});
        }
        if (property_exists($data, 'listed_count')) {
            $object->setListedCount($data->{'listed_count'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFollowersCount()) {
            $data->{'followers_count'} = $object->getFollowersCount();
        }
        if (null !== $object->getFollowingCount()) {
            $data->{'following_count'} = $object->getFollowingCount();
        }
        if (null !== $object->getTweetCount()) {
            $data->{'tweet_count'} = $object->getTweetCount();
        }
        if (null !== $object->getListedCount()) {
            $data->{'listed_count'} = $object->getListedCount();
        }
        return $data;
    }
}