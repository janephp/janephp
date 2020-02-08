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
class DefaultTweetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultTweet';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultTweet';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DefaultTweet();
        if (property_exists($data, 'format')) {
            $object->setFormat($data->{'format'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'created_at'}));
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
        }
        if (property_exists($data, 'author_id')) {
            $object->setAuthorId($data->{'author_id'});
        }
        if (property_exists($data, 'in_reply_to_user_id')) {
            $object->setInReplyToUserId($data->{'in_reply_to_user_id'});
        }
        if (property_exists($data, 'referenced_tweets')) {
            $values = array();
            foreach ($data->{'referenced_tweets'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsReferencedTweetsItem', 'json', $context);
            }
            $object->setReferencedTweets($values);
        }
        if (property_exists($data, 'attachments')) {
            $object->setAttachments($this->denormalizer->denormalize($data->{'attachments'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments', 'json', $context));
        }
        if (property_exists($data, 'withheld')) {
            $object->setWithheld($this->denormalizer->denormalize($data->{'withheld'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetWithheld', 'json', $context));
        }
        if (property_exists($data, 'geo')) {
            $object->setGeo($this->denormalizer->denormalize($data->{'geo'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\DefaultTweetFieldsGeo', 'json', $context));
        }
        if (property_exists($data, 'entities')) {
            $object->setEntities($this->denormalizer->denormalize($data->{'entities'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntities', 'json', $context));
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
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getAuthorId()) {
            $data->{'author_id'} = $object->getAuthorId();
        }
        if (null !== $object->getInReplyToUserId()) {
            $data->{'in_reply_to_user_id'} = $object->getInReplyToUserId();
        }
        if (null !== $object->getReferencedTweets()) {
            $values = array();
            foreach ($object->getReferencedTweets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'referenced_tweets'} = $values;
        }
        if (null !== $object->getAttachments()) {
            $data->{'attachments'} = $this->normalizer->normalize($object->getAttachments(), 'json', $context);
        }
        if (null !== $object->getWithheld()) {
            $data->{'withheld'} = $this->normalizer->normalize($object->getWithheld(), 'json', $context);
        }
        if (null !== $object->getGeo()) {
            $data->{'geo'} = $this->normalizer->normalize($object->getGeo(), 'json', $context);
        }
        if (null !== $object->getEntities()) {
            $data->{'entities'} = $this->normalizer->normalize($object->getEntities(), 'json', $context);
        }
        return $data;
    }
}