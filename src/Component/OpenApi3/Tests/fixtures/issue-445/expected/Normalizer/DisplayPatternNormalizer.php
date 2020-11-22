<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DisplayPatternNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\DisplayPattern';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DisplayPattern';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\DisplayPattern();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('templateEngine', $data)) {
            $object->setTemplateEngine($data['templateEngine']);
        }
        if (\array_key_exists('displayPatternType', $data)) {
            $object->setDisplayPatternType($data['displayPatternType']);
        }
        if (\array_key_exists('templates', $data) && $data['templates'] !== null) {
            $object->setTemplates($data['templates']);
        }
        elseif (\array_key_exists('templates', $data) && $data['templates'] === null) {
            $object->setTemplates(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['templateEngine'] = $object->getTemplateEngine();
        $data['displayPatternType'] = $object->getDisplayPatternType();
        if (null !== $object->getTemplates()) {
            $data['templates'] = $object->getTemplates();
        }
        return $data;
    }
}