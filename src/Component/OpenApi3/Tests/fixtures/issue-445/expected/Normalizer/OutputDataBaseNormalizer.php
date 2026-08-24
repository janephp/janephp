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
            $object->setFileExtension($data['fileExtension']);
        }
        elseif (\array_key_exists('fileExtension', $data) && $data['fileExtension'] === null) {
            $object->setFileExtension(null);
        }
        if (\array_key_exists('filePath', $data) && $data['filePath'] !== null) {
            $object->setFilePath($data['filePath']);
        }
        elseif (\array_key_exists('filePath', $data) && $data['filePath'] === null) {
            $object->setFilePath(null);
        }
        if (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] !== null) {
            $object->setFileSizeInBytes($data['fileSizeInBytes']);
        }
        elseif (\array_key_exists('fileSizeInBytes', $data) && $data['fileSizeInBytes'] === null) {
            $object->setFileSizeInBytes(null);
        }
        if (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] !== null) {
            $object->setSha1Hash($data['sha1Hash']);
        }
        elseif (\array_key_exists('sha1Hash', $data) && $data['sha1Hash'] === null) {
            $object->setSha1Hash(null);
        }
        if (\array_key_exists('originalFileName', $data) && $data['originalFileName'] !== null) {
            $object->setOriginalFileName($data['originalFileName']);
        }
        elseif (\array_key_exists('originalFileName', $data) && $data['originalFileName'] === null) {
            $object->setOriginalFileName(null);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'OutputDataImage' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputDataAudio' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputDataVideo' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputDataDocument' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputDataVector' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'OutputDataDefault' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if ($data->isInitialized('fileExtension') && null !== $data->getFileExtension()) {
            $dataArray['fileExtension'] = $data->getFileExtension();
        }
        if ($data->isInitialized('filePath') && null !== $data->getFilePath()) {
            $dataArray['filePath'] = $data->getFilePath();
        }
        if ($data->isInitialized('fileSizeInBytes') && null !== $data->getFileSizeInBytes()) {
            $dataArray['fileSizeInBytes'] = $data->getFileSizeInBytes();
        }
        if ($data->isInitialized('sha1Hash') && null !== $data->getSha1Hash()) {
            $dataArray['sha1Hash'] = $data->getSha1Hash();
        }
        if ($data->isInitialized('originalFileName') && null !== $data->getOriginalFileName()) {
            $dataArray['originalFileName'] = $data->getOriginalFileName();
        }
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputDataBase::class => false];
    }
}