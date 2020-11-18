<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VideoSpriteFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\VideoSpriteFormat';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\VideoSpriteFormat';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\VideoSpriteFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] !== null) {
            $object->setSpriteResizeAction($data['spriteResizeAction']);
        }
        elseif (\array_key_exists('spriteResizeAction', $data) && $data['spriteResizeAction'] === null) {
            $object->setSpriteResizeAction(null);
        }
        if (\array_key_exists('maxNumberOfSprites', $data)) {
            $object->setMaxNumberOfSprites($data['maxNumberOfSprites']);
        }
        if (\array_key_exists('quality', $data)) {
            $object->setQuality($data['quality']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        if (null !== $object->getSpriteResizeAction()) {
            $data['spriteResizeAction'] = $object->getSpriteResizeAction();
        }
        if (null !== $object->getMaxNumberOfSprites()) {
            $data['maxNumberOfSprites'] = $object->getMaxNumberOfSprites();
        }
        if (null !== $object->getQuality()) {
            $data['quality'] = $object->getQuality();
        }
        if (null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        return $data;
    }
}