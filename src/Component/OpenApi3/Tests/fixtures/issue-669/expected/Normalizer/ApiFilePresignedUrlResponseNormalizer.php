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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiFilePresignedUrlResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']));
            unset($data['expires_at']);
        }
        if (\array_key_exists('object_key', $data)) {
            $object->setObjectKey($data['object_key']);
            unset($data['object_key']);
        }
        if (\array_key_exists('original_file_name', $data)) {
            $object->setOriginalFileName($data['original_file_name']);
            unset($data['original_file_name']);
        }
        if (\array_key_exists('presigned_url', $data)) {
            $object->setPresignedUrl($data['presigned_url']);
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
        if ($data->isInitialized('expiresAt') && null !== $data->getExpiresAt()) {
            $dataArray['expires_at'] = $data->getExpiresAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('objectKey') && null !== $data->getObjectKey()) {
            $dataArray['object_key'] = $data->getObjectKey();
        }
        if ($data->isInitialized('originalFileName') && null !== $data->getOriginalFileName()) {
            $dataArray['original_file_name'] = $data->getOriginalFileName();
        }
        if ($data->isInitialized('presignedUrl') && null !== $data->getPresignedUrl()) {
            $dataArray['presigned_url'] = $data->getPresignedUrl();
        }
        foreach ($data as $key => $value) {
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