<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweet';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweet();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
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
            $values = array();
            foreach ($data['referenced_tweets'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem', 'json', $context);
            }
            $object->setReferencedTweets($values);
            unset($data['referenced_tweets']);
        }
        if (\array_key_exists('attachments', $data)) {
            $object->setAttachments($this->denormalizer->denormalize($data['attachments'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments', 'json', $context));
            unset($data['attachments']);
        }
        if (\array_key_exists('withheld', $data)) {
            $object->setWithheld($this->denormalizer->denormalize($data['withheld'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\TweetWithheld', 'json', $context));
            unset($data['withheld']);
        }
        if (\array_key_exists('geo', $data)) {
            $object->setGeo($this->denormalizer->denormalize($data['geo'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo', 'json', $context));
            unset($data['geo']);
        }
        if (\array_key_exists('entities', $data)) {
            $object->setEntities($this->denormalizer->denormalize($data['entities'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntities', 'json', $context));
            unset($data['entities']);
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats', 'json', $context));
            unset($data['stats']);
        }
        if (\array_key_exists('context_annotation', $data)) {
            $values_1 = array();
            foreach ($data['context_annotation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation', 'json', $context);
            }
            $object->setContextAnnotation($values_1);
            unset($data['context_annotation']);
        }
        if (\array_key_exists('possibly_sensitive', $data)) {
            $object->setPossiblySensitive($data['possibly_sensitive']);
            unset($data['possibly_sensitive']);
        }
        if (\array_key_exists('lang', $data)) {
            $object->setLang($data['lang']);
            unset($data['lang']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('format') && null !== $object->getFormat()) {
            $data['format'] = $object->getFormat();
        }
        $data['id'] = $object->getId();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['text'] = $object->getText();
        $data['author_id'] = $object->getAuthorId();
        if ($object->isInitialized('inReplyToUserId') && null !== $object->getInReplyToUserId()) {
            $data['in_reply_to_user_id'] = $object->getInReplyToUserId();
        }
        if ($object->isInitialized('referencedTweets') && null !== $object->getReferencedTweets()) {
            $values = array();
            foreach ($object->getReferencedTweets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['referenced_tweets'] = $values;
        }
        if ($object->isInitialized('attachments') && null !== $object->getAttachments()) {
            $data['attachments'] = $this->normalizer->normalize($object->getAttachments(), 'json', $context);
        }
        if ($object->isInitialized('withheld') && null !== $object->getWithheld()) {
            $data['withheld'] = $this->normalizer->normalize($object->getWithheld(), 'json', $context);
        }
        if ($object->isInitialized('geo') && null !== $object->getGeo()) {
            $data['geo'] = $this->normalizer->normalize($object->getGeo(), 'json', $context);
        }
        if ($object->isInitialized('entities') && null !== $object->getEntities()) {
            $data['entities'] = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        $data['stats'] = $this->normalizer->normalize($object->getStats(), 'json', $context);
        if ($object->isInitialized('contextAnnotation') && null !== $object->getContextAnnotation()) {
            $values_1 = array();
            foreach ($object->getContextAnnotation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['context_annotation'] = $values_1;
        }
        $data['possibly_sensitive'] = $object->getPossiblySensitive();
        if ($object->isInitialized('lang') && null !== $object->getLang()) {
            $data['lang'] = $object->getLang();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}