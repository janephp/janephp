<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\OutputDataBase';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\OutputDataBase';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (array_key_exists('kind', $data) and 'OutputDataImage' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataImage', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataAudio' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataAudio', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataVideo' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataVideo', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataDocument' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataDocument', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataVector' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataVector', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OutputDataDefault' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\\API\\Model\\OutputDataDefault', $format, $context);
        }
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\OutputDataBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getKind() and 'OutputDataImage' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OutputDataAudio' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OutputDataVideo' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OutputDataDocument' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OutputDataVector' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if (null !== $object->getKind() and 'OutputDataDefault' === $object->getKind()) {
            return $this->normalizer->normalize($object, $format, $context);
        }
        if ($object->isInitialized('fileExtension') && null !== $object->getFileExtension()) {
            $data['fileExtension'] = $object->getFileExtension();
        }
        if ($object->isInitialized('filePath') && null !== $object->getFilePath()) {
            $data['filePath'] = $object->getFilePath();
        }
        if ($object->isInitialized('fileSizeInBytes') && null !== $object->getFileSizeInBytes()) {
            $data['fileSizeInBytes'] = $object->getFileSizeInBytes();
        }
        if ($object->isInitialized('sha1Hash') && null !== $object->getSha1Hash()) {
            $data['sha1Hash'] = $object->getSha1Hash();
        }
        if ($object->isInitialized('originalFileName') && null !== $object->getOriginalFileName()) {
            $data['originalFileName'] = $object->getOriginalFileName();
        }
        $data['kind'] = $object->getKind();
        return $data;
    }
}