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
class PollNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Poll';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Poll';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\Poll();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('options', $data)) {
            $values = array();
            foreach ($data['options'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\PollOption', 'json', $context);
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $values = array();
        foreach ($object->getOptions() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['options'] = $values;
        $data['voting_status'] = $object->getVotingStatus();
        $data['end_datetime'] = $object->getEndDatetime()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getDurationMinutes()) {
            $data['duration_minutes'] = $object->getDurationMinutes();
        }
        return $data;
    }
}