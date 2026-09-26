<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUser();
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
            $object->format = $data['format'];
            unset($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                if (is_string($data['created_at']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['created_at'])) {
                    try {
                        $date = new \DateTime($data['created_at']);
                    } catch (\Exception) {
                        throw new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('username', $data)) {
            $object->username = $data['username'];
            unset($data['username']);
        }
        if (\array_key_exists('protected', $data)) {
            $object->protected = $data['protected'];
            unset($data['protected']);
        }
        if (\array_key_exists('verified', $data)) {
            $object->verified = $data['verified'];
            unset($data['verified']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->withheld = $this->denormalizer->denormalize($data['withheld'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\UserWithheld::class, 'json', $context);
            unset($data['withheld']);
        }
        if (\array_key_exists('profile_image_url', $data)) {
            $object->profileImageUrl = $data['profile_image_url'];
            unset($data['profile_image_url']);
        }
        if (\array_key_exists('location', $data)) {
            $object->location = $data['location'];
            unset($data['location']);
        }
        if (\array_key_exists('url', $data)) {
            $object->url = $data['url'];
            unset($data['url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->entities = $this->denormalizer->denormalize($data['entities'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultUserFieldsEntities::class, 'json', $context);
            unset($data['entities']);
        }
        if (\array_key_exists('most_recent_tweet_id', $data)) {
            $object->mostRecentTweetId = $data['most_recent_tweet_id'];
            unset($data['most_recent_tweet_id']);
        }
        if (\array_key_exists('pinned_tweet_id', $data)) {
            $object->pinnedTweetId = $data['pinned_tweet_id'];
            unset($data['pinned_tweet_id']);
        }
        if (\array_key_exists('stats', $data)) {
            $object->stats = $this->denormalizer->denormalize($data['stats'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUserFieldsStats::class, 'json', $context);
            unset($data['stats']);
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
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format;
        }
        $dataArray['id'] = $data->id;
        $dataArray['created_at'] = $data->createdAt->format('Y-m-d\TH:i:sP');
        $dataArray['name'] = $data->name;
        $dataArray['username'] = $data->username;
        $dataArray['protected'] = $data->protected;
        $dataArray['verified'] = $data->verified;
        if (array_key_exists('withheld', get_object_vars($data)) && null !== ($data->withheld ?? null)) {
            $normalized = $this->normalizer->normalize($data->withheld, 'json', $context);
            $dataArray['withheld'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('profileImageUrl', get_object_vars($data)) && null !== ($data->profileImageUrl ?? null)) {
            $dataArray['profile_image_url'] = $data->profileImageUrl;
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $dataArray['location'] = $data->location;
        }
        $dataArray['url'] = $data->url;
        $dataArray['description'] = $data->description;
        if (array_key_exists('entities', get_object_vars($data)) && null !== ($data->entities ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->entities, 'json', $context);
            $dataArray['entities'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('mostRecentTweetId', get_object_vars($data)) && null !== ($data->mostRecentTweetId ?? null)) {
            $dataArray['most_recent_tweet_id'] = $data->mostRecentTweetId;
        }
        if (array_key_exists('pinnedTweetId', get_object_vars($data)) && null !== ($data->pinnedTweetId ?? null)) {
            $dataArray['pinned_tweet_id'] = $data->pinnedTweetId;
        }
        if (array_key_exists('stats', get_object_vars($data)) && null !== ($data->stats ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->stats, 'json', $context);
            $dataArray['stats'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedUser::class => false];
    }
}