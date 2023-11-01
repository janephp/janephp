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
    class SpriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Sprite';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Sprite';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\Sprite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('width', $data)) {
                $object->setWidth($data['width']);
            }
            if (\array_key_exists('height', $data)) {
                $object->setHeight($data['height']);
            }
            if (\array_key_exists('y', $data)) {
                $object->setY($data['y']);
            }
            if (\array_key_exists('x', $data)) {
                $object->setX($data['x']);
            }
            if (\array_key_exists('start', $data)) {
                $object->setStart($data['start']);
            }
            if (\array_key_exists('end', $data)) {
                $object->setEnd($data['end']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['width'] = $object->getWidth();
            $data['height'] = $object->getHeight();
            $data['y'] = $object->getY();
            $data['x'] = $object->getX();
            $data['start'] = $object->getStart();
            $data['end'] = $object->getEnd();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Sprite' => false];
        }
    }
} else {
    class SpriteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Sprite';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Sprite';
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
            $object = new \PicturePark\API\Model\Sprite();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('width', $data)) {
                $object->setWidth($data['width']);
            }
            if (\array_key_exists('height', $data)) {
                $object->setHeight($data['height']);
            }
            if (\array_key_exists('y', $data)) {
                $object->setY($data['y']);
            }
            if (\array_key_exists('x', $data)) {
                $object->setX($data['x']);
            }
            if (\array_key_exists('start', $data)) {
                $object->setStart($data['start']);
            }
            if (\array_key_exists('end', $data)) {
                $object->setEnd($data['end']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['width'] = $object->getWidth();
            $data['height'] = $object->getHeight();
            $data['y'] = $object->getY();
            $data['x'] = $object->getX();
            $data['start'] = $object->getStart();
            $data['end'] = $object->getEnd();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Sprite' => false];
        }
    }
}