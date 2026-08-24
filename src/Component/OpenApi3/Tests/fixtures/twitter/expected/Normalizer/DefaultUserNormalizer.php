<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('protected', $data) && \is_int($data['protected'])) {
            $data['protected'] = (bool) $data['protected'];
        }
        if (\array_key_exists('verified', $data) && \is_int($data['verified'])) {
            $data['verified'] = (bool) $data['verified'];
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        if (\array_key_exists('protected', $data)) {
            $object->setProtected($data['protected']);
            unset($data['protected']);
        }
        if (\array_key_exists('verified', $data)) {
            $object->setVerified($data['verified']);
            unset($data['verified']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], \Jane\Component\OpenApi3\Tests\Expected\Model\UserWithheld::class, 'json', $context));
            unset($data['withheld']);
        }
        if (\array_key_exists('profile_image_url', $data)) {
            $object->setProfileImageUrl($data['profile_image_url']);
            unset($data['profile_image_url']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUserFieldsEntities::class, 'json', $context));
            unset($data['entities']);
        }
        if (\array_key_exists('most_recent_tweet_id', $data)) {
            $object->setMostRecentTweetId($data['most_recent_tweet_id']);
            unset($data['most_recent_tweet_id']);
        }
        if (\array_key_exists('pinned_tweet_id', $data)) {
            $object->setPinnedTweetId($data['pinned_tweet_id']);
            unset($data['pinned_tweet_id']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        $dataArray['id'] = $data->getId();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['name'] = $data->getName();
        $dataArray['username'] = $data->getUsername();
        $dataArray['protected'] = $data->getProtected();
        $dataArray['verified'] = $data->getVerified();
        if ($data->isInitialized('withheld') && null !== $data->getWithheld()) {
            $dataArray['withheld'] = $data->getWithheld() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getWithheld(), 'json', $context));
        }
        if ($data->isInitialized('profileImageUrl') && null !== $data->getProfileImageUrl()) {
            $dataArray['profile_image_url'] = $data->getProfileImageUrl();
        }
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $data->getLocation();
        }
        $dataArray['url'] = $data->getUrl();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('entities') && null !== $data->getEntities()) {
            $dataArray['entities'] = $data->getEntities() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getEntities(), 'json', $context));
        }
        if ($data->isInitialized('mostRecentTweetId') && null !== $data->getMostRecentTweetId()) {
            $dataArray['most_recent_tweet_id'] = $data->getMostRecentTweetId();
        }
        if ($data->isInitialized('pinnedTweetId') && null !== $data->getPinnedTweetId()) {
            $dataArray['pinned_tweet_id'] = $data->getPinnedTweetId();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DefaultUser::class => false];
    }
}