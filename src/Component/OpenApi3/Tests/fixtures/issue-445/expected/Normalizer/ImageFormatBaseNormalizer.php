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
class ImageFormatBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ImageFormatBase';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ImageFormatBase';
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
        $object = new \PicturePark\API\Model\ImageFormatBase();
        if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
            $data['horizontalResolution'] = (double) $data['horizontalResolution'];
        }
        if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
            $data['verticalResolution'] = (double) $data['verticalResolution'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
            $object->setColorProfile($data['colorProfile']);
        }
        elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
            $object->setColorProfile(null);
        }
        if (\array_key_exists('colorTransformationIntent', $data)) {
            $object->setColorTransformationIntent($data['colorTransformationIntent']);
        }
        if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
            $object->setHorizontalResolution($data['horizontalResolution']);
        }
        elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
            $object->setHorizontalResolution(null);
        }
        if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
            $object->setVerticalResolution($data['verticalResolution']);
        }
        elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
            $object->setVerticalResolution(null);
        }
        if (\array_key_exists('keepClippingPath', $data)) {
            $object->setKeepClippingPath($data['keepClippingPath']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $object->setResizeAction($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->setResizeAction(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values = array();
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\ImageActionBase', 'json', $context);
            }
            $object->setActions($values);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        if (null !== $object->getColorProfile()) {
            $data['colorProfile'] = $object->getColorProfile();
        }
        if (null !== $object->getColorTransformationIntent()) {
            $data['colorTransformationIntent'] = $object->getColorTransformationIntent();
        }
        if (null !== $object->getHorizontalResolution()) {
            $data['horizontalResolution'] = $object->getHorizontalResolution();
        }
        if (null !== $object->getVerticalResolution()) {
            $data['verticalResolution'] = $object->getVerticalResolution();
        }
        if (null !== $object->getKeepClippingPath()) {
            $data['keepClippingPath'] = $object->getKeepClippingPath();
        }
        if (null !== $object->getResizeAction()) {
            $data['resizeAction'] = $object->getResizeAction();
        }
        if (null !== $object->getActions()) {
            $values = array();
            foreach ($object->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['actions'] = $values;
        }
        return $data;
    }
}