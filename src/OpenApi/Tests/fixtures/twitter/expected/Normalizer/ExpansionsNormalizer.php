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
class ExpansionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Expansions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Expansions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Expansions();
        if (property_exists($data, 'users')) {
            $values = array();
            foreach ($data->{'users'} as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
        }
        if (property_exists($data, 'tweets')) {
            $values_1 = array();
            foreach ($data->{'tweets'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTweets($values_1);
        }
        if (property_exists($data, 'places')) {
            $values_2 = array();
            foreach ($data->{'places'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPlaces($values_2);
        }
        if (property_exists($data, 'media')) {
            $values_3 = array();
            foreach ($data->{'media'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setMedia($values_3);
        }
        if (property_exists($data, 'polls')) {
            $values_4 = array();
            foreach ($data->{'polls'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\Tests\\Expected\\Model\\Poll', 'json', $context);
            }
            $object->setPolls($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data->{'users'} = $values;
        }
        if (null !== $object->getTweets()) {
            $values_1 = array();
            foreach ($object->getTweets() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'tweets'} = $values_1;
        }
        if (null !== $object->getPlaces()) {
            $values_2 = array();
            foreach ($object->getPlaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'places'} = $values_2;
        }
        if (null !== $object->getMedia()) {
            $values_3 = array();
            foreach ($object->getMedia() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'media'} = $values_3;
        }
        if (null !== $object->getPolls()) {
            $values_4 = array();
            foreach ($object->getPolls() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'polls'} = $values_4;
        }
        return $data;
    }
}