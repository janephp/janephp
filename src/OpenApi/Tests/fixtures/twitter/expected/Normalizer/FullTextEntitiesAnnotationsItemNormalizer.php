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
class FullTextEntitiesAnnotationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\FullTextEntitiesAnnotationsItem();
        if (property_exists($data, 'start')) {
            $object->setStart($data->{'start'});
        }
        if (property_exists($data, 'end')) {
            $object->setEnd($data->{'end'});
        }
        if (property_exists($data, 'probability')) {
            $object->setProbability($data->{'probability'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'normalized_text')) {
            $object->setNormalizedText($data->{'normalized_text'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStart()) {
            $data->{'start'} = $object->getStart();
        }
        if (null !== $object->getEnd()) {
            $data->{'end'} = $object->getEnd();
        }
        if (null !== $object->getProbability()) {
            $data->{'probability'} = $object->getProbability();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getNormalizedText()) {
            $data->{'normalized_text'} = $object->getNormalizedText();
        }
        return $data;
    }
}