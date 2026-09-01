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
class VersionInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\VersionInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\VersionInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\VersionInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('fileVersion', $data) && $data['fileVersion'] !== null) {
            $object->fileVersion = $data['fileVersion'];
        }
        elseif (\array_key_exists('fileVersion', $data) && $data['fileVersion'] === null) {
            $object->fileVersion = null;
        }
        if (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] !== null) {
            $object->fileProductVersion = $data['fileProductVersion'];
        }
        elseif (\array_key_exists('fileProductVersion', $data) && $data['fileProductVersion'] === null) {
            $object->fileProductVersion = null;
        }
        if (\array_key_exists('contractVersion', $data) && $data['contractVersion'] !== null) {
            $object->contractVersion = $data['contractVersion'];
        }
        elseif (\array_key_exists('contractVersion', $data) && $data['contractVersion'] === null) {
            $object->contractVersion = null;
        }
        if (\array_key_exists('release', $data) && $data['release'] !== null) {
            $object->release = $data['release'];
        }
        elseif (\array_key_exists('release', $data) && $data['release'] === null) {
            $object->release = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('fileVersion', get_object_vars($data)) && null !== ($data->fileVersion ?? null)) {
            $dataArray['fileVersion'] = $data->fileVersion ?? null;
        }
        if (array_key_exists('fileProductVersion', get_object_vars($data)) && null !== ($data->fileProductVersion ?? null)) {
            $dataArray['fileProductVersion'] = $data->fileProductVersion ?? null;
        }
        if (array_key_exists('contractVersion', get_object_vars($data)) && null !== ($data->contractVersion ?? null)) {
            $dataArray['contractVersion'] = $data->contractVersion ?? null;
        }
        if (array_key_exists('release', get_object_vars($data)) && null !== ($data->release ?? null)) {
            $dataArray['release'] = $data->release ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\VersionInfo::class => false];
    }
}