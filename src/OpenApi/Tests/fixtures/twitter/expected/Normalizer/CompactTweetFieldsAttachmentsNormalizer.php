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
class CompactTweetFieldsAttachmentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\CompactTweetFieldsAttachments();
        if (property_exists($data, 'media_keys')) {
            $values = array();
            foreach ($data->{'media_keys'} as $value) {
                $values[] = $value;
            }
            $object->setMediaKeys($values);
        }
        if (property_exists($data, 'poll_ids')) {
            $values_1 = array();
            foreach ($data->{'poll_ids'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPollIds($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMediaKeys()) {
            $values = array();
            foreach ($object->getMediaKeys() as $value) {
                $values[] = $value;
            }
            $data->{'media_keys'} = $values;
        }
        if (null !== $object->getPollIds()) {
            $values_1 = array();
            foreach ($object->getPollIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'poll_ids'} = $values_1;
        }
        return $data;
    }
}