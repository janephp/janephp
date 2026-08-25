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
class DefaultTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet();
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
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('author_id', $data)) {
            $object->setAuthorId($data['author_id']);
            unset($data['author_id']);
        }
        if (\array_key_exists('in_reply_to_user_id', $data)) {
            $object->setInReplyToUserId($data['in_reply_to_user_id']);
            unset($data['in_reply_to_user_id']);
        }
        if (\array_key_exists('referenced_tweets', $data)) {
            $values = [];
            foreach ($data['referenced_tweets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsReferencedTweetsItem::class, 'json', $context);
            }
            $object->setReferencedTweets($values);
            unset($data['referenced_tweets']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($this->denormalizer->denormalize($data['attachments'], \Jane\Component\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments::class, 'json', $context));
            unset($data['attachments']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], \Jane\Component\OpenApi3\Tests\Expected\Model\TweetWithheld::class, 'json', $context));
            unset($data['withheld']);
        }
        if (\array_key_exists('geo', $data)) {
            $object->setGeo($this->denormalizer->denormalize($data['geo'], \Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweetFieldsGeo::class, 'json', $context));
            unset($data['geo']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntities::class, 'json', $context));
            unset($data['entities']);
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
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        $dataArray['id'] = $data->getId();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['text'] = $data->getText();
        $dataArray['author_id'] = $data->getAuthorId();
        if ($data->isInitialized('inReplyToUserId') && null !== $data->getInReplyToUserId()) {
            $dataArray['in_reply_to_user_id'] = $data->getInReplyToUserId();
        }
        if ($data->isInitialized('referencedTweets') && null !== $data->getReferencedTweets()) {
            $values = [];
            foreach ($data->getReferencedTweets() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['referenced_tweets'] = $values;
        }
        if ($data->isInitialized('attachments') && null !== $data->getAttachments()) {
            $dataArray['attachments'] = $data->getAttachments() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getAttachments(), 'json', $context));
        }
        if ($data->isInitialized('withheld') && null !== $data->getWithheld()) {
            $dataArray['withheld'] = $data->getWithheld() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getWithheld(), 'json', $context));
        }
        if ($data->isInitialized('geo') && null !== $data->getGeo()) {
            $dataArray['geo'] = $data->getGeo() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getGeo(), 'json', $context));
        }
        if ($data->isInitialized('entities') && null !== $data->getEntities()) {
            $dataArray['entities'] = $data->getEntities() === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->getEntities(), 'json', $context));
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
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DefaultTweet::class => false];
    }
}