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
class DetailedUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedUser';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedUser();
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('protected', $data)) {
            $object->setProtected($data['protected']);
        }
        if (\array_key_exists('verified', $data)) {
            $object->setVerified($data['verified']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\UserWithheld', 'json', $context));
        }
        if (\array_key_exists('profile_image_url', $data)) {
            $object->setProfileImageUrl($data['profile_image_url']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntities', 'json', $context));
        }
        if (\array_key_exists('most_recent_tweet_id', $data)) {
            $object->setMostRecentTweetId($data['most_recent_tweet_id']);
        }
        if (\array_key_exists('pinned_tweet_id', $data)) {
            $object->setPinnedTweetId($data['pinned_tweet_id']);
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedUserFieldsStats', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if (null !== $object->getProtected()) {
            $data['protected'] = $object->getProtected();
        }
        if (null !== $object->getVerified()) {
            $data['verified'] = $object->getVerified();
        }
        if (null !== $object->getWithheld()) {
            $data['withheld'] = $this->normalizer->normalize($object->getWithheld(), 'json', $context);
        }
        if (null !== $object->getProfileImageUrl()) {
            $data['profile_image_url'] = $object->getProfileImageUrl();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEntities()) {
            $data['entities'] = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        if (null !== $object->getMostRecentTweetId()) {
            $data['most_recent_tweet_id'] = $object->getMostRecentTweetId();
        }
        if (null !== $object->getPinnedTweetId()) {
            $data['pinned_tweet_id'] = $object->getPinnedTweetId();
        }
        if (null !== $object->getStats()) {
            $data['stats'] = $this->normalizer->normalize($object->getStats(), 'json', $context);
        }
        return $data;
    }
}