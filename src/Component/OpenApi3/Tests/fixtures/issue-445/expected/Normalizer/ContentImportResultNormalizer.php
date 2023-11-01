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
    class ContentImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentImportResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ContentImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileTransferId', $data)) {
                $object->setFileTransferId($data['fileTransferId']);
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
            }
            elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('succeeded', $data)) {
                $object->setSucceeded($data['succeeded']);
            }
            if (\array_key_exists('error', $data) && $data['error'] !== null) {
                $object->setError($data['error']);
            }
            elseif (\array_key_exists('error', $data) && $data['error'] === null) {
                $object->setError(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['fileTransferId'] = $object->getFileTransferId();
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            $data['succeeded'] = $object->getSucceeded();
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentImportResult' => false];
        }
    }
} else {
    class ContentImportResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ContentImportResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentImportResult';
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
            $object = new \PicturePark\API\Model\ContentImportResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fileTransferId', $data)) {
                $object->setFileTransferId($data['fileTransferId']);
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
            }
            elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('succeeded', $data)) {
                $object->setSucceeded($data['succeeded']);
            }
            if (\array_key_exists('error', $data) && $data['error'] !== null) {
                $object->setError($data['error']);
            }
            elseif (\array_key_exists('error', $data) && $data['error'] === null) {
                $object->setError(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['fileTransferId'] = $object->getFileTransferId();
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            $data['succeeded'] = $object->getSucceeded();
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ContentImportResult' => false];
        }
    }
}