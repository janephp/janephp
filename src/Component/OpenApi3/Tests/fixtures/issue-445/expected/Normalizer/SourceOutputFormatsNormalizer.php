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
class SourceOutputFormatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\SourceOutputFormats';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\SourceOutputFormats';
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
        $object = new \PicturePark\API\Model\SourceOutputFormats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $object->setImage($data['image']);
        }
        elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('video', $data) && $data['video'] !== null) {
            $object->setVideo($data['video']);
        }
        elseif (\array_key_exists('video', $data) && $data['video'] === null) {
            $object->setVideo(null);
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->setDocument($data['document']);
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->setDocument(null);
        }
        if (\array_key_exists('audio', $data) && $data['audio'] !== null) {
            $object->setAudio($data['audio']);
        }
        elseif (\array_key_exists('audio', $data) && $data['audio'] === null) {
            $object->setAudio(null);
        }
        if (\array_key_exists('vector', $data) && $data['vector'] !== null) {
            $object->setVector($data['vector']);
        }
        elseif (\array_key_exists('vector', $data) && $data['vector'] === null) {
            $object->setVector(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if (null !== $object->getVideo()) {
            $data['video'] = $object->getVideo();
        }
        if (null !== $object->getDocument()) {
            $data['document'] = $object->getDocument();
        }
        if (null !== $object->getAudio()) {
            $data['audio'] = $object->getAudio();
        }
        if (null !== $object->getVector()) {
            $data['vector'] = $object->getVector();
        }
        return $data;
    }
}