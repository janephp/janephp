<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\CompactTweetFieldsAttachments';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\CompactTweetFieldsAttachments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('media_keys', $data)) {
            $values = array();
            foreach ($data['media_keys'] as $value) {
                $values[] = $value;
            }
            $object->setMediaKeys($values);
        }
        if (\array_key_exists('poll_ids', $data)) {
            $values_1 = array();
            foreach ($data['poll_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPollIds($values_1);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMediaKeys()) {
            $values = array();
            foreach ($object->getMediaKeys() as $value) {
                $values[] = $value;
            }
            $data['media_keys'] = $values;
        }
        if (null !== $object->getPollIds()) {
            $values_1 = array();
            foreach ($object->getPollIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['poll_ids'] = $values_1;
        }
        return $data;
    }
}