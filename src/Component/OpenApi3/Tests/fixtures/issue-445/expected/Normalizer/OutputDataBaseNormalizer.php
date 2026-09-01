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
class OutputDataBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputDataBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputDataBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputDataBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'OutputDataImage' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataImage', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataAudio' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataAudio', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataVideo' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataVideo', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataDocument' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataDocument', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataVector' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataVector', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataDefault' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OutputDataDefault', $format, $context);
        }
        if (\array_key_exists('fileExtension', $data) && $data['fileExtension'] !== null) {
            $object->fileExtension = $data['fileExtension'];
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->fileExtension = null;
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
        if (\array_key_exists('originalFileName', $data) && $data['originalFileName'] !== null) {
            $object->originalFileName = $data['originalFileName'];
        }
        elseif (\array_key_exists('originalFileName', $data) && $data['originalFileName'] === null) {
            $object->originalFileName = null;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'OutputDataImage' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputDataAudio' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputDataVideo' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputDataDocument' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputDataVector' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OutputDataDefault' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
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
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputDataBase::class => false];
    }
}