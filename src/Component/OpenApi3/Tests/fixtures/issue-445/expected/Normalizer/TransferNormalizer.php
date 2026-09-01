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
class TransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Transfer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Transfer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Transfer();
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
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('state', $data)) {
            $value = $data['state'];
            if (is_string($data['state'])) {
                $value = $data['state'];
            }
            $object->state = $value;
        }
        if (\array_key_exists('transferType', $data)) {
            $value_1 = $data['transferType'];
            if (is_string($data['transferType'])) {
                $value_1 = $data['transferType'];
            }
            $object->transferType = $value_1;
        }
        if (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] !== null) {
            $object->businessProcessId = $data['businessProcessId'];
        }
        elseif (\array_key_exists('businessProcessId', $data) && $data['businessProcessId'] === null) {
            $object->businessProcessId = null;
        }
        if (\array_key_exists('fileTransferCount', $data)) {
            $object->fileTransferCount = $data['fileTransferCount'];
        }
        if (\array_key_exists('collectionId', $data) && $data['collectionId'] !== null) {
            $object->collectionId = $data['collectionId'];
        }
        elseif (\array_key_exists('collectionId', $data) && $data['collectionId'] === null) {
            $object->collectionId = null;
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Transfer::class => false];
    }
}