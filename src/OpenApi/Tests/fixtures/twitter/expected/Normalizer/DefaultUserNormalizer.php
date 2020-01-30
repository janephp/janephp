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
class DefaultUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUser';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUser';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DefaultUser();
        if (property_exists($data, 'format')) {
            $object->setFormat($data->{'format'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'created_at'}));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'username')) {
            $object->setUsername($data->{'username'});
        }
        if (property_exists($data, 'protected')) {
            $object->setProtected($data->{'protected'});
        }
        if (property_exists($data, 'verified')) {
            $object->setVerified($data->{'verified'});
        }
        if (property_exists($data, 'withheld')) {
            $object->setWithheld($this->denormalizer->denormalize($data->{'withheld'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\UserWithheld', 'json', $context));
        }
        if (property_exists($data, 'profile_image_url')) {
            $object->setProfileImageUrl($data->{'profile_image_url'});
        }
        if (property_exists($data, 'location')) {
            $object->setLocation($data->{'location'});
        }
        if (property_exists($data, 'url')) {
            $object->setUrl($data->{'url'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'entities')) {
            $object->setEntities($this->denormalizer->denormalize($data->{'entities'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultUserFieldsEntities', 'json', $context));
        }
        if (property_exists($data, 'most_recent_tweet_id')) {
            $object->setMostRecentTweetId($data->{'most_recent_tweet_id'});
        }
        if (property_exists($data, 'pinned_tweet_id')) {
            $object->setPinnedTweetId($data->{'pinned_tweet_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFormat()) {
            $data->{'format'} = $object->getFormat();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        }
        if (null !== $object->getProtected()) {
            $data->{'protected'} = $object->getProtected();
        }
        if (null !== $object->getVerified()) {
            $data->{'verified'} = $object->getVerified();
        }
        if (null !== $object->getWithheld()) {
            $data->{'withheld'} = $this->normalizer->normalize($object->getWithheld(), 'json', $context);
        }
        if (null !== $object->getProfileImageUrl()) {
            $data->{'profile_image_url'} = $object->getProfileImageUrl();
        }
        if (null !== $object->getLocation()) {
            $data->{'location'} = $object->getLocation();
        }
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getEntities()) {
            $data->{'entities'} = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        if (null !== $object->getMostRecentTweetId()) {
            $data->{'most_recent_tweet_id'} = $object->getMostRecentTweetId();
        }
        if (null !== $object->getPinnedTweetId()) {
            $data->{'pinned_tweet_id'} = $object->getPinnedTweetId();
        }
        return $data;
    }
}