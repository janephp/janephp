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
class PollNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Poll();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'options')) {
            $values = array();
            foreach ($data->{'options'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\PollOption', 'json', $context);
            }
            $object->setOptions($values);
        }
        if (property_exists($data, 'voting_status')) {
            $object->setVotingStatus($data->{'voting_status'});
        }
        if (property_exists($data, 'end_datetime')) {
            $object->setEndDatetime(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'end_datetime'}));
        }
        if (property_exists($data, 'duration_minutes')) {
            $object->setDurationMinutes($data->{'duration_minutes'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getOptions()) {
            $values = array();
            foreach ($object->getOptions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'options'} = $values;
        }
        if (null !== $object->getVotingStatus()) {
            $data->{'voting_status'} = $object->getVotingStatus();
        }
        if (null !== $object->getEndDatetime()) {
            $data->{'end_datetime'} = $object->getEndDatetime()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getDurationMinutes()) {
            $data->{'duration_minutes'} = $object->getDurationMinutes();
        }
        return $data;
    }
}