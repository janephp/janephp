<?php

namespace Jane\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Expansions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Expansions';
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
        $object = new \Jane\OpenApi3\Tests\Expected\Model\Expansions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('users', $data)) {
            $values = array();
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('tweets', $data)) {
            $values_1 = array();
            foreach ($data['tweets'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTweets($values_1);
            unset($data['tweets']);
        }
        if (\array_key_exists('places', $data)) {
            $values_2 = array();
            foreach ($data['places'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPlaces($values_2);
            unset($data['places']);
        }
        if (\array_key_exists('media', $data)) {
            $values_3 = array();
            foreach ($data['media'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setMedia($values_3);
            unset($data['media']);
        }
        if (\array_key_exists('polls', $data)) {
            $values_4 = array();
            foreach ($data['polls'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi3\\Tests\\Expected\\Model\\Poll', 'json', $context);
            }
            $object->setPolls($values_4);
            unset($data['polls']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if ($object->isInitialized('users') && null !== $object->getUsers()) {
            $values = array();
            foreach ($object->getUsers() as $value) {
                $values[] = $value;
            }
            $data['users'] = $values;
        }
        if ($object->isInitialized('tweets') && null !== $object->getTweets()) {
            $values_1 = array();
            foreach ($object->getTweets() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tweets'] = $values_1;
        }
        if ($object->isInitialized('places') && null !== $object->getPlaces()) {
            $values_2 = array();
            foreach ($object->getPlaces() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['places'] = $values_2;
        }
        if ($object->isInitialized('media') && null !== $object->getMedia()) {
            $values_3 = array();
            foreach ($object->getMedia() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['media'] = $values_3;
        }
        if ($object->isInitialized('polls') && null !== $object->getPolls()) {
            $values_4 = array();
            foreach ($object->getPolls() as $value_4) {
                $values_4[] = $value_4 == null ? null : new \ArrayObject($this->normalizer->normalize($value_4, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
            }
            $data['polls'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Jane\\OpenApi3\\Tests\\Expected\\Model\\Expansions' => false);
    }
}