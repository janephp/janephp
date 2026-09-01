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
class DocumentHistorySearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentHistorySearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentHistorySearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentHistorySearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('from', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['from']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['from'], 'Y-m-d\TH:i:sP');
            }
            $object->from = $date;
        }
        if (\array_key_exists('to', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['to']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['to'], 'Y-m-d\TH:i:sP');
            }
            $object->to = $date_1;
        }
        if (\array_key_exists('limit', $data)) {
            $object->limit = $data['limit'];
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->pageToken = $data['pageToken'];
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->pageToken = null;
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->documentId = $data['documentId'];
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->documentId = null;
        }
        if (\array_key_exists('documentVersion', $data)) {
            $object->documentVersion = $data['documentVersion'];
        }
        if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
            $object->documentType = $data['documentType'];
        }
        elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
            $object->documentType = null;
        }
        if (\array_key_exists('sort', $data) && $data['sort'] !== null) {
            $values = [];
            foreach ($data['sort'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\SortInfo::class, 'json', $context);
            }
            $object->sort = $values;
        }
        elseif (\array_key_exists('sort', $data) && $data['sort'] === null) {
            $object->sort = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['from'] = ($data->from ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['to'] = ($data->to ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['limit'] = $data->limit ?? null;
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        $dataArray['documentVersion'] = $data->documentVersion ?? null;
        if (array_key_exists('documentType', get_object_vars($data)) && null !== ($data->documentType ?? null)) {
            $dataArray['documentType'] = $data->documentType ?? null;
        }
        if (array_key_exists('sort', get_object_vars($data)) && null !== ($data->sort ?? null)) {
            $values = [];
            foreach ($data->sort ?? null as $value) {
                $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['sort'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentHistorySearchRequest::class => false];
    }
}