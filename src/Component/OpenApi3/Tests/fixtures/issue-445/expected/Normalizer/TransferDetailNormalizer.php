<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\TransferDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\TransferDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\TransferDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
            unset($data['businessProcessId']);
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
            unset($data['collectionId']);
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
            $object->setLastDataExtractionProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastDataExtractionProgressTimeStamp']));
            unset($data['lastDataExtractionProgressTimeStamp']);
        }
        elseif (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] === null) {
            $object->setLastDataExtractionProgressTimeStamp(null);
            unset($data['lastDataExtractionProgressTimeStamp']);
        }
        if (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] !== null) {
            $object->setLastFileUploadProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastFileUploadProgressTimeStamp']));
            unset($data['lastFileUploadProgressTimeStamp']);
        }
        elseif (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] === null) {
            $object->setLastFileUploadProgressTimeStamp(null);
            unset($data['lastFileUploadProgressTimeStamp']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        $dataArray['state'] = $data->getState();
        $dataArray['transferType'] = $data->getTransferType();
        if ($data->isInitialized('businessProcessId') && null !== $data->getBusinessProcessId()) {
            $dataArray['businessProcessId'] = $data->getBusinessProcessId();
        }
        $dataArray['fileTransferCount'] = $data->getFileTransferCount();
        if ($data->isInitialized('collectionId') && null !== $data->getCollectionId()) {
            $dataArray['collectionId'] = $data->getCollectionId();
        }
        $dataArray['audit'] = $data->getAudit();
        if ($data->isInitialized('itemProgress') && null !== $data->getItemProgress()) {
            $dataArray['itemProgress'] = $data->getItemProgress();
        }
        if ($data->isInitialized('itemCount') && null !== $data->getItemCount()) {
            $dataArray['itemCount'] = $data->getItemCount();
        }
        if ($data->isInitialized('fileUploadInProgressCount') && null !== $data->getFileUploadInProgressCount()) {
            $dataArray['fileUploadInProgressCount'] = $data->getFileUploadInProgressCount();
        }
        if ($data->isInitialized('dataExtractionInProgressCount') && null !== $data->getDataExtractionInProgressCount()) {
            $dataArray['dataExtractionInProgressCount'] = $data->getDataExtractionInProgressCount();
        }
        if ($data->isInitialized('itemsFailed') && null !== $data->getItemsFailed()) {
            $dataArray['itemsFailed'] = $data->getItemsFailed();
        }
        if ($data->isInitialized('itemsCancelled') && null !== $data->getItemsCancelled()) {
            $dataArray['itemsCancelled'] = $data->getItemsCancelled();
        }
        if ($data->isInitialized('lastDataExtractionProgressTimeStamp') && null !== $data->getLastDataExtractionProgressTimeStamp()) {
            $dataArray['lastDataExtractionProgressTimeStamp'] = $data->getLastDataExtractionProgressTimeStamp()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('lastFileUploadProgressTimeStamp') && null !== $data->getLastFileUploadProgressTimeStamp()) {
            $dataArray['lastFileUploadProgressTimeStamp'] = $data->getLastFileUploadProgressTimeStamp()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TransferDetail::class => false];
    }
}