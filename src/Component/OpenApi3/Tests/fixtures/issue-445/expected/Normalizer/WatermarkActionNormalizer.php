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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class WatermarkActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\WatermarkAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\WatermarkAction';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
                unset($data['kind']);
            }
            if (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] !== null) {
                $object->setWatermarkFilePath($data['watermarkFilePath']);
                unset($data['watermarkFilePath']);
            }
            elseif (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] === null) {
                $object->setWatermarkFilePath(null);
            }
            if (\array_key_exists('marginLeft', $data) && $data['marginLeft'] !== null) {
                $object->setMarginLeft($data['marginLeft']);
                unset($data['marginLeft']);
            }
            elseif (\array_key_exists('marginLeft', $data) && $data['marginLeft'] === null) {
                $object->setMarginLeft(null);
            }
            if (\array_key_exists('marginTop', $data) && $data['marginTop'] !== null) {
                $object->setMarginTop($data['marginTop']);
                unset($data['marginTop']);
            }
            elseif (\array_key_exists('marginTop', $data) && $data['marginTop'] === null) {
                $object->setMarginTop(null);
            }
            if (\array_key_exists('marginRight', $data) && $data['marginRight'] !== null) {
                $object->setMarginRight($data['marginRight']);
                unset($data['marginRight']);
            }
            elseif (\array_key_exists('marginRight', $data) && $data['marginRight'] === null) {
                $object->setMarginRight(null);
            }
            if (\array_key_exists('marginBottom', $data) && $data['marginBottom'] !== null) {
                $object->setMarginBottom($data['marginBottom']);
                unset($data['marginBottom']);
            }
            elseif (\array_key_exists('marginBottom', $data) && $data['marginBottom'] === null) {
                $object->setMarginBottom(null);
            }
            if (\array_key_exists('opacity', $data)) {
                $object->setOpacity($data['opacity']);
                unset($data['opacity']);
            }
            if (\array_key_exists('widthRatio', $data)) {
                $object->setWidthRatio($data['widthRatio']);
                unset($data['widthRatio']);
            }
            if (\array_key_exists('heightRatio', $data)) {
                $object->setHeightRatio($data['heightRatio']);
                unset($data['heightRatio']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('watermarkFilePath') && null !== $object->getWatermarkFilePath()) {
                $data['watermarkFilePath'] = $object->getWatermarkFilePath();
            }
            if ($object->isInitialized('marginLeft') && null !== $object->getMarginLeft()) {
                $data['marginLeft'] = $object->getMarginLeft();
            }
            if ($object->isInitialized('marginTop') && null !== $object->getMarginTop()) {
                $data['marginTop'] = $object->getMarginTop();
            }
            if ($object->isInitialized('marginRight') && null !== $object->getMarginRight()) {
                $data['marginRight'] = $object->getMarginRight();
            }
            if ($object->isInitialized('marginBottom') && null !== $object->getMarginBottom()) {
                $data['marginBottom'] = $object->getMarginBottom();
            }
            if ($object->isInitialized('opacity') && null !== $object->getOpacity()) {
                $data['opacity'] = $object->getOpacity();
            }
            if ($object->isInitialized('widthRatio') && null !== $object->getWidthRatio()) {
                $data['widthRatio'] = $object->getWidthRatio();
            }
            if ($object->isInitialized('heightRatio') && null !== $object->getHeightRatio()) {
                $data['heightRatio'] = $object->getHeightRatio();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\WatermarkAction' => false];
        }
    }
} else {
    class WatermarkActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\WatermarkAction';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\WatermarkAction';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
                unset($data['kind']);
            }
            if (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] !== null) {
                $object->setWatermarkFilePath($data['watermarkFilePath']);
                unset($data['watermarkFilePath']);
            }
            elseif (\array_key_exists('watermarkFilePath', $data) && $data['watermarkFilePath'] === null) {
                $object->setWatermarkFilePath(null);
            }
            if (\array_key_exists('marginLeft', $data) && $data['marginLeft'] !== null) {
                $object->setMarginLeft($data['marginLeft']);
                unset($data['marginLeft']);
            }
            elseif (\array_key_exists('marginLeft', $data) && $data['marginLeft'] === null) {
                $object->setMarginLeft(null);
            }
            if (\array_key_exists('marginTop', $data) && $data['marginTop'] !== null) {
                $object->setMarginTop($data['marginTop']);
                unset($data['marginTop']);
            }
            elseif (\array_key_exists('marginTop', $data) && $data['marginTop'] === null) {
                $object->setMarginTop(null);
            }
            if (\array_key_exists('marginRight', $data) && $data['marginRight'] !== null) {
                $object->setMarginRight($data['marginRight']);
                unset($data['marginRight']);
            }
            elseif (\array_key_exists('marginRight', $data) && $data['marginRight'] === null) {
                $object->setMarginRight(null);
            }
            if (\array_key_exists('marginBottom', $data) && $data['marginBottom'] !== null) {
                $object->setMarginBottom($data['marginBottom']);
                unset($data['marginBottom']);
            }
            elseif (\array_key_exists('marginBottom', $data) && $data['marginBottom'] === null) {
                $object->setMarginBottom(null);
            }
            if (\array_key_exists('opacity', $data)) {
                $object->setOpacity($data['opacity']);
                unset($data['opacity']);
            }
            if (\array_key_exists('widthRatio', $data)) {
                $object->setWidthRatio($data['widthRatio']);
                unset($data['widthRatio']);
            }
            if (\array_key_exists('heightRatio', $data)) {
                $object->setHeightRatio($data['heightRatio']);
                unset($data['heightRatio']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('watermarkFilePath') && null !== $object->getWatermarkFilePath()) {
                $data['watermarkFilePath'] = $object->getWatermarkFilePath();
            }
            if ($object->isInitialized('marginLeft') && null !== $object->getMarginLeft()) {
                $data['marginLeft'] = $object->getMarginLeft();
            }
            if ($object->isInitialized('marginTop') && null !== $object->getMarginTop()) {
                $data['marginTop'] = $object->getMarginTop();
            }
            if ($object->isInitialized('marginRight') && null !== $object->getMarginRight()) {
                $data['marginRight'] = $object->getMarginRight();
            }
            if ($object->isInitialized('marginBottom') && null !== $object->getMarginBottom()) {
                $data['marginBottom'] = $object->getMarginBottom();
            }
            if ($object->isInitialized('opacity') && null !== $object->getOpacity()) {
                $data['opacity'] = $object->getOpacity();
            }
            if ($object->isInitialized('widthRatio') && null !== $object->getWidthRatio()) {
                $data['widthRatio'] = $object->getWidthRatio();
            }
            if ($object->isInitialized('heightRatio') && null !== $object->getHeightRatio()) {
                $data['heightRatio'] = $object->getHeightRatio();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\WatermarkAction' => false];
        }
    }
}