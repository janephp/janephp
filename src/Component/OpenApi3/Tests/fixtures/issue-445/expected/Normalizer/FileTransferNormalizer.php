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
class FileTransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FileTransfer::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FileTransfer::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FileTransfer();
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
        if (\array_key_exists('identifier', $data) && $data['identifier'] !== null) {
            $object->identifier = $data['identifier'];
        }
        elseif (\array_key_exists('identifier', $data)) {
            $object->identifier = null;
        }
        if (\array_key_exists('requestId', $data)) {
            $object->requestId = $data['requestId'];
        }
        if (\array_key_exists('transferId', $data)) {
            $object->transferId = $data['transferId'];
        }
        if (\array_key_exists('state', $data)) {
            $value = $data['state'];
            if (is_string($data['state'])) {
                $value = $data['state'];
            }
            $object->state = $value;
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->contentId = $data['contentId'];
        }
        elseif (\array_key_exists('contentId', $data)) {
            $object->contentId = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id;
        $dataArray['name'] = $data->name;
        if (array_key_exists('identifier', get_object_vars($data)) && null !== ($data->identifier ?? null)) {
            $dataArray['identifier'] = $data->identifier;
        }
        $dataArray['requestId'] = $data->requestId;
        $dataArray['transferId'] = $data->transferId;
        $value = $data->state;
        if (is_string($data->state)) {
            $value = $data->state;
        }
        $dataArray['state'] = $value;
        if (array_key_exists('contentId', get_object_vars($data)) && null !== ($data->contentId ?? null)) {
            $dataArray['contentId'] = $data->contentId;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FileTransfer::class => false];
    }
}