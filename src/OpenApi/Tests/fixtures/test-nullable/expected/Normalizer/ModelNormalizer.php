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
class ModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\Model';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\Model();
        if (property_exists($data, 'foo') && $data->{'foo'} !== null) {
            $object->setFoo($data->{'foo'});
        }
        elseif (property_exists($data, 'foo') && $data->{'foo'} === null) {
            $object->setFoo(null);
        }
        if (property_exists($data, 'bar')) {
            $object->setBar($data->{'bar'});
        }
        if (property_exists($data, 'date') && $data->{'date'} !== null) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'date'}));
        }
        elseif (property_exists($data, 'date') && $data->{'date'} === null) {
            $object->setDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        $data->{'foo'} = $object->getFoo();
        if (null !== $object->getBar()) {
            $data->{'bar'} = $object->getBar();
        }
        if (null !== $object->getDate()) {
            $data->{'date'} = $object->getDate()->format('Y-m-d\\TH:i:sP');
        }
        else {
            $data->{'date'} = null;
        }
        return $data;
    }
}