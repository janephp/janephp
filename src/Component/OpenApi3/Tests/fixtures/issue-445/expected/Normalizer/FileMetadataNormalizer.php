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
class FileMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FileMetadata::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FileMetadata::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FileMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('names', $data) && $data['names'] !== null) {
            $value = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->names = $value;
        }
        elseif (\array_key_exists('names', $data) && $data['names'] === null) {
            $object->names = null;
        }
        if (\array_key_exists('descriptions', $data) && $data['descriptions'] !== null) {
            $value_2 = $data['descriptions'];
            if (is_array($data['descriptions']) && $this->isOnlyNumericKeys($data['descriptions'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['descriptions'] as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->descriptions = $value_2;
        }
        elseif (\array_key_exists('descriptions', $data) && $data['descriptions'] === null) {
            $object->descriptions = null;
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->fileExtension = $data['fileExtension'];
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->fileExtension = null;
        }
        if (\array_key_exists('fileName', $data) && $data['fileName'] !== null) {
            $object->fileName = $data['fileName'];
        }
        elseif (\array_key_exists('fileName', $data) && $data['fileName'] === null) {
            $object->fileName = null;
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->filePath = $data['filePath'];
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->filePath = null;
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->fileSizeInBytes = $data['fileSizeInBytes'];
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->fileSizeInBytes = null;
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->sha1Hash = $data['sha1Hash'];
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->sha1Hash = null;
        }
        if (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] !== null) {
            $object->xmpMetadata = $data['xmpMetadata'];
        }
        elseif (\array_key_exists('xmpMetadata', $data) && $data['xmpMetadata'] === null) {
            $object->xmpMetadata = null;
        }
        if (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] !== null) {
            $object->exifMetadata = $data['exifMetadata'];
        }
        elseif (\array_key_exists('exifMetadata', $data) && $data['exifMetadata'] === null) {
            $object->exifMetadata = null;
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->language = $data['language'];
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->language = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('names', get_object_vars($data)) && null !== ($data->names ?? null)) {
            $value = $data->names ?? null;
            if (is_object($data->names ?? null)) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->names ?? null as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $dataArray['names'] = $value;
        }
        if (array_key_exists('descriptions', get_object_vars($data)) && null !== ($data->descriptions ?? null)) {
            $value_2 = $data->descriptions ?? null;
            if (is_object($data->descriptions ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->descriptions ?? null as $key_1 => $value_3) {
                    $values_1[$key_1] = $value_3;
                }
                $value_2 = $values_1;
            }
            $dataArray['descriptions'] = $value_2;
        }
        if (array_key_exists('fileExtension', get_object_vars($data)) && null !== ($data->fileExtension ?? null)) {
            $dataArray['fileExtension'] = $data->fileExtension ?? null;
        }
        if (array_key_exists('fileName', get_object_vars($data)) && null !== ($data->fileName ?? null)) {
            $dataArray['fileName'] = $data->fileName ?? null;
        }
        if (array_key_exists('filePath', get_object_vars($data)) && null !== ($data->filePath ?? null)) {
            $dataArray['filePath'] = $data->filePath ?? null;
        }
        if (array_key_exists('fileSizeInBytes', get_object_vars($data)) && null !== ($data->fileSizeInBytes ?? null)) {
            $dataArray['fileSizeInBytes'] = $data->fileSizeInBytes ?? null;
        }
        if (array_key_exists('sha1Hash', get_object_vars($data)) && null !== ($data->sha1Hash ?? null)) {
            $dataArray['sha1Hash'] = $data->sha1Hash ?? null;
        }
        if (array_key_exists('xmpMetadata', get_object_vars($data)) && null !== ($data->xmpMetadata ?? null)) {
            $dataArray['xmpMetadata'] = $data->xmpMetadata ?? null;
        }
        if (array_key_exists('exifMetadata', get_object_vars($data)) && null !== ($data->exifMetadata ?? null)) {
            $dataArray['exifMetadata'] = $data->exifMetadata ?? null;
        }
        if (array_key_exists('language', get_object_vars($data)) && null !== ($data->language ?? null)) {
            $dataArray['language'] = $data->language ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FileMetadata::class => false];
    }
}