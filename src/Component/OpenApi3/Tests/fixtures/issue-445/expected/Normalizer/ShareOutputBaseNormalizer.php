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
    class ShareOutputBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareOutputBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareOutputBase';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (array_key_exists('kind', $data) and 'ShareOutputBasic' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareOutputBasic', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'ShareOutputEmbed' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareOutputEmbed', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ShareOutputBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
            }
            if (\array_key_exists('outputFormatId', $data)) {
                $object->setOutputFormatId($data['outputFormatId']);
            }
            if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
                $object->setViewUrl($data['viewUrl']);
            }
            elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
                $object->setViewUrl(null);
            }
            if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
                $object->setDownloadUrl($data['downloadUrl']);
            }
            elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
                $object->setDownloadUrl(null);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('dynamicRendering', $data)) {
                $object->setDynamicRendering($data['dynamicRendering']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if (null !== $object->getKind() and 'ShareOutputBasic' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'ShareOutputEmbed' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['contentId'] = $object->getContentId();
            $data['outputFormatId'] = $object->getOutputFormatId();
            if ($object->isInitialized('viewUrl') && null !== $object->getViewUrl()) {
                $data['viewUrl'] = $object->getViewUrl();
            }
            if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
                $data['downloadUrl'] = $object->getDownloadUrl();
            }
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            $data['dynamicRendering'] = $object->getDynamicRendering();
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareOutputBase' => false];
        }
    }
} else {
    class ShareOutputBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareOutputBase';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareOutputBase';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (array_key_exists('kind', $data) and 'ShareOutputBasic' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareOutputBasic', $format, $context);
            }
            if (array_key_exists('kind', $data) and 'ShareOutputEmbed' === $data['kind']) {
                return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\ShareOutputEmbed', $format, $context);
            }
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ShareOutputBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentId', $data)) {
                $object->setContentId($data['contentId']);
            }
            if (\array_key_exists('outputFormatId', $data)) {
                $object->setOutputFormatId($data['outputFormatId']);
            }
            if (\array_key_exists('viewUrl', $data) && $data['viewUrl'] !== null) {
                $object->setViewUrl($data['viewUrl']);
            }
            elseif (\array_key_exists('viewUrl', $data) && $data['viewUrl'] === null) {
                $object->setViewUrl(null);
            }
            if (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] !== null) {
                $object->setDownloadUrl($data['downloadUrl']);
            }
            elseif (\array_key_exists('downloadUrl', $data) && $data['downloadUrl'] === null) {
                $object->setDownloadUrl(null);
            }
            if (\array_key_exists('detail', $data) && $data['detail'] !== null) {
                $object->setDetail($data['detail']);
            }
            elseif (\array_key_exists('detail', $data) && $data['detail'] === null) {
                $object->setDetail(null);
            }
            if (\array_key_exists('dynamicRendering', $data)) {
                $object->setDynamicRendering($data['dynamicRendering']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if (null !== $object->getKind() and 'ShareOutputBasic' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            if (null !== $object->getKind() and 'ShareOutputEmbed' === $object->getKind()) {
                return $this->normalizer->normalize($object, $format, $context);
            }
            $data['contentId'] = $object->getContentId();
            $data['outputFormatId'] = $object->getOutputFormatId();
            if ($object->isInitialized('viewUrl') && null !== $object->getViewUrl()) {
                $data['viewUrl'] = $object->getViewUrl();
            }
            if ($object->isInitialized('downloadUrl') && null !== $object->getDownloadUrl()) {
                $data['downloadUrl'] = $object->getDownloadUrl();
            }
            if ($object->isInitialized('detail') && null !== $object->getDetail()) {
                $data['detail'] = $object->getDetail();
            }
            $data['dynamicRendering'] = $object->getDynamicRendering();
            $data['kind'] = $object->getKind();
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareOutputBase' => false];
        }
    }
}