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
    class DownloadTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DownloadTrackingInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
                $object->setOutputFormatId($data['outputFormatId']);
            }
            elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
                $object->setOutputFormatId(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
            }
            elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
            }
            elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('contentDisposition', $data)) {
                $object->setContentDisposition($data['contentDisposition']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            if ($object->isInitialized('outputFormatId') && null !== $object->getOutputFormatId()) {
                $data['outputFormatId'] = $object->getOutputFormatId();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            $data['contentDisposition'] = $object->getContentDisposition();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DownloadTrackingInfo' => false];
        }
    }
} else {
    class DownloadTrackingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\DownloadTrackingInfo';
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
            $object = new \PicturePark\API\Model\DownloadTrackingInfo();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
                $object->setOutputFormatId($data['outputFormatId']);
            }
            elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
                $object->setOutputFormatId(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
            }
            elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
            }
            elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('contentDisposition', $data)) {
                $object->setContentDisposition($data['contentDisposition']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            if ($object->isInitialized('outputFormatId') && null !== $object->getOutputFormatId()) {
                $data['outputFormatId'] = $object->getOutputFormatId();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            $data['contentDisposition'] = $object->getContentDisposition();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\DownloadTrackingInfo' => false];
        }
    }
}