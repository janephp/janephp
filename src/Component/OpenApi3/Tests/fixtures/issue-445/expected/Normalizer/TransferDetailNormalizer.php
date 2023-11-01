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
    class TransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\TransferDetail();
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
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('transferType', $data)) {
                $object->setTransferType($data['transferType']);
                unset($data['transferType']);
            }
            if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
                $object->setBusinessProcessId($data['businessProcessId']);
                unset($data['businessProcessId']);
            }
            elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
                $object->setBusinessProcessId(null);
            }
            if (\array_key_exists('fileTransferCount', $data)) {
                $object->setFileTransferCount($data['fileTransferCount']);
                unset($data['fileTransferCount']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
                unset($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            if (\array_key_exists('itemProgress', $data)) {
                $object->setItemProgress($data['itemProgress']);
                unset($data['itemProgress']);
            }
            if (\array_key_exists('itemCount', $data)) {
                $object->setItemCount($data['itemCount']);
                unset($data['itemCount']);
            }
            if (\array_key_exists('fileUploadInProgressCount', $data)) {
                $object->setFileUploadInProgressCount($data['fileUploadInProgressCount']);
                unset($data['fileUploadInProgressCount']);
            }
            if (\array_key_exists('dataExtractionInProgressCount', $data)) {
                $object->setDataExtractionInProgressCount($data['dataExtractionInProgressCount']);
                unset($data['dataExtractionInProgressCount']);
            }
            if (\array_key_exists('itemsFailed', $data)) {
                $object->setItemsFailed($data['itemsFailed']);
                unset($data['itemsFailed']);
            }
            if (\array_key_exists('itemsCancelled', $data)) {
                $object->setItemsCancelled($data['itemsCancelled']);
                unset($data['itemsCancelled']);
            }
            if (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] !== null) {
                $object->setLastDataExtractionProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastDataExtractionProgressTimeStamp']));
                unset($data['lastDataExtractionProgressTimeStamp']);
            }
            elseif (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] === null) {
                $object->setLastDataExtractionProgressTimeStamp(null);
            }
            if (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] !== null) {
                $object->setLastFileUploadProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastFileUploadProgressTimeStamp']));
                unset($data['lastFileUploadProgressTimeStamp']);
            }
            elseif (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] === null) {
                $object->setLastFileUploadProgressTimeStamp(null);
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('businessProcessId') && null !== $object->getBusinessProcessId()) {
                $data['businessProcessId'] = $object->getBusinessProcessId();
            }
            $data['fileTransferCount'] = $object->getFileTransferCount();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('itemProgress') && null !== $object->getItemProgress()) {
                $data['itemProgress'] = $object->getItemProgress();
            }
            if ($object->isInitialized('itemCount') && null !== $object->getItemCount()) {
                $data['itemCount'] = $object->getItemCount();
            }
            if ($object->isInitialized('fileUploadInProgressCount') && null !== $object->getFileUploadInProgressCount()) {
                $data['fileUploadInProgressCount'] = $object->getFileUploadInProgressCount();
            }
            if ($object->isInitialized('dataExtractionInProgressCount') && null !== $object->getDataExtractionInProgressCount()) {
                $data['dataExtractionInProgressCount'] = $object->getDataExtractionInProgressCount();
            }
            if ($object->isInitialized('itemsFailed') && null !== $object->getItemsFailed()) {
                $data['itemsFailed'] = $object->getItemsFailed();
            }
            if ($object->isInitialized('itemsCancelled') && null !== $object->getItemsCancelled()) {
                $data['itemsCancelled'] = $object->getItemsCancelled();
            }
            if ($object->isInitialized('lastDataExtractionProgressTimeStamp') && null !== $object->getLastDataExtractionProgressTimeStamp()) {
                $data['lastDataExtractionProgressTimeStamp'] = $object->getLastDataExtractionProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('lastFileUploadProgressTimeStamp') && null !== $object->getLastFileUploadProgressTimeStamp()) {
                $data['lastFileUploadProgressTimeStamp'] = $object->getLastFileUploadProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
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
            return ['PicturePark\\API\\Model\\TransferDetail' => false];
        }
    }
} else {
    class TransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\TransferDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferDetail';
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
            $object = new \PicturePark\API\Model\TransferDetail();
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
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('transferType', $data)) {
                $object->setTransferType($data['transferType']);
                unset($data['transferType']);
            }
            if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
                $object->setBusinessProcessId($data['businessProcessId']);
                unset($data['businessProcessId']);
            }
            elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
                $object->setBusinessProcessId(null);
            }
            if (\array_key_exists('fileTransferCount', $data)) {
                $object->setFileTransferCount($data['fileTransferCount']);
                unset($data['fileTransferCount']);
            }
            if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
                $object->setCollectionId($data['collectionId']);
                unset($data['collectionId']);
            }
            elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
                $object->setCollectionId(null);
            }
            if (\array_key_exists('audit', $data)) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            if (\array_key_exists('itemProgress', $data)) {
                $object->setItemProgress($data['itemProgress']);
                unset($data['itemProgress']);
            }
            if (\array_key_exists('itemCount', $data)) {
                $object->setItemCount($data['itemCount']);
                unset($data['itemCount']);
            }
            if (\array_key_exists('fileUploadInProgressCount', $data)) {
                $object->setFileUploadInProgressCount($data['fileUploadInProgressCount']);
                unset($data['fileUploadInProgressCount']);
            }
            if (\array_key_exists('dataExtractionInProgressCount', $data)) {
                $object->setDataExtractionInProgressCount($data['dataExtractionInProgressCount']);
                unset($data['dataExtractionInProgressCount']);
            }
            if (\array_key_exists('itemsFailed', $data)) {
                $object->setItemsFailed($data['itemsFailed']);
                unset($data['itemsFailed']);
            }
            if (\array_key_exists('itemsCancelled', $data)) {
                $object->setItemsCancelled($data['itemsCancelled']);
                unset($data['itemsCancelled']);
            }
            if (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] !== null) {
                $object->setLastDataExtractionProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastDataExtractionProgressTimeStamp']));
                unset($data['lastDataExtractionProgressTimeStamp']);
            }
            elseif (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] === null) {
                $object->setLastDataExtractionProgressTimeStamp(null);
            }
            if (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] !== null) {
                $object->setLastFileUploadProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastFileUploadProgressTimeStamp']));
                unset($data['lastFileUploadProgressTimeStamp']);
            }
            elseif (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] === null) {
                $object->setLastFileUploadProgressTimeStamp(null);
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['state'] = $object->getState();
            $data['transferType'] = $object->getTransferType();
            if ($object->isInitialized('businessProcessId') && null !== $object->getBusinessProcessId()) {
                $data['businessProcessId'] = $object->getBusinessProcessId();
            }
            $data['fileTransferCount'] = $object->getFileTransferCount();
            if ($object->isInitialized('collectionId') && null !== $object->getCollectionId()) {
                $data['collectionId'] = $object->getCollectionId();
            }
            $data['audit'] = $object->getAudit();
            if ($object->isInitialized('itemProgress') && null !== $object->getItemProgress()) {
                $data['itemProgress'] = $object->getItemProgress();
            }
            if ($object->isInitialized('itemCount') && null !== $object->getItemCount()) {
                $data['itemCount'] = $object->getItemCount();
            }
            if ($object->isInitialized('fileUploadInProgressCount') && null !== $object->getFileUploadInProgressCount()) {
                $data['fileUploadInProgressCount'] = $object->getFileUploadInProgressCount();
            }
            if ($object->isInitialized('dataExtractionInProgressCount') && null !== $object->getDataExtractionInProgressCount()) {
                $data['dataExtractionInProgressCount'] = $object->getDataExtractionInProgressCount();
            }
            if ($object->isInitialized('itemsFailed') && null !== $object->getItemsFailed()) {
                $data['itemsFailed'] = $object->getItemsFailed();
            }
            if ($object->isInitialized('itemsCancelled') && null !== $object->getItemsCancelled()) {
                $data['itemsCancelled'] = $object->getItemsCancelled();
            }
            if ($object->isInitialized('lastDataExtractionProgressTimeStamp') && null !== $object->getLastDataExtractionProgressTimeStamp()) {
                $data['lastDataExtractionProgressTimeStamp'] = $object->getLastDataExtractionProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
            }
            if ($object->isInitialized('lastFileUploadProgressTimeStamp') && null !== $object->getLastFileUploadProgressTimeStamp()) {
                $data['lastFileUploadProgressTimeStamp'] = $object->getLastFileUploadProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
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
            return ['PicturePark\\API\\Model\\TransferDetail' => false];
        }
    }
}