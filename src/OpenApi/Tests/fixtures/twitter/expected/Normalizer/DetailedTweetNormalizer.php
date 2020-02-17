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
class DetailedTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweet';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweet';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedTweet();
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('author_id', $data)) {
            $object->setAuthorId($data['author_id']);
        }
        if (\array_key_exists('in_reply_to_user_id', $data)) {
            $object->setInReplyToUserId($data['in_reply_to_user_id']);
        }
        if (\array_key_exists('referenced_tweets', $data)) {
            $values = array();
            foreach ($data['referenced_tweets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem', 'json', $context);
            }
            $object->setReferencedTweets($values);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($this->denormalizer->denormalize($data['attachments'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments', 'json', $context));
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetWithheld', 'json', $context));
        }
        if (\array_key_exists('geo', $data)) {
            $object->setGeo($this->denormalizer->denormalize($data['geo'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo', 'json', $context));
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntities', 'json', $context));
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweetFieldsStats', 'json', $context));
        }
        if (\array_key_exists('context_annotation', $data)) {
            $values_1 = array();
            foreach ($data['context_annotation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotation', 'json', $context);
            }
            $object->setContextAnnotation($values_1);
        }
        if (\array_key_exists('possibly_sensitive', $data)) {
            $object->setPossiblySensitive($data['possibly_sensitive']);
        }
        if (\array_key_exists('lang', $data)) {
            $object->setLang($data['lang']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
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
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getAuthorId()) {
            $data['author_id'] = $object->getAuthorId();
        }
        if (null !== $object->getInReplyToUserId()) {
            $data['in_reply_to_user_id'] = $object->getInReplyToUserId();
        }
        if (null !== $object->getReferencedTweets()) {
            $values = array();
            foreach ($object->getReferencedTweets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['referenced_tweets'] = $values;
        }
        if (null !== $object->getAttachments()) {
            $data['attachments'] = $this->normalizer->normalize($object->getAttachments(), 'json', $context);
        }
        if (null !== $object->getWithheld()) {
            $data['withheld'] = $this->normalizer->normalize($object->getWithheld(), 'json', $context);
        }
        if (null !== $object->getGeo()) {
            $data['geo'] = $this->normalizer->normalize($object->getGeo(), 'json', $context);
        }
        if (null !== $object->getEntities()) {
            $data['entities'] = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        if (null !== $object->getStats()) {
            $data['stats'] = $this->normalizer->normalize($object->getStats(), 'json', $context);
        }
        if (null !== $object->getContextAnnotation()) {
            $values_1 = array();
            foreach ($object->getContextAnnotation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['context_annotation'] = $values_1;
        }
        if (null !== $object->getPossiblySensitive()) {
            $data['possibly_sensitive'] = $object->getPossiblySensitive();
        }
        if (null !== $object->getLang()) {
            $data['lang'] = $object->getLang();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        return $data;
    }
}