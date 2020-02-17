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
class TweetSearchResponseMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetSearchResponseMeta';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetSearchResponseMeta';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetSearchResponseMeta();
        if (\array_key_exists('newest_id', $data)) {
            $object->setNewestId($data['newest_id']);
        }
        if (\array_key_exists('oldest_id', $data)) {
            $object->setOldestId($data['oldest_id']);
        }
        if (\array_key_exists('next_token', $data)) {
            $object->setNextToken($data['next_token']);
        }
        if (\array_key_exists('result_count', $data)) {
            $object->setResultCount($data['result_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNewestId()) {
            $data['newest_id'] = $object->getNewestId();
        }
        if (null !== $object->getOldestId()) {
            $data['oldest_id'] = $object->getOldestId();
        }
        if (null !== $object->getNextToken()) {
            $data['next_token'] = $object->getNextToken();
        }
        if (null !== $object->getResultCount()) {
            $data['result_count'] = $object->getResultCount();
        }
        return $data;
    }
}