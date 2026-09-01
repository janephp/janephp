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
            $object->imageId = $data['imageId'];
            unset($data['imageId']);
        }
        if (\array_key_exists('company', $data)) {
            $object->company = $this->denormalizer->denormalize($data['company'], \CreditSafe\API\Model\ListCompanyImagesDataItemCompany::class, 'json', $context);
            unset($data['company']);
        }
        if (\array_key_exists('document', $data)) {
            $object->document = $this->denormalizer->denormalize($data['document'], \CreditSafe\API\Model\ListCompanyImagesDataItemDocument::class, 'json', $context);
            unset($data['document']);
        }
        if (\array_key_exists('format', $data)) {
            $object->format = $data['format'];
            unset($data['format']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        if (\array_key_exists('filingDate', $data)) {
            $object->filingDate = $data['filingDate'];
            unset($data['filingDate']);
        }
        if (\array_key_exists('uploadDate', $data)) {
            $object->uploadDate = $data['uploadDate'];
            unset($data['uploadDate']);
        }
        if (\array_key_exists('accountingDate', $data)) {
            $object->accountingDate = $data['accountingDate'];
            unset($data['accountingDate']);
        }
        if (\array_key_exists('language', $data)) {
            $object->language = $data['language'];
            unset($data['language']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->comments = $data['comments'];
            unset($data['comments']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('localProperties', $data)) {
            $object->localProperties = $this->denormalizer->denormalize($data['localProperties'], \CreditSafe\API\Model\ListCompanyImagesDataItemLocalProperties::class, 'json', $context);
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
        if (array_key_exists('imageId', get_object_vars($data)) && null !== ($data->imageId ?? null)) {
            $dataArray['imageId'] = $data->imageId ?? null;
        }
        if (array_key_exists('company', get_object_vars($data)) && null !== ($data->company ?? null)) {
            $dataArray['company'] = ($data->company ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->company ?? null, 'json', $context));
        }
        if (array_key_exists('document', get_object_vars($data)) && null !== ($data->document ?? null)) {
            $dataArray['document'] = ($data->document ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->document ?? null, 'json', $context));
        }
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $dataArray['format'] = $data->format ?? null;
        }
        if (array_key_exists('source', get_object_vars($data)) && null !== ($data->source ?? null)) {
            $dataArray['source'] = $data->source ?? null;
        }
        if (array_key_exists('filingDate', get_object_vars($data)) && null !== ($data->filingDate ?? null)) {
            $dataArray['filingDate'] = $data->filingDate ?? null;
        }
        if (array_key_exists('uploadDate', get_object_vars($data)) && null !== ($data->uploadDate ?? null)) {
            $dataArray['uploadDate'] = $data->uploadDate ?? null;
        }
        if (array_key_exists('accountingDate', get_object_vars($data)) && null !== ($data->accountingDate ?? null)) {
            $dataArray['accountingDate'] = $data->accountingDate ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        if (array_key_exists('comments', get_object_vars($data)) && null !== ($data->comments ?? null)) {
            $dataArray['comments'] = $data->comments ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('localProperties', get_object_vars($data)) && null !== ($data->localProperties ?? null)) {
            $dataArray['localProperties'] = ($data->localProperties ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->localProperties ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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