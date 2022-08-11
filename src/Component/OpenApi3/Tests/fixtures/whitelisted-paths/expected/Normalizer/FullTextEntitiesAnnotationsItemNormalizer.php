<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
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
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\FullTextEntitiesAnnotationsItem';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\FullTextEntitiesAnnotationsItem();
        if (\array_key_exists('probability', $data) && \is_int($data['probability'])) {
            $data['probability'] = (double) $data['probability'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('start', $data)) {
            $object->setStart($data['start']);
        }
        if (\array_key_exists('end', $data)) {
            $object->setEnd($data['end']);
        }
        if (\array_key_exists('probability', $data)) {
            $object->setProbability($data['probability']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('normalized_text', $data)) {
            $object->setNormalizedText($data['normalized_text']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['start'] = $object->getStart();
        $data['end'] = $object->getEnd();
        if (null !== $object->getProbability()) {
            $data['probability'] = $object->getProbability();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getNormalizedText()) {
            $data['normalized_text'] = $object->getNormalizedText();
        }
        return $data;
    }
}