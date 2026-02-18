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
class ApiModelPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiModelPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiModelPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiModelPublic();
        if (\array_key_exists('is_foundational', $data) && \is_int($data['is_foundational'])) {
            $data['is_foundational'] = (bool) $data['is_foundational'];
        }
        if (\array_key_exists('upload_complete', $data) && \is_int($data['upload_complete'])) {
            $data['upload_complete'] = (bool) $data['upload_complete'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('agreement', $data)) {
            $object->setAgreement($this->denormalizer->denormalize($data['agreement'], \Jane\Generated\DigitalOcean\Model\ApiAgreement::class, 'json', $context));
            unset($data['agreement']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('is_foundational', $data)) {
            $object->setIsFoundational($data['is_foundational']);
            unset($data['is_foundational']);
        }
        if (\array_key_exists('kb_default_chunk_size', $data)) {
            $object->setKbDefaultChunkSize($data['kb_default_chunk_size']);
            unset($data['kb_default_chunk_size']);
        }
        if (\array_key_exists('kb_max_chunk_size', $data)) {
            $object->setKbMaxChunkSize($data['kb_max_chunk_size']);
            unset($data['kb_max_chunk_size']);
        }
        if (\array_key_exists('kb_min_chunk_size', $data)) {
            $object->setKbMinChunkSize($data['kb_min_chunk_size']);
            unset($data['kb_min_chunk_size']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('parent_uuid', $data)) {
            $object->setParentUuid($data['parent_uuid']);
            unset($data['parent_uuid']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('upload_complete', $data)) {
            $object->setUploadComplete($data['upload_complete']);
            unset($data['upload_complete']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        if (\array_key_exists('version', $data)) {
            $object->setVersion($this->denormalizer->denormalize($data['version'], \Jane\Generated\DigitalOcean\Model\ApiModelVersion::class, 'json', $context));
            unset($data['version']);
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
        if ($data->isInitialized('agreement') && null !== $data->getAgreement()) {
            $dataArray['agreement'] = $this->normalizer->normalize($data->getAgreement(), 'json', $context);
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('isFoundational') && null !== $data->getIsFoundational()) {
            $dataArray['is_foundational'] = $data->getIsFoundational();
        }
        if ($data->isInitialized('kbDefaultChunkSize') && null !== $data->getKbDefaultChunkSize()) {
            $dataArray['kb_default_chunk_size'] = $data->getKbDefaultChunkSize();
        }
        if ($data->isInitialized('kbMaxChunkSize') && null !== $data->getKbMaxChunkSize()) {
            $dataArray['kb_max_chunk_size'] = $data->getKbMaxChunkSize();
        }
        if ($data->isInitialized('kbMinChunkSize') && null !== $data->getKbMinChunkSize()) {
            $dataArray['kb_min_chunk_size'] = $data->getKbMinChunkSize();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('parentUuid') && null !== $data->getParentUuid()) {
            $dataArray['parent_uuid'] = $data->getParentUuid();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uploadComplete') && null !== $data->getUploadComplete()) {
            $dataArray['upload_complete'] = $data->getUploadComplete();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        if ($data->isInitialized('version') && null !== $data->getVersion()) {
            $dataArray['version'] = $this->normalizer->normalize($data->getVersion(), 'json', $context);
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
        return [\Jane\Generated\DigitalOcean\Model\ApiModelPublic::class => false];
    }
}