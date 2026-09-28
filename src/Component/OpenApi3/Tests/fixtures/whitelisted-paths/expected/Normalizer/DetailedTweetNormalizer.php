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
class DetailedTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('possibly_sensitive', $data) && \is_int($data['possibly_sensitive'])) {
            $data['possibly_sensitive'] = (bool) $data['possibly_sensitive'];
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
        if (\array_key_exists('geo', $data)) {
            $object->geo = $this->denormalizer->denormalize($data['geo'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DefaultTweetFieldsGeo::class, 'json', $context);
            unset($data['geo']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->entities = $this->denormalizer->denormalize($data['entities'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\FullTextEntities::class, 'json', $context);
            unset($data['entities']);
        }
        if (\array_key_exists('stats', $data)) {
            $object->stats = $this->denormalizer->denormalize($data['stats'], \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweetFieldsStats::class, 'json', $context);
            unset($data['stats']);
        }
        if (\array_key_exists('context_annotation', $data)) {
            $values_1 = [];
            foreach ($data['context_annotation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\ContextAnnotation::class, 'json', $context);
            }
            $object->contextAnnotation = $values_1;
            unset($data['context_annotation']);
        }
        if (\array_key_exists('possibly_sensitive', $data)) {
            $object->possiblySensitive = $data['possibly_sensitive'];
            unset($data['possibly_sensitive']);
        }
        if (\array_key_exists('lang', $data)) {
            $object->lang = $data['lang'];
            unset($data['lang']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if (array_key_exists('geo', get_object_vars($data)) && null !== ($data->geo ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->geo, 'json', $context);
            $dataArray['geo'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('entities', get_object_vars($data)) && null !== ($data->entities ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->entities, 'json', $context);
            $dataArray['entities'] = \is_iterable($normalized_4) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        $normalized_5 = $data->stats === null ? null : $this->normalizer->normalize($data->stats, 'json', $context);
        $dataArray['stats'] = \is_iterable($normalized_5) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_5) : $normalized_5;
        if (array_key_exists('contextAnnotation', get_object_vars($data)) && null !== ($data->contextAnnotation ?? null)) {
            $values_1 = [];
            foreach ($data->contextAnnotation as $value_1) {
                $normalized_6 = $value_1 === null ? null : $this->normalizer->normalize($value_1, 'json', $context);
                $values_1[] = \is_iterable($normalized_6) ? new \Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\JsonObject($normalized_6) : $normalized_6;
            }
            $dataArray['context_annotation'] = $values_1;
        }
        $dataArray['possibly_sensitive'] = $data->possiblySensitive;
        if (array_key_exists('lang', get_object_vars($data)) && null !== ($data->lang ?? null)) {
            $dataArray['lang'] = $data->lang;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['source'] = $data->source;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model\DetailedTweet::class => false];
    }
}