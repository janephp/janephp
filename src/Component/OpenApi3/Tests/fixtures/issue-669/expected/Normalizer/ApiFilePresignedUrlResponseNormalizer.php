<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiFilePresignedUrlResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['expires_at'], 'Y-m-d\TH:i:sP');
            }
            $object->expiresAt = $date;
            unset($data['expires_at']);
        }
        if (\array_key_exists('object_key', $data)) {
            $object->objectKey = $data['object_key'];
            unset($data['object_key']);
        }
        if (\array_key_exists('original_file_name', $data)) {
            $object->originalFileName = $data['original_file_name'];
            unset($data['original_file_name']);
        }
        if (\array_key_exists('presigned_url', $data)) {
            $object->presignedUrl = $data['presigned_url'];
            unset($data['presigned_url']);
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
        if (array_key_exists('expiresAt', get_object_vars($data)) && null !== ($data->expiresAt ?? null)) {
            $dataArray['expires_at'] = ($data->expiresAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('objectKey', get_object_vars($data)) && null !== ($data->objectKey ?? null)) {
            $dataArray['object_key'] = $data->objectKey ?? null;
        }
        if (array_key_exists('originalFileName', get_object_vars($data)) && null !== ($data->originalFileName ?? null)) {
            $dataArray['original_file_name'] = $data->originalFileName ?? null;
        }
        if (array_key_exists('presignedUrl', get_object_vars($data)) && null !== ($data->presignedUrl ?? null)) {
            $dataArray['presigned_url'] = $data->presignedUrl ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse::class => false];
    }
}