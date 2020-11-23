<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\TransferDetail';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\TransferDetail';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
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
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('transferType', $data)) {
            $object->setTransferType($data['transferType']);
        }
        if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
            $object->setBusinessProcessId($data['businessProcessId']);
        }
        elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
            $object->setBusinessProcessId(null);
        }
        if (\array_key_exists('fileTransferCount', $data)) {
            $object->setFileTransferCount($data['fileTransferCount']);
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->setCollectionId($data['collectionId']);
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->setCollectionId(null);
        }
        if (\array_key_exists('audit', $data)) {
            $object->setAudit($data['audit']);
        }
        if (\array_key_exists('itemProgress', $data)) {
            $object->setItemProgress($data['itemProgress']);
        }
        if (\array_key_exists('itemCount', $data)) {
            $object->setItemCount($data['itemCount']);
        }
        if (\array_key_exists('fileUploadInProgressCount', $data)) {
            $object->setFileUploadInProgressCount($data['fileUploadInProgressCount']);
        }
        if (\array_key_exists('dataExtractionInProgressCount', $data)) {
            $object->setDataExtractionInProgressCount($data['dataExtractionInProgressCount']);
        }
        if (\array_key_exists('itemsFailed', $data)) {
            $object->setItemsFailed($data['itemsFailed']);
        }
        if (\array_key_exists('itemsCancelled', $data)) {
            $object->setItemsCancelled($data['itemsCancelled']);
        }
        if (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] !== null) {
            $object->setLastDataExtractionProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastDataExtractionProgressTimeStamp']));
        }
        elseif (\array_key_exists('lastDataExtractionProgressTimeStamp', $data) && $data['lastDataExtractionProgressTimeStamp'] === null) {
            $object->setLastDataExtractionProgressTimeStamp(null);
        }
        if (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] !== null) {
            $object->setLastFileUploadProgressTimeStamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastFileUploadProgressTimeStamp']));
        }
        elseif (\array_key_exists('lastFileUploadProgressTimeStamp', $data) && $data['lastFileUploadProgressTimeStamp'] === null) {
            $object->setLastFileUploadProgressTimeStamp(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['name'] = $object->getName();
        $data['state'] = $object->getState();
        $data['transferType'] = $object->getTransferType();
        if (null !== $object->getBusinessProcessId()) {
            $data['businessProcessId'] = $object->getBusinessProcessId();
        }
        $data['fileTransferCount'] = $object->getFileTransferCount();
        if (null !== $object->getCollectionId()) {
            $data['collectionId'] = $object->getCollectionId();
        }
        $data['audit'] = $object->getAudit();
        if (null !== $object->getItemProgress()) {
            $data['itemProgress'] = $object->getItemProgress();
        }
        if (null !== $object->getItemCount()) {
            $data['itemCount'] = $object->getItemCount();
        }
        if (null !== $object->getFileUploadInProgressCount()) {
            $data['fileUploadInProgressCount'] = $object->getFileUploadInProgressCount();
        }
        if (null !== $object->getDataExtractionInProgressCount()) {
            $data['dataExtractionInProgressCount'] = $object->getDataExtractionInProgressCount();
        }
        if (null !== $object->getItemsFailed()) {
            $data['itemsFailed'] = $object->getItemsFailed();
        }
        if (null !== $object->getItemsCancelled()) {
            $data['itemsCancelled'] = $object->getItemsCancelled();
        }
        if (null !== $object->getLastDataExtractionProgressTimeStamp()) {
            $data['lastDataExtractionProgressTimeStamp'] = $object->getLastDataExtractionProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getLastFileUploadProgressTimeStamp()) {
            $data['lastFileUploadProgressTimeStamp'] = $object->getLastFileUploadProgressTimeStamp()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}