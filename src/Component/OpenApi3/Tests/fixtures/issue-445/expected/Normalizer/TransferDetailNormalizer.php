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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $value = $data['state'];
            if (is_string($data['state'])) {
                $value = $data['state'];
            }
            $object->state = $value;
            unset($data['state']);
        }
        if (\array_key_exists('transferType', $data)) {
            $value_1 = $data['transferType'];
            if (is_string($data['transferType'])) {
                $value_1 = $data['transferType'];
            }
            $object->transferType = $value_1;
            unset($data['transferType']);
        }
        if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
            $object->businessProcessId = $data['businessProcessId'];
            unset($data['businessProcessId']);
        }
        elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
            $object->businessProcessId = null;
            unset($data['businessProcessId']);
        }
        if (\array_key_exists('fileTransferCount', $data)) {
            $object->fileTransferCount = $data['fileTransferCount'];
            unset($data['fileTransferCount']);
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->collectionId = $data['collectionId'];
            unset($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->collectionId = null;
            unset($data['collectionId']);
        }
        if (\array_key_exists('audit', $data)) {
            $value_2 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_2 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->audit = $value_2;
            unset($data['audit']);
        }
        if (\array_key_exists('itemProgress', $data)) {
            $object->itemProgress = $data['itemProgress'];
            unset($data['itemProgress']);
        }
        if (\array_key_exists('itemCount', $data)) {
            $object->itemCount = $data['itemCount'];
            unset($data['itemCount']);
        }
        if (\array_key_exists('fileUploadInProgressCount', $data)) {
            $object->fileUploadInProgressCount = $data['fileUploadInProgressCount'];
            unset($data['fileUploadInProgressCount']);
        }
        if (\array_key_exists('dataExtractionInProgressCount', $data)) {
            $object->dataExtractionInProgressCount = $data['dataExtractionInProgressCount'];
            unset($data['dataExtractionInProgressCount']);
        }
        if (\array_key_exists('itemsFailed', $data)) {
            $object->itemsFailed = $data['itemsFailed'];
            unset($data['itemsFailed']);
        }
        if (\array_key_exists('itemsCancelled', $data)) {
            $object->itemsCancelled = $data['itemsCancelled'];
            unset($data['itemsCancelled']);
        }
        if (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastDataExtractionProgressTimeStamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['lastDataExtractionProgressTimeStamp'], 'Y-m-d\TH:i:sP');
            }
            $object->lastDataExtractionProgressTimeStamp = $date;
            unset($data['lastDataExtractionProgressTimeStamp']);
        }
        elseif (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] === null) {
            $object->lastDataExtractionProgressTimeStamp = null;
            unset($data['lastDataExtractionProgressTimeStamp']);
        }
        if (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastFileUploadProgressTimeStamp']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['lastFileUploadProgressTimeStamp'], 'Y-m-d\TH:i:sP');
            }
            $object->lastFileUploadProgressTimeStamp = $date_1;
            unset($data['lastFileUploadProgressTimeStamp']);
        }
        elseif (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] === null) {
            $object->lastFileUploadProgressTimeStamp = null;
            unset($data['lastFileUploadProgressTimeStamp']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        $dataArray['name'] = $data->name ?? null;
        $value = $data->state ?? null;
        if (is_string($data->state ?? null)) {
            $value = $data->state ?? null;
        }
        $dataArray['state'] = $value;
        $value_1 = $data->transferType ?? null;
        if (is_string($data->transferType ?? null)) {
            $value_1 = $data->transferType ?? null;
        }
        $dataArray['transferType'] = $value_1;
        if (array_key_exists('businessProcessId', get_object_vars($data)) && null !== ($data->businessProcessId ?? null)) {
            $dataArray['businessProcessId'] = $data->businessProcessId ?? null;
        }
        $dataArray['fileTransferCount'] = $data->fileTransferCount ?? null;
        if (array_key_exists('collectionId', get_object_vars($data)) && null !== ($data->collectionId ?? null)) {
            $dataArray['collectionId'] = $data->collectionId ?? null;
        }
        $value_2 = $data->audit ?? null;
        if (is_object($data->audit ?? null)) {
            $value_2 = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
        }
        $dataArray['audit'] = $value_2;
        if (array_key_exists('itemProgress', get_object_vars($data)) && null !== ($data->itemProgress ?? null)) {
            $dataArray['itemProgress'] = $data->itemProgress ?? null;
        }
        if (array_key_exists('itemCount', get_object_vars($data)) && null !== ($data->itemCount ?? null)) {
            $dataArray['itemCount'] = $data->itemCount ?? null;
        }
        if (array_key_exists('fileUploadInProgressCount', get_object_vars($data)) && null !== ($data->fileUploadInProgressCount ?? null)) {
            $dataArray['fileUploadInProgressCount'] = $data->fileUploadInProgressCount ?? null;
        }
        if (array_key_exists('dataExtractionInProgressCount', get_object_vars($data)) && null !== ($data->dataExtractionInProgressCount ?? null)) {
            $dataArray['dataExtractionInProgressCount'] = $data->dataExtractionInProgressCount ?? null;
        }
        if (array_key_exists('itemsFailed', get_object_vars($data)) && null !== ($data->itemsFailed ?? null)) {
            $dataArray['itemsFailed'] = $data->itemsFailed ?? null;
        }
        if (array_key_exists('itemsCancelled', get_object_vars($data)) && null !== ($data->itemsCancelled ?? null)) {
            $dataArray['itemsCancelled'] = $data->itemsCancelled ?? null;
        }
        if (array_key_exists('lastDataExtractionProgressTimeStamp', get_object_vars($data)) && null !== ($data->lastDataExtractionProgressTimeStamp ?? null)) {
            $dataArray['lastDataExtractionProgressTimeStamp'] = ($data->lastDataExtractionProgressTimeStamp ?? null)?->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('lastFileUploadProgressTimeStamp', get_object_vars($data)) && null !== ($data->lastFileUploadProgressTimeStamp ?? null)) {
            $dataArray['lastFileUploadProgressTimeStamp'] = ($data->lastFileUploadProgressTimeStamp ?? null)?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\TransferDetail::class => false];
    }
}