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
class DocumentHistoryDifferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentHistoryDifference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentHistoryDifference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentHistoryDifference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->documentId = $data['documentId'];
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->documentId = null;
        }
        if (\array_key_exists('oldDocumentVersion', $data)) {
            $object->oldDocumentVersion = $data['oldDocumentVersion'];
        }
        if (\array_key_exists('newDocumentVersion', $data)) {
            $object->newDocumentVersion = $data['newDocumentVersion'];
        }
        if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
            $object->patch = $data['patch'];
        }
        elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
            $object->patch = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        $dataArray['oldDocumentVersion'] = $data->oldDocumentVersion ?? null;
        $dataArray['newDocumentVersion'] = $data->newDocumentVersion ?? null;
        if (array_key_exists('patch', get_object_vars($data)) && null !== ($data->patch ?? null)) {
            $dataArray['patch'] = $data->patch ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentHistoryDifference::class => false];
    }
}