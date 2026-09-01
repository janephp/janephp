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
class OutputDataVectorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputDataVector::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputDataVector::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputDataVector();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->fileExtension = $data['fileExtension'];
            unset($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->fileExtension = null;
            unset($data['fileExtension']);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->filePath = $data['filePath'];
            unset($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->filePath = null;
            unset($data['filePath']);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->fileSizeInBytes = $data['fileSizeInBytes'];
            unset($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->fileSizeInBytes = null;
            unset($data['fileSizeInBytes']);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->sha1Hash = $data['sha1Hash'];
            unset($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->sha1Hash = null;
            unset($data['sha1Hash']);
        }
        if (\array_key_exists('originalFileName', $data) && $data['originalFileName'] !== null) {
            $object->originalFileName = $data['originalFileName'];
            unset($data['originalFileName']);
        }
        elseif (\array_key_exists('originalFileName', $data) && $data['originalFileName'] === null) {
            $object->originalFileName = null;
            unset($data['originalFileName']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
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
        if (array_key_exists('fileExtension', get_object_vars($data)) && null !== ($data->fileExtension ?? null)) {
            $dataArray['fileExtension'] = $data->fileExtension ?? null;
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
        if (array_key_exists('originalFileName', get_object_vars($data)) && null !== ($data->originalFileName ?? null)) {
            $dataArray['originalFileName'] = $data->originalFileName ?? null;
        }
        $dataArray['kind'] = $data->kind ?? null;
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputDataVector::class => false];
    }
}