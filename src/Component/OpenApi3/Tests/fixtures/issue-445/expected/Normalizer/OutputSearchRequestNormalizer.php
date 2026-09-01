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
class OutputSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
        if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
            $values = [];
            foreach ($data['contentIds'] as $value) {
                $values[] = $value;
            }
            $object->contentIds = $values;
        }
        elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
            $object->contentIds = null;
        }
        if (\array_key_exists('renderingStates', $data) && $data['renderingStates'] !== null) {
            $values_1 = [];
            foreach ($data['renderingStates'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->renderingStates = $values_1;
        }
        elseif (\array_key_exists('renderingStates', $data) && $data['renderingStates'] === null) {
            $object->renderingStates = null;
        }
        if (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] !== null) {
            $values_2 = [];
            foreach ($data['fileExtensions'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->fileExtensions = $values_2;
        }
        elseif (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] === null) {
            $object->fileExtensions = null;
        }
        if (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] !== null) {
            $values_3 = [];
            foreach ($data['outputFormatIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->outputFormatIds = $values_3;
        }
        elseif (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] === null) {
            $object->outputFormatIds = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['limit'] = $data->limit ?? null;
        if (array_key_exists('pageToken', get_object_vars($data)) && null !== ($data->pageToken ?? null)) {
            $dataArray['pageToken'] = $data->pageToken ?? null;
        }
        if (array_key_exists('contentIds', get_object_vars($data)) && null !== ($data->contentIds ?? null)) {
            $values = [];
            foreach ($data->contentIds ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['contentIds'] = $values;
        }
        if (array_key_exists('renderingStates', get_object_vars($data)) && null !== ($data->renderingStates ?? null)) {
            $values_1 = [];
            foreach ($data->renderingStates ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['renderingStates'] = $values_1;
        }
        if (array_key_exists('fileExtensions', get_object_vars($data)) && null !== ($data->fileExtensions ?? null)) {
            $values_2 = [];
            foreach ($data->fileExtensions ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['fileExtensions'] = $values_2;
        }
        if (array_key_exists('outputFormatIds', get_object_vars($data)) && null !== ($data->outputFormatIds ?? null)) {
            $values_3 = [];
            foreach ($data->outputFormatIds ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['outputFormatIds'] = $values_3;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputSearchRequest::class => false];
    }
}