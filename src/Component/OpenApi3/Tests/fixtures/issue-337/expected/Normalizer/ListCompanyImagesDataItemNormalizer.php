<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ListCompanyImagesDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ListCompanyImagesDataItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ListCompanyImagesDataItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\ListCompanyImagesDataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('imageId', $data)) {
            $object->setImageId($data['imageId']);
            unset($data['imageId']);
        }
        if (\array_key_exists('company', $data)) {
            $object->setCompany($this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\ListCompanyImagesDataItemCompany::class, 'json', $context));
            unset($data['company']);
        }
        if (\array_key_exists('document', $data)) {
            $object->setDocument($this->denormalizer->denormalize($data['document'], \CreditSafe\API\Model\ListCompanyImagesDataItemDocument::class, 'json', $context));
            unset($data['document']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        if (\array_key_exists('filingDate', $data)) {
            $object->setFilingDate($data['filingDate']);
            unset($data['filingDate']);
        }
        if (\array_key_exists('uploadDate', $data)) {
            $object->setUploadDate($data['uploadDate']);
            unset($data['uploadDate']);
        }
        if (\array_key_exists('accountingDate', $data)) {
            $object->setAccountingDate($data['accountingDate']);
            unset($data['accountingDate']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('localProperties', $data)) {
            $object->setLocalProperties($this->denormalizer->denormalize($data['localProperties'], \CreditSafe\API\Model\ListCompanyImagesDataItemLocalProperties::class, 'json', $context));
            unset($data['localProperties']);
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
        if ($data->isInitialized('imageId') && null !== $data->getImageId()) {
            $dataArray['imageId'] = $data->getImageId();
        }
        if ($data->isInitialized('company') && null !== $data->getCompany()) {
            $dataArray['company'] = $data->getCompany() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getCompany(), 'json', $context));
        }
        if ($data->isInitialized('document') && null !== $data->getDocument()) {
            $dataArray['document'] = $data->getDocument() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getDocument(), 'json', $context));
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        if ($data->isInitialized('source') && null !== $data->getSource()) {
            $dataArray['source'] = $data->getSource();
        }
        if ($data->isInitialized('filingDate') && null !== $data->getFilingDate()) {
            $dataArray['filingDate'] = $data->getFilingDate();
        }
        if ($data->isInitialized('uploadDate') && null !== $data->getUploadDate()) {
            $dataArray['uploadDate'] = $data->getUploadDate();
        }
        if ($data->isInitialized('accountingDate') && null !== $data->getAccountingDate()) {
            $dataArray['accountingDate'] = $data->getAccountingDate();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('comments') && null !== $data->getComments()) {
            $dataArray['comments'] = $data->getComments();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('localProperties') && null !== $data->getLocalProperties()) {
            $dataArray['localProperties'] = $data->getLocalProperties() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getLocalProperties(), 'json', $context));
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
        return [\CreditSafe\API\Model\ListCompanyImagesDataItem::class => false];
    }
}