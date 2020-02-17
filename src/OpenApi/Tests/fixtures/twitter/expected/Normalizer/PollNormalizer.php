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
class PollNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Poll';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Poll';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\Poll();
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('options', $data)) {
            $values = array();
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\PollOption', 'json', $context);
            }
            $object->setOptions($values);
        }
        if (\array_key_exists('voting_status', $data)) {
            $object->setVotingStatus($data['voting_status']);
        }
        if (\array_key_exists('end_datetime', $data)) {
            $object->setEndDatetime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['end_datetime']));
        }
        if (\array_key_exists('duration_minutes', $data)) {
            $object->setDurationMinutes($data['duration_minutes']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getOptions()) {
            $values = array();
            foreach ($object->getOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['options'] = $values;
        }
        if (null !== $object->getVotingStatus()) {
            $data['voting_status'] = $object->getVotingStatus();
        }
        if (null !== $object->getEndDatetime()) {
            $data['end_datetime'] = $object->getEndDatetime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDurationMinutes()) {
            $data['duration_minutes'] = $object->getDurationMinutes();
        }
        return $data;
    }
}