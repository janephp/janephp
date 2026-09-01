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
class CreateTransferRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\CreateTransferRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\CreateTransferRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\CreateTransferRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('createCollection', $data) && \is_int($data['createCollection'])) {
            $data['createCollection'] = (bool) $data['createCollection'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('transferType', $data)) {
            $value = $data['transferType'];
            if (is_string($data['transferType'])) {
                $value = $data['transferType'];
            }
            $object->transferType = $value;
        }
        if (\array_key_exists('files', $data) && $data['files'] !== null) {
            $values = [];
            foreach ($data['files'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\TransferUploadFile::class, 'json', $context);
            }
            $object->files = $values;
        }
        elseif (\array_key_exists('files', $data) && $data['files'] === null) {
            $object->files = null;
        }
        if (\array_key_exists('webLinks', $data) && $data['webLinks'] !== null) {
            $values_1 = [];
            foreach ($data['webLinks'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\TransferWebLink::class, 'json', $context);
            }
            $object->webLinks = $values_1;
        }
        elseif (\array_key_exists('webLinks', $data) && $data['webLinks'] === null) {
            $object->webLinks = null;
        }
        if (\array_key_exists('collectionName', $data) && $data['collectionName'] !== null) {
            $object->collectionName = $data['collectionName'];
        }
        elseif (\array_key_exists('collectionName', $data) && $data['collectionName'] === null) {
            $object->collectionName = null;
        }
        if (\array_key_exists('createCollection', $data)) {
            $object->createCollection = $data['createCollection'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        $value = $data->transferType ?? null;
        if (is_string($data->transferType ?? null)) {
            $value = $data->transferType ?? null;
        }
        $dataArray['transferType'] = $value;
        if (array_key_exists('files', get_object_vars($data)) && null !== ($data->files ?? null)) {
            $values = [];
            foreach ($data->files ?? null as $value_1) {
                $values[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['files'] = $values;
        }
        if (array_key_exists('webLinks', get_object_vars($data)) && null !== ($data->webLinks ?? null)) {
            $values_1 = [];
            foreach ($data->webLinks ?? null as $value_2) {
                $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['webLinks'] = $values_1;
        }
        if (array_key_exists('collectionName', get_object_vars($data)) && null !== ($data->collectionName ?? null)) {
            $dataArray['collectionName'] = $data->collectionName ?? null;
        }
        $dataArray['createCollection'] = $data->createCollection ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\CreateTransferRequest::class => false];
    }
}