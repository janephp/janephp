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
class DocumentChangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\DocumentChange::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\DocumentChange::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\DocumentChange();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('documentName', $data) && $data['documentName'] !== null) {
            $object->documentName = $data['documentName'];
        }
        elseif (\array_key_exists('documentName', $data) && $data['documentName'] === null) {
            $object->documentName = null;
        }
        if (\array_key_exists('documentId', $data) && $data['documentId'] !== null) {
            $object->documentId = $data['documentId'];
        }
        elseif (\array_key_exists('documentId', $data) && $data['documentId'] === null) {
            $object->documentId = null;
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
        }
        if (\array_key_exists('action', $data) && $data['action'] !== null) {
            $object->action = $data['action'];
        }
        elseif (\array_key_exists('action', $data) && $data['action'] === null) {
            $object->action = null;
        }
        if (\array_key_exists('timeStamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timeStamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timeStamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timeStamp = $date;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('documentName', get_object_vars($data)) && null !== ($data->documentName ?? null)) {
            $dataArray['documentName'] = $data->documentName ?? null;
        }
        if (array_key_exists('documentId', get_object_vars($data)) && null !== ($data->documentId ?? null)) {
            $dataArray['documentId'] = $data->documentId ?? null;
        }
        $dataArray['version'] = $data->version ?? null;
        if (array_key_exists('action', get_object_vars($data)) && null !== ($data->action ?? null)) {
            $dataArray['action'] = $data->action ?? null;
        }
        $dataArray['timeStamp'] = ($data->timeStamp ?? null)->format('Y-m-d\TH:i:sP');
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\DocumentChange::class => false];
    }
}