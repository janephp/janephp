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
class PetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Pet';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Pet';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        if (property_exists($data, 'petType') and 'cat_in_snake_case' === $data->{'petType'}) {
            return $this->denormalizer->denormalize($data, 'Jane\\OpenApi\\Tests\\Expected\\Model\\CatInSnakeCase', $format, $context);
        }
        if (property_exists($data, 'petType') and 'dog_in_snake_case' === $data->{'petType'}) {
            return $this->denormalizer->denormalize($data, 'Jane\\OpenApi\\Tests\\Expected\\Model\\DogInSnakeCase', $format, $context);
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Pet();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'petType')) {
            $object->setPetType($data->{'petType'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getPetType() and 'cat_in_snake_case' === $object->getPetType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getPetType() and 'dog_in_snake_case' === $object->getPetType()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPetType()) {
            $data->{'petType'} = $object->getPetType();
        }
        return $data;
    }
}