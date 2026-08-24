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
class RepositoryTagNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\RepositoryTag::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\RepositoryTag::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\RepositoryTag();
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
            $object->setRegistryName($data['registry_name']);
            unset($data['registry_name']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($data['repository']);
            unset($data['repository']);
        }
        if (\array_key_exists('tag', $data)) {
            $object->setTag($data['tag']);
            unset($data['tag']);
        }
        if (\array_key_exists('manifest_digest', $data)) {
            $object->setManifestDigest($data['manifest_digest']);
            unset($data['manifest_digest']);
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
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date);
            unset($data['updated_at']);
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
        if ($data->isInitialized('registryName') && null !== $data->getRegistryName()) {
            $dataArray['registry_name'] = $data->getRegistryName();
        }
        if ($data->isInitialized('repository') && null !== $data->getRepository()) {
            $dataArray['repository'] = $data->getRepository();
        }
        if ($data->isInitialized('tag') && null !== $data->getTag()) {
            $dataArray['tag'] = $data->getTag();
        }
        if ($data->isInitialized('manifestDigest') && null !== $data->getManifestDigest()) {
            $dataArray['manifest_digest'] = $data->getManifestDigest();
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\RepositoryTag::class => false];
    }
}