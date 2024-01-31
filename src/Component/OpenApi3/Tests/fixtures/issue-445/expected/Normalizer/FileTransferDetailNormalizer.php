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
    class FileTransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FileTransferDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FileTransferDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\FileTransferDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
                $object->setIdentifier($data['identifier']);
                unset($data['identifier']);
            }
            elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
                $object->setIdentifier(null);
            }
            if (\array_key_exists('requestId', $data)) {
                $object->setRequestId($data['requestId']);
                unset($data['requestId']);
            }
            if (\array_key_exists('transferId', $data)) {
                $object->setTransferId($data['transferId']);
                unset($data['transferId']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            if (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] !== null) {
                $object->setFileMetadata($data['fileMetadata']);
                unset($data['fileMetadata']);
            }
            elseif (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] === null) {
                $object->setFileMetadata(null);
            }
            if (\array_key_exists('outputItems', $data) && $data['outputItems'] !== null) {
                $values = [];
                foreach ($data['outputItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\FileTransferOutput', 'json', $context);
                }
                $object->setOutputItems($values);
                unset($data['outputItems']);
            }
            elseif (\array_key_exists('outputItems', $data) && $data['outputItems'] === null) {
                $object->setOutputItems(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            $data['requestId'] = $object->getRequestId();
            $data['transferId'] = $object->getTransferId();
            $data['state'] = $object->getState();
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('fileMetadata') && null !== $object->getFileMetadata()) {
                $data['fileMetadata'] = $object->getFileMetadata();
            }
            if ($object->isInitialized('outputItems') && null !== $object->getOutputItems()) {
                $values = [];
                foreach ($object->getOutputItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['outputItems'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FileTransferDetail' => false];
        }
    }
} else {
    class FileTransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\FileTransferDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\FileTransferDetail';
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
            $object = new \PicturePark\API\Model\FileTransferDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
                $object->setIdentifier($data['identifier']);
                unset($data['identifier']);
            }
            elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
                $object->setIdentifier(null);
            }
            if (\array_key_exists('requestId', $data)) {
                $object->setRequestId($data['requestId']);
                unset($data['requestId']);
            }
            if (\array_key_exists('transferId', $data)) {
                $object->setTransferId($data['transferId']);
                unset($data['transferId']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
                $object->setContentId($data['contentId']);
                unset($data['contentId']);
            }
            elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
                $object->setContentId(null);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            if (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] !== null) {
                $object->setFileMetadata($data['fileMetadata']);
                unset($data['fileMetadata']);
            }
            elseif (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] === null) {
                $object->setFileMetadata(null);
            }
            if (\array_key_exists('outputItems', $data) && $data['outputItems'] !== null) {
                $values = [];
                foreach ($data['outputItems'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\FileTransferOutput', 'json', $context);
                }
                $object->setOutputItems($values);
                unset($data['outputItems']);
            }
            elseif (\array_key_exists('outputItems', $data) && $data['outputItems'] === null) {
                $object->setOutputItems(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            if ($object->isInitialized('identifier') && null !== $object->getIdentifier()) {
                $data['identifier'] = $object->getIdentifier();
            }
            $data['requestId'] = $object->getRequestId();
            $data['transferId'] = $object->getTransferId();
            $data['state'] = $object->getState();
            if ($object->isInitialized('contentId') && null !== $object->getContentId()) {
                $data['contentId'] = $object->getContentId();
            }
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('fileMetadata') && null !== $object->getFileMetadata()) {
                $data['fileMetadata'] = $object->getFileMetadata();
            }
            if ($object->isInitialized('outputItems') && null !== $object->getOutputItems()) {
                $values = [];
                foreach ($object->getOutputItems() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['outputItems'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\FileTransferDetail' => false];
        }
    }
}