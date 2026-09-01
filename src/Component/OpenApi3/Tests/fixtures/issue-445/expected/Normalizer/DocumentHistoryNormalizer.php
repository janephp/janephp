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
class DocumentHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deleted', $data) && \is_int($data['deleted'])) {
            $data['deleted'] = (bool) $data['deleted'];
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
        if (\array_key_exists('documentDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['documentDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['documentDate'], 'Y-m-d\TH:i:sP');
            }
            $object->documentDate = $date;
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->document = $data['document'];
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->document = null;
        }
        if (\array_key_exists('timestamp', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date_1) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timestamp = $date_1;
        }
        if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
            $value = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAuditHistory::class, 'json', $context);
            }
            $object->audit = $value;
        }
        elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
            $object->audit = null;
        }
        if (\array_key_exists('deleted', $data)) {
            $object->deleted = $data['deleted'];
        }
        if (\array_key_exists('action', $data)) {
            $object->action = $data['action'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        $dataArray['documentVersion'] = $data->documentVersion ?? null;
        if (array_key_exists('documentType', get_object_vars($data)) && null !== ($data->documentType ?? null)) {
            $dataArray['documentType'] = $data->documentType ?? null;
        }
        $dataArray['documentDate'] = ($data->documentDate ?? null)->format('Y-m-d\TH:i:sP');
        if (array_key_exists('document', get_object_vars($data)) && null !== ($data->document ?? null)) {
            $dataArray['document'] = $data->document ?? null;
        }
        $dataArray['timestamp'] = ($data->timestamp ?? null)->format('Y-m-d\TH:i:sP');
        if (array_key_exists('audit', get_object_vars($data)) && null !== ($data->audit ?? null)) {
            $value = $data->audit ?? null;
            if (is_object($data->audit ?? null)) {
                $value = ($data->audit ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->audit ?? null, 'json', $context));
            }
            $dataArray['audit'] = $value;
        }
        $dataArray['deleted'] = $data->deleted ?? null;
        $dataArray['action'] = $data->action ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentHistory::class => false];
    }
}