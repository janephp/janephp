<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\DetailedUserFieldsStats';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\DetailedUserFieldsStats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['followers_count'] = $object->getFollowersCount();
        $data['following_count'] = $object->getFollowingCount();
        $data['tweet_count'] = $object->getTweetCount();
        $data['listed_count'] = $object->getListedCount();
        return $data;
    }
}