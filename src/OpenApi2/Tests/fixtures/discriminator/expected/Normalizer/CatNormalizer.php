<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, string $type, string $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Cat';
    }
    public function supportsNormalization($data, string $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\Cat';
    }
    public function denormalize($data, $class, string $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\Cat();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'petType')) {
            $object->setPetType($data->{'petType'});
        }
        if (property_exists($data, 'huntingSkill')) {
            $object->setHuntingSkill($data->{'huntingSkill'});
        }
        return $object;
    }
    public function normalize($object, string $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPetType()) {
            $data->{'petType'} = $object->getPetType();
        }
        if (null !== $object->getHuntingSkill()) {
            $data->{'huntingSkill'} = $object->getHuntingSkill();
        }
        return $data;
    }
}