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
    class OutputFormatRenderPreviewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\OutputFormatRenderPreviewRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('outputFormat', $data) && $data['outputFormat'] !== null) {
                $object->setOutputFormat($data['outputFormat']);
            }
            elseif (\array_key_exists('outputFormat', $data) && $data['outputFormat'] === null) {
                $object->setOutputFormat(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            if ($object->isInitialized('outputFormat') && null !== $object->getOutputFormat()) {
                $data['outputFormat'] = $object->getOutputFormat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest' => false];
        }
    }
} else {
    class OutputFormatRenderPreviewRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest';
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
            $object = new \PicturePark\API\Model\OutputFormatRenderPreviewRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('outputFormat', $data) && $data['outputFormat'] !== null) {
                $object->setOutputFormat($data['outputFormat']);
            }
            elseif (\array_key_exists('outputFormat', $data) && $data['outputFormat'] === null) {
                $object->setOutputFormat(null);
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
            if ($object->isInitialized('outputFormat') && null !== $object->getOutputFormat()) {
                $data['outputFormat'] = $object->getOutputFormat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\OutputFormatRenderPreviewRequest' => false];
        }
    }
}