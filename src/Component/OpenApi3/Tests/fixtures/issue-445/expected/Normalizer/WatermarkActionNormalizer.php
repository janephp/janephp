<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WatermarkActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'PicturePark\\API\\Model\\WatermarkAction';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\WatermarkAction';
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
        $object = new \PicturePark\API\Model\WatermarkAction();
        if (\array_key_exists('opacity', $data) && \is_int($data['opacity'])) {
            $data['opacity'] = (double) $data['opacity'];
        }
        if (\array_key_exists('widthRatio', $data) && \is_int($data['widthRatio'])) {
            $data['widthRatio'] = (double) $data['widthRatio'];
        }
        if (\array_key_exists('heightRatio', $data) && \is_int($data['heightRatio'])) {
            $data['heightRatio'] = (double) $data['heightRatio'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] !== null) {
            $object->setWatermarkFilePath($data['watermarkFilePath']);
        }
        elseif (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] === null) {
            $object->setWatermarkFilePath(null);
        }
        if (\array_key_exists('marginLeft', $data) && $data['marginLeft'] !== null) {
            $object->setMarginLeft($data['marginLeft']);
        }
        elseif (\array_key_exists('marginLeft', $data) && $data['marginLeft'] === null) {
            $object->setMarginLeft(null);
        }
        if (\array_key_exists('marginTop', $data) && $data['marginTop'] !== null) {
            $object->setMarginTop($data['marginTop']);
        }
        elseif (\array_key_exists('marginTop', $data) && $data['marginTop'] === null) {
            $object->setMarginTop(null);
        }
        if (\array_key_exists('marginRight', $data) && $data['marginRight'] !== null) {
            $object->setMarginRight($data['marginRight']);
        }
        elseif (\array_key_exists('marginRight', $data) && $data['marginRight'] === null) {
            $object->setMarginRight(null);
        }
        if (\array_key_exists('marginBottom', $data) && $data['marginBottom'] !== null) {
            $object->setMarginBottom($data['marginBottom']);
        }
        elseif (\array_key_exists('marginBottom', $data) && $data['marginBottom'] === null) {
            $object->setMarginBottom(null);
        }
        if (\array_key_exists('opacity', $data)) {
            $object->setOpacity($data['opacity']);
        }
        if (\array_key_exists('widthRatio', $data)) {
            $object->setWidthRatio($data['widthRatio']);
        }
        if (\array_key_exists('heightRatio', $data)) {
            $object->setHeightRatio($data['heightRatio']);
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
        if (null !== $object->getWatermarkFilePath()) {
            $data['watermarkFilePath'] = $object->getWatermarkFilePath();
        }
        if (null !== $object->getMarginLeft()) {
            $data['marginLeft'] = $object->getMarginLeft();
        }
        if (null !== $object->getMarginTop()) {
            $data['marginTop'] = $object->getMarginTop();
        }
        if (null !== $object->getMarginRight()) {
            $data['marginRight'] = $object->getMarginRight();
        }
        if (null !== $object->getMarginBottom()) {
            $data['marginBottom'] = $object->getMarginBottom();
        }
        if (null !== $object->getOpacity()) {
            $data['opacity'] = $object->getOpacity();
        }
        if (null !== $object->getWidthRatio()) {
            $data['widthRatio'] = $object->getWidthRatio();
        }
        if (null !== $object->getHeightRatio()) {
            $data['heightRatio'] = $object->getHeightRatio();
        }
        return $data;
    }
}