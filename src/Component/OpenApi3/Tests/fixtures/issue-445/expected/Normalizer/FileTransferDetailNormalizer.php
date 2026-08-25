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
class FileTransferDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FileTransferDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FileTransferDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FileTransferDetail();
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
        if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
            $object->setIdentifier($data['identifier']);
            unset($data['identifier']);
        }
        elseif (\array_key_exists('identifier', $data) && $data['identifier'] === null) {
            $object->setIdentifier(null);
            unset($data['identifier']);
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
            $value = $data['state'];
            if (is_string($data['state'])) {
                $value = $data['state'];
            }
            $object->setState($value);
            unset($data['state']);
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->setContentId($data['contentId']);
            unset($data['contentId']);
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->setContentId(null);
            unset($data['contentId']);
        }
        if (\array_key_exists('audit', $data)) {
            $value_1 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_1 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->setAudit($value_1);
            unset($data['audit']);
        }
        if (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] !== null) {
            $value_2 = $data['fileMetadata'];
            if (is_array($data['fileMetadata'])) {
                $value_2 = $this->denormalizer->denormalize($data['fileMetadata'], \PicturePark\API\Model\FileMetadata::class, 'json', $context);
            }
            $object->setFileMetadata($value_2);
            unset($data['fileMetadata']);
        }
        elseif (\array_key_exists('fileMetadata', $data) && $data['fileMetadata'] === null) {
            $object->setFileMetadata(null);
            unset($data['fileMetadata']);
        }
        if (\array_key_exists('outputItems', $data) && $data['outputItems'] !== null) {
            $values = [];
            foreach ($data['outputItems'] as $value_3) {
                $values[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\FileTransferOutput::class, 'json', $context);
            }
            $object->setOutputItems($values);
            unset($data['outputItems']);
        }
        elseif (\array_key_exists('outputItems', $data) && $data['outputItems'] === null) {
            $object->setOutputItems(null);
            unset($data['outputItems']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('identifier') && null !== $data->getIdentifier()) {
            $dataArray['identifier'] = $data->getIdentifier();
        }
        $dataArray['requestId'] = $data->getRequestId();
        $dataArray['transferId'] = $data->getTransferId();
        $value = $data->getState();
        if (is_string($data->getState())) {
            $value = $data->getState();
        }
        $dataArray['state'] = $value;
        if ($data->isInitialized('contentId') && null !== $data->getContentId()) {
            $dataArray['contentId'] = $data->getContentId();
        }
        $value_1 = $data->getAudit();
        if (is_object($data->getAudit())) {
            $value_1 = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
        }
        $dataArray['audit'] = $value_1;
        if ($data->isInitialized('fileMetadata') && null !== $data->getFileMetadata()) {
            $value_2 = $data->getFileMetadata();
            if (is_object($data->getFileMetadata())) {
                $value_2 = $data->getFileMetadata() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFileMetadata(), 'json', $context));
            }
            $dataArray['fileMetadata'] = $value_2;
        }
        if ($data->isInitialized('outputItems') && null !== $data->getOutputItems()) {
            $values = [];
            foreach ($data->getOutputItems() as $value_3) {
                $values[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['outputItems'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FileTransferDetail::class => false];
    }
}