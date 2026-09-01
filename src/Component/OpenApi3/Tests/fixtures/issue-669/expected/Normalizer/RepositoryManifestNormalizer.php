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
class RepositoryManifestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\RepositoryManifest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\RepositoryManifest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\RepositoryManifest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('registry_name', $data)) {
            $object->registryName = $data['registry_name'];
            unset($data['registry_name']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->repository = $data['repository'];
            unset($data['repository']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->digest = $data['digest'];
            unset($data['digest']);
        }
        if (\array_key_exists('compressed_size_bytes', $data)) {
            $object->compressedSizeBytes = $data['compressed_size_bytes'];
            unset($data['compressed_size_bytes']);
        }
        if (\array_key_exists('size_bytes', $data)) {
            $object->sizeBytes = $data['size_bytes'];
            unset($data['size_bytes']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date;
            unset($data['updated_at']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        if (\array_key_exists('blobs', $data)) {
            $values_1 = [];
            foreach ($data['blobs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\RepositoryBlob::class, 'json', $context);
            }
            $object->blobs = $values_1;
            unset($data['blobs']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('registryName', get_object_vars($data)) && null !== ($data->registryName ?? null)) {
            $dataArray['registry_name'] = $data->registryName ?? null;
        }
        if (array_key_exists('repository', get_object_vars($data)) && null !== ($data->repository ?? null)) {
            $dataArray['repository'] = $data->repository ?? null;
        }
        if (array_key_exists('digest', get_object_vars($data)) && null !== ($data->digest ?? null)) {
            $dataArray['digest'] = $data->digest ?? null;
        }
        if (array_key_exists('compressedSizeBytes', get_object_vars($data)) && null !== ($data->compressedSizeBytes ?? null)) {
            $dataArray['compressed_size_bytes'] = $data->compressedSizeBytes ?? null;
        }
        if (array_key_exists('sizeBytes', get_object_vars($data)) && null !== ($data->sizeBytes ?? null)) {
            $dataArray['size_bytes'] = $data->sizeBytes ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('blobs', get_object_vars($data)) && null !== ($data->blobs ?? null)) {
            $values_1 = [];
            foreach ($data->blobs ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['blobs'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\RepositoryManifest::class => false];
    }
}