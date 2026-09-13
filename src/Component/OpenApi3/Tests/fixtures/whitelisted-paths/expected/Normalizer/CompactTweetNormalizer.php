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
class CompactTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
                throw new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('text', $data)) {
            $object->text = $data['text'];
            unset($data['text']);
        }
        if (\array_key_exists('author_id', $data)) {
            $object->authorId = $data['author_id'];
            unset($data['author_id']);
        }
        if (\array_key_exists('in_reply_to_user_id', $data)) {
            $object->inReplyToUserId = $data['in_reply_to_user_id'];
            unset($data['in_reply_to_user_id']);
        }
        if (\array_key_exists('referenced_tweets', $data)) {
            $values = [];
            foreach ($data['referenced_tweets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweetFieldsReferencedTweetsItem::class, 'json', $context);
            }
            $object->referencedTweets = $values;
            unset($data['referenced_tweets']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->attachments = $this->denormalizer->denormalize($data['attachments'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweetFieldsAttachments::class, 'json', $context);
            unset($data['attachments']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->withheld = $this->denormalizer->denormalize($data['withheld'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\TweetWithheld::class, 'json', $context);
            unset($data['withheld']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $dataArray['text'] = $data->text;
        $dataArray['author_id'] = $data->authorId;
        if (array_key_exists('inReplyToUserId', get_object_vars($data)) && null !== ($data->inReplyToUserId ?? null)) {
            $dataArray['in_reply_to_user_id'] = $data->inReplyToUserId;
        }
        if (array_key_exists('referencedTweets', get_object_vars($data)) && null !== ($data->referencedTweets ?? null)) {
            $values = [];
            foreach ($data->referencedTweets as $value) {
                $normalized = $value === null ? null : $this->normalizer->normalize($value, 'json', $context);
                $values[] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['referenced_tweets'] = $values;
        }
        if (array_key_exists('attachments', get_object_vars($data)) && null !== ($data->attachments ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->attachments, 'json', $context);
            $dataArray['attachments'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('withheld', get_object_vars($data)) && null !== ($data->withheld ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->withheld, 'json', $context);
            $dataArray['withheld'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\CompactTweet::class => false];
    }
}