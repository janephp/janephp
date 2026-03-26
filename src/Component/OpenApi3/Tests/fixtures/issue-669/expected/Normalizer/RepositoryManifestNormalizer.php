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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\RepositoryManifest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('registry_name', $data)) {
            $object->setRegistryName($data['registry_name']);
            unset($data['registry_name']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($data['repository']);
            unset($data['repository']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
            unset($data['digest']);
        }
        if (\array_key_exists('compressed_size_bytes', $data)) {
            $object->setCompressedSizeBytes($data['compressed_size_bytes']);
            unset($data['compressed_size_bytes']);
        }
        if (\array_key_exists('size_bytes', $data)) {
            $object->setSizeBytes($data['size_bytes']);
            unset($data['size_bytes']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (\array_key_exists('blobs', $data)) {
            $values_1 = [];
            foreach ($data['blobs'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\RepositoryBlob::class, 'json', $context);
            }
            $object->setBlobs($values_1);
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
        if ($data->isInitialized('registryName') && null !== $data->getRegistryName()) {
            $dataArray['registry_name'] = $data->getRegistryName();
        }
        if ($data->isInitialized('repository') && null !== $data->getRepository()) {
            $dataArray['repository'] = $data->getRepository();
        }
        if ($data->isInitialized('digest') && null !== $data->getDigest()) {
            $dataArray['digest'] = $data->getDigest();
        }
        if ($data->isInitialized('compressedSizeBytes') && null !== $data->getCompressedSizeBytes()) {
            $dataArray['compressed_size_bytes'] = $data->getCompressedSizeBytes();
        }
        if ($data->isInitialized('sizeBytes') && null !== $data->getSizeBytes()) {
            $dataArray['size_bytes'] = $data->getSizeBytes();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if ($data->isInitialized('blobs') && null !== $data->getBlobs()) {
            $values_1 = [];
            foreach ($data->getBlobs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['blobs'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
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